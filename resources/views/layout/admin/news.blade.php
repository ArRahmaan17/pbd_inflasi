@extends('app')
@section('content')
    <div class="container-fluid my-5">
        <div class="row align-items-center">
            <div class="col-10">
                <h1>Berita Terkini</h1>
            </div>
            @auth
                <div class="col-2 text-end">
                    <a href="{{ route('news.create') }}" class="btn btn-success btn-sm">Tambah Berita</a>
                </div>
            @endauth
        </div>
        <div class="separator border-3 my-3"></div>
        <div class="card bg-transparent row flex-row justify-content-between py-5 rounded-0" id="news-container">
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
                    <img src="{{ env('APP_URL') }}/assets/${element.photo}"
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
                let card = this.querySelector('.card')
                let UiBlock = new KTBlockUI(card, {
                    overlayClass: "bg-black bg-opacity-25",
                    message: '<div class="blockui-message text-grey-300"><span class="spinner-border text-grey-300"></span> Loading Data...</div>'
                });
                UiBlock.block()
                setTimeout(() => {
                    UiBlock.release()
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
                loadNews(4);
            } else if (screen_size >= 576 && screen_size < 768) {
                loadNews(6);
            } else if (screen_size >= 768) {
                loadNews(9);
            }
            $(window).scroll(function() {
                if (
                    (Math.floor($(window).scrollTop()) == $(document).height() - $(window).height() || Math
                        .round($(window).scrollTop()) == $(document).height() - $(window).height()) &&
                    $('.max-view').length == 0
                ) {
                    if (screen_size < 576) {
                        loadNews(4);
                    } else if (screen_size >= 576 && screen_size < 768) {
                        loadNews(6);
                    } else if (screen_size >= 768) {
                        loadNews(9);
                    }
                }
            });
        });
    </script>
@endpush
