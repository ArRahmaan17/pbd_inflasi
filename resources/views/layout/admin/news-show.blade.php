@extends('app')
@section('content')
    <div class="container-fluid my-5">
        <div class="card mb-3 shadow-none bg-transparent m-0">
            <div class="card-body p-0">
                <div class="row justify-content-between">
                    <div class="col-8">
                        <img src="{{ asset($news->photo) }}" style="max-height: 300px; object-fit:contain" class="card-img-top"
                            alt="{{ $news->photo }}">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <div class="separator my-3"></div>
                        <p class="card-text">{{ $news->content }}</p>
                    </div>
                    <div class="col-4 bg-opacity-50 bg-white rounded p-3 position-relative">
                        <p class="card-text text-capitalize">Ditulis pada {{ $news->updated_at }} oleh
                        <div class="text-body-secondary text-lowercase">{{ $news->user->name ?? $news->user->email }}</div>
                        </p>
                        <div class="separator my-3"></div>
                        <div class="row">
                        </div>
                        <div class="position-absolute bottom-0 end-0 start-0 translate-middle-y px-2">
                            <div class="w-lg-50 position-relative">
                                <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4"
                                    placeholder="Beri Komentar...." name="card_cvv" />
                                <div class="position-absolute translate-middle-y top-50 end-0 me-3" style="cursor:pointer;">
                                    <i class="fas fa-share fs-4 text-grey-800 hover-scale"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        var last_id = 0;

        function newsElement(data) {
            let html = ``;
            data.forEach(element => {
                html += `<div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-1 navigate" data-href="{{ route('news.show') }}/${element.slug}">
                <div class="card card-stretch-33 card-flush">
                    <div class="ribbon ribbon-triangle ribbon-top-start border-success">
                        <div class="ribbon-icon mt-n5 ms-n6" title="${element.type == 'pu_news' || element.type == 'pr_news'? 'Berita': 'Pengumuman'}">
                            ${element.type == 'pu_news' || element.type == 'pr_news'  ? '<i class="fas fa-rss text-gray-100"></i>': '<i class="fas fa-bullhorn text-gray-100"></i>'}
                        </div>
                    </div>
                    <img src="{{ env('APP_URL') }}/${element.photo}"
                        class="card-img-top" alt="${element.photo}">
                    <div class="card-body text-truncate py-1">
                        ${element.title}
                    </div>
                    <div class="card-footer text-capitalize">
                        ditulis ${moment(element.updated_at).fromNow()} oleh <span class='text-info text-lowercase'>${element.user.name ?? element.user.email}</span>
                    </div>
                </div>
            </div>`;
                last_id = element.id;
            });
            if (html !== '') {
                $("#news-container").append(html);
            } else {
                $('.max-view').remove();
                if (last_id != 0) {
                    $("#news-container").append(`<div class="max-view mt-5 col-12 text-center">
                            <span>Semua Berita Telah Di Tampilkan</span>
                     </div>`);
                } else {
                    $("#news-container").append(`<div class="max-view mt-5 col-12 text-center">
                            <span>Berita Tidak Tersedia</span>
                     </div>`)
                }
            }
            $('.navigate').click(function() {
                blockUi();
                setTimeout(() => {
                    releaseUi();
                    window.location = $(this).data('href')
                }, 1000);
            })
        }

        function loadNews(limit = 1) {
            $.ajax({
                type: "get",
                url: `{{ route('news.load-limit') }}`,
                data: {
                    limit: limit,
                    id: last_id,
                },
                dataType: "json",
                success: function(response) {
                    newsElement(response.data);
                },
                error: function(error) {
                    newsElement(error.responseJSON.data);
                }
            });
        }
        $(function() {
            var screen_size = $(window).width();
            if (screen_size < 576) {
                loadNews(3);
            } else if (screen_size >= 576 && screen_size < 768) {
                loadNews(5);
            } else if (screen_size >= 768) {
                loadNews(9);
            }
            $(window).scroll(function() {
                if ($(window).scrollTop() == $(document).height() - $(window).height() && $('.max-view')
                    .length == 0) {
                    if (screen_size < 576) {
                        loadNews(1 + 2);
                    } else if (screen_size >= 576 && screen_size < 768) {
                        loadNews(2 + 3);
                    } else if (screen_size >= 768) {
                        loadNews(3 + 4);
                    }
                }
            });
        });
    </script>
@endpush
