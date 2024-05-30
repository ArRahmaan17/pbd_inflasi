@extends('app')
@section('content')
    <div class="container-fluid my-5">
        <div class="card mb-3 shadow-none bg-transparent m-0 min-h-100">
            <div class="card-body p-0 min-h-75">
                <div class="row justify-content-end mb-5">
                    <div class="col-3 text-end column-gap-1">
                        <a class="btn btn-icon btn-sm btn-success" href="{{ route('news.index') }}"><i
                                class="fas fa-arrow-left"></i>
                        </a>
                        @auth
                            @if (auth()->user()->id == $news->user_id)
                                <a class="btn btn-icon btn-sm btn-warning" href="{{ route('news.edit', $news->slug) }}"><i
                                        class="fas fa-pen"></i></a>
                                <button class="btn btn-icon btn-sm btn-danger destroy-news"><i
                                        class="fas fa-trash-alt"></i></button>
                            @endif
                        @endauth
                    </div>
                </div>
                <div class="row justify-content-between">
                    <div class="col-12 col-lg-8 mb-5 mb-sm-0">
                        <img src="{{ env('APP_URL') . '/assets/' . $news->photo }}"
                            style="max-height: 300px; object-fit:contain" class="card-img-top" alt="{{ $news->photo }}">
                        <h5 class="card-title">{{ $news->title }}</h5>
                        <div class="separator my-3"></div>
                        <div class="card-text px-3">{!! $news->content !!}</div>
                    </div>
                    <div class="col-12 col-lg-4 bg-opacity-50 bg-white rounded p-3 position-relative shadow-sm">
                        <p class="card-text text-capitalize">Ditulis pada {{ $news->updated_at }} oleh
                        <div class="text-body-secondary text-lowercase">{{ $news->user->name ?? $news->user->email }}</div>
                        </p>
                        <div class="separator my-3"></div>
                        <div class="row min-h-225px mh-75 scroll-y pb-4" id="container_comment" data-kt-scroll="true"
                            data-kt-scroll-height="{default: '50px', lg: '50px'}">
                            @forelse ($news->comment as $comment)
                                <div class="col-12">
                                    <div class="text-gray-500">
                                        {{ $comment->comment_user->name ?? $comment->comment_user->email }}
                                    </div>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-2"></span> {{ $comment->comment }}
                                    </li>
                                    <li class="d-flex align-items-center py-2">
                                        <span class="bullet me-2"></span> test
                                    </li>
                                </div>
                            @empty
                                <div class="col-12 first-comment">
                                    <div class="text-gray-500 text-center">
                                        Kolom Komentar Masih Kosong
                                    </div>
                                </div>
                            @endforelse
                        </div>
                        @auth
                            <div class="position-absolute bottom-0 end-0 start-0 translate-middle-y px-2">
                                <div class="position-relative">
                                    <input type="text" class="form-control form-control-solid"
                                        placeholder="Beri Komentar...." name="comment" maxlength="100" />
                                    <div class="position-absolute translate-middle-y bottom-0 end-0 me-3"
                                        style="cursor:pointer;" onclick="sendComment()">
                                        <i class="fas fa-share fs-4 text-grey-800 hover-scale"></i>
                                    </div>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script>
        function sendComment() {
            $.ajax({
                type: "POST",
                url: `{{ url()->full() }}/comment`,
                data: {
                    comment: $('[name=comment]').val(),
                    _token: `{{ csrf_token() }}`,
                },
                dataType: "json",
                success: function(response) {
                    ElementComment();
                    $('[name=comment]').val('');
                }
            });
        }

        function ElementComment() {
            let comment = $('[name=comment]').val();
            $('.first-comment').remove();
            $('#container_comment').append(`<div class="col-12">
                        <div class="text-gray-500">
                        @auth
                            {{ Auth::user()->name ?? Auth::user()->email }}
                        @endauth
                        </div>
                        <li class="d-flex align-items-center py-2">
                            <span class="bullet me-2"></span> ${comment}
                        </li>
                    </div>`);
        }
        $('[name=comment]').maxlength({
            warningClass: "badge badge-warning",
            limitReachedClass: "badge badge-success"
        });
        $('.destroy-news').click(function(e) {
            e.preventDefault;
            Swal.fire({
                text: "Apakah Anda Yakin, Berita/Pengumuman ini tidak bisa di kembalikan",
                icon: "question",
                buttonsStyling: false,
                showCancelButton: true,
                confirmButtonText: "<i class='fas fa-trash-alt'></i> Ya, Hapus",
                cancelButtonText: '<i class="fas fa-ban"></i> Batalkan',
                customClass: {
                    confirmButton: "btn btn-primary",
                    cancelButton: 'btn btn-danger'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    sendXhr('DELETE', `{{ route('news.destroy', $news->slug) }}`);
                } else if (result.isDismissed) {

                }
            });
        })
    </script>
@endpush
