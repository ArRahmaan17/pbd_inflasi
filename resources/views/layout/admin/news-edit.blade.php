@extends('app')
@section('content')
    <div class="container-fluid my-5">
        <h1>Edit Berita / Pengumuman</h1>
        <div class="separator border-3 my-3"></div>
        <div class="card bg-transparent row flex-row justify-content-between py-5 rounded-0">
            <form method="POST" id="create_news">
                @csrf
                <div class="mb-10">
                    <label for="title" class="required form-label">Judul Berita / Pengumuman</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $news->title }}"
                        placeholder="Akan Hadir Pasar Bahan Pangan Pada Jumat ini....." />
                </div>
                <div class="mb-10">
                    <label for="content" class="required form-label">Isi Berita / Pengumuman</label>
                    <textarea class="form-control" name="content" id="content"></textarea>
                </div>
                <div class="mb-3">
                    <label class="required form-label">Thumbnail</label>
                    <div class="col border-gray-300 border-dashed p-3">
                        <div class="dropzone dropzone-queue mb-2" id="kt_dropzonejs_example_2">
                            <div class="dropzone-panel mb-lg-0 mb-2">
                                <a class="dropzone-select btn btn-sm btn-primary me-2"><i class="fas fa-plus"></i>Attach
                                    files</a>
                            </div>
                            <div class="dropzone-items wm-200px">
                                <div class="dropzone-item" style="display:none">

                                    <div class="dropzone-file">
                                        <img data-dz-thumbnail />
                                        <div class="dropzone-filename" title="some_image_file_name.jpg">
                                            <span data-dz-name>some_image_file_name.jpg</span>
                                            <strong>(<span data-dz-size>340kb</span>)</strong>
                                        </div>

                                        <div class="dropzone-error" data-dz-errormessage></div>
                                    </div>

                                    <div class="dropzone-progress">
                                        <div class="progress">
                                            <div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0"
                                                aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="dropzone-toolbar">
                                        <span class="dropzone-start"><i class="bi bi-play-fill fs-3"></i></span>
                                        <span class="dropzone-cancel" data-dz-remove style="display: none;"><i
                                                class="bi bi-x fs-3"></i></span>
                                        <span class="dropzone-delete" data-dz-remove><i class="bi bi-x fs-1"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <span class="form-text text-muted">Max file size is 1MB</span>
                    </div>
                </div>
                <div class="mb-10">
                    <label for="type" class="required form-label">Tipe Berita / Pengumuman</label>
                    <select name="type" id="type" class="form-select">
                        <option value="">Pilih Tipe</option>
                        <option value="pu_news" {{ $news->type == 'pu_news' ? 'selected' : '' }}>Berita Public</option>
                        <option value="pu_announcement" {{ $news->type == 'pu_announcement' ? 'selected' : '' }}>
                            Pengumuman Public
                        </option>
                        <option value="pr_news" {{ $news->type == 'pr_news' ? 'selected' : '' }}>Berita Internal</option>
                        <option value="pr_announcement" {{ $news->type == 'pr_announcement' ? 'selected' : '' }}>Pengumuman
                            Internal
                        </option>
                    </select>
                </div>
                <button id="submit" class="btn btn-warning">Update</button>
            </form>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <script>
        function example_image_upload_handler(blobInfo, success, failure, progress) {
            var formData;
            formData = new FormData();
            formData.append('file', blobInfo.blob(), blobInfo.filename());
            formData.append('_token', `{{ csrf_token() }}`);
            formData.append('rand', `{{ $rand }}`);
            xhr = new XMLHttpRequest();
            xhr.withCredentials = false;
            xhr.open('POST', `{{ route('news.asset-upload') }}`);

            xhr.upload.onprogress = function(e) {
                progress(e.loaded / e.total * 100);
            };

            xhr.onload = function() {
                var json;

                if (xhr.status === 403) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                if (xhr.status < 200 || xhr.status >= 300) {
                    failure('HTTP Error: ' + xhr.status);
                    return;
                }

                json = JSON.parse(xhr.responseText);

                if (!json || typeof json.location != 'string') {
                    failure('Invalid JSON: ' + xhr.responseText);
                    return;
                }

                success(json.location);
            };

            xhr.onerror = function() {
                failure('Image upload failed due to a XHR Transport error. Code: ' + xhr.status);
            };
            xhr.send(formData);
        };
        $(function() {

            var editor;

            var options = {
                selector: "#content",
                height: "480",
                menubar: false,
                image_title: true,
                toolbar: ["styleselect fontselect fontsizeselect",
                    "undo redo | bold italic | link image | alignleft aligncenter alignright alignjustify",
                    "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | code | preview "
                ],
                plugins: "advlist autolink link image lists charmap preview code",
                images_upload_handler: example_image_upload_handler,
                images_upload_credentials: true,
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            };

            if (KTThemeMode.getMode() === "dark") {
                options["skin"] = "oxide-dark";
                options["content_css"] = "dark";
            }

            tinymce.init(options);
            // dropzone
            const id = "#kt_dropzonejs_example_2";
            const dropzone = document.querySelector(id);
            var previewNode = dropzone.querySelector(".dropzone-item");
            previewNode.id = "";
            var previewTemplate = previewNode.parentNode.innerHTML;
            previewNode.parentNode.removeChild(previewNode);

            var myDropzone = new Dropzone(id, {
                url: "{{ route('news.thumbnail-upload') }}",
                parallelUploads: 20,
                paramName: "file",
                acceptedFiles: 'image/*',
                previewTemplate: previewTemplate,
                headers: {
                    'X-CSRF-TOKEN': `{{ csrf_token() }}`,
                    'X-RAND-TOKEN': `{{ $rand }}`,
                },
                thumbnail(file, dataUrl) {
                    if (file.previewElement) {
                        file.previewElement.classList.remove("dz-file-preview");
                        for (let thumbnailElement of file.previewElement.querySelectorAll(
                                "[data-dz-thumbnail]"
                            )) {
                            thumbnailElement.alt = file.name;
                            thumbnailElement.src = dataUrl;
                        }

                        return setTimeout(
                            () => file.previewElement.classList.add("dz-image-preview"),
                            1
                        );
                    }
                },
                maxFiles: 1,
                maxFilesize: 1,
                previewsContainer: id + " .dropzone-items",
                clickable: id +
                    " .dropzone-select"
            });

            myDropzone.on("addedfile", function(file) {
                // Hookup the start button
                file.previewElement.querySelector(id + " .dropzone-start").onclick = function() {
                    myDropzone.enqueueFile(file);
                };
                const dropzoneItems = dropzone.querySelectorAll('.dropzone-item');
                dropzoneItems.forEach(dropzoneItem => {
                    dropzoneItem.style.display = '';
                });
                $('.dropzone-delete').click(function() {
                    let cancelThumbnail = new FormData;
                    cancelThumbnail.append('_token', `{{ csrf_token() }}`);
                    cancelThumbnail.append('rand', `{{ $rand }}`);
                    sendXhr('POST', `{{ route('news.cancel-thumbnail') }}`, cancelThumbnail);
                });
            });

            myDropzone.on("totaluploadprogress", function(progress) {
                const progressBars = dropzone.querySelectorAll('.progress-bar');
                progressBars.forEach(progressBar => {
                    progressBar.style.width = progress + "%";
                });
            });

            myDropzone.on("sending", function(file) {

                const progressBars = dropzone.querySelectorAll('.progress-bar');
                progressBars.forEach(progressBar => {
                    progressBar.style.opacity = "1";
                });

                file.previewElement.querySelector(id + " .dropzone-start").setAttribute("disabled",
                    "disabled");
            });

            myDropzone.on("complete", function(progress) {
                const progressBars = dropzone.querySelectorAll('.dz-complete');

                setTimeout(function() {
                    progressBars.forEach(progressBar => {
                        progressBar.querySelector('.progress-bar').style.opacity = "0";
                        progressBar.querySelector('.progress').style.opacity = "0";
                        progressBar.querySelector('.dropzone-start').style.opacity = "0";
                    });
                }, 300);
            });

            $('#submit').click(function(e) {
                e.preventDefault();
                e.stopPropagation();
                let data = new FormData;
                $('#create_news').serializeArray().map(function(field) {
                    if (field.value != '') {
                        data.append([`${field.name}`], field.value);
                    }
                });
                data.append('content', tinymce.get('content').getContent());
                sendXhr('POST', `{{ route('news.update') }}`, data);
                // on controller if have same random integer move to untemporary file store and remove all content if have asset on temporary folder to main folder
            });
        });
    </script>
@endpush
