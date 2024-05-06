@extends('app')
@section('content')
    <div class="container-fluid my-5">
        <h1>Berita Terkini</h1>
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
                html += `<div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-1 navigate" data-href="{{ route('news') }}/${element.slug}">
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
                if ($(window).scrollTop() == $(document).height() - $(window).height()) {
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
