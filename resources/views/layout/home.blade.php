@extends('app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-jvectormap-2.0.5.css') }}" />
    <link href="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="container-fluid row justify-content-beetwen">
        <div class="col-12 col-md-6 text-center text-sm-start">
            <span class="d-inline-block d-sm-inline mb-2 fs-7 fs-sm-5 fs-md-2 fs-lg-2tx fw-bold" id="app_title">
            </span>
            <div class="separator border-0"></div>
            <span class="d-inline-block position-relative">
                <span class="d-inline-block mb-2 fs-7 fs-sm-5 fs-md-2 fs-lg-2tx fw-bold">
                    {{ env('APP_WILAYAH') }}
                </span>
                <span
                    class="d-inline-block position-absolute h-2px h-md-10px bottom-0 end-0 start-0 bg-success translate rounded"></span>
            </span>
        </div>
        <div class="col-12 col-md-6 mt-5">
            <div id="vmap" style="width: 100%; height: 300px ;"></div>
        </div>
    </div>
    <div class="container">
        <div class="d-flex my-3 align-items-center">
            <div class="col-12 col-md-8">
                <h2>Monitor Harga Bahan Baku</h2>
            </div>
            <div class="col-12 col-md-4">
                <div class="row g-3 align-items-end">
                    <div class="col-6">
                        <div class="row g-2">
                            <div class="col-12 mx-1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="regency_filter" />
                                    <label class="form-check-label" for="regency_filter">
                                        Kabupaten
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <select class="form-select" data-control="select2" data-placeholder="Pilih Bahan Baku">
                                    <option></option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <button
                            class="btn btn-icon btn-outline btn-outline-dashed btn-outline-success btn-active-light-success hover-scale"><i
                                class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator border-3 my-3"></div>
        <div class="card card-flush">
            <div id="visualization"></div>
        </div>
    </div>
    <div class="container my-5">
        <h2>Berita Terkini</h2>
        <div class="separator border-3 my-3"></div>
        <div class="card bg-transparent row flex-row justify-content-between py-5 rounded-0">
            <div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-1">
                <div class="card card-stretch-50 card-flush">
                    <img src="{{ asset('assets/plugins/custom/jstree/throbber.gif') }}"
                        data-src="assets/media/misc/city.png" class="card-img-top lozad" alt="...">
                    <div class="card-body">
                        Lorem Ipsum is simply dummy text
                    </div>
                    <div class="card-footer">
                        Footer
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-1">
                <div class="card card-stretch-50 card-flush">
                    <img src="{{ asset('assets/plugins/custom/jstree/throbber.gif') }}"
                        data-src="assets/media/misc/city.png" class="card-img-top lozad" alt="...">
                    <div class="card-body">
                        Lorem Ipsum is simply dummy text
                    </div>
                    <div class="card-footer">
                        Footer
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-md-4 mt-2 mt-sm-1">
                <div class="card card-stretch-50 card-flush">
                    <img src="{{ asset('assets/plugins/custom/jstree/throbber.gif') }}"
                        data-src="assets/media/misc/city.png" class="card-img-top lozad" alt="...">
                    <div class="card-body">
                        Lorem Ipsum is simply dummy text
                    </div>
                    <div class="card-footer">
                        Footer
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <div class="col">
                <a href="{{ route('news') }}"
                    class="btn btn-outline btn-outline-dashed btn-outline-success btn-active-light-success hover-scale">Tampilkan
                    Lebih Banyak</a>
            </div>
        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/maps/jquery.vmap.indonesia.js') }}"></script>
    <script src="{{ asset('assets/plugins/custom/vis-timeline/vis-timeline.bundle.js') }}"></script>
    <script>
        var container = document.getElementById('visualization');
        var items = new vis.DataSet([{
                id: 1,
                content: 'item 1',
                start: '2024-05-01'
            },
            {
                id: 2,
                content: 'item 2',
                start: '2024-05-04'
            },
            {
                id: 3,
                content: 'item 3',
                start: '2024-05-08'
            },
            {
                id: 4,
                content: 'item 4',
                start: '2024-05-06',
            },
            {
                id: 5,
                content: 'item 5',
                start: '2024-05-05'
            },
            {
                id: 6,
                content: 'item 6',
                start: '2024-05-07',
            }
        ]);

        var options = {
            width: '100%',
            height: '300px',
            margin: {
                item: 1
            }
        };

        var timeline = new vis.Timeline(container, items, options);
        var typed = new Typed("#app_title", {
            strings: ["", "TPID", "Tim Pengendalian Inflasi Daerah"],
            typeSpeed: 100,
            startDelay: 0,
            backSpeed: 60,
            backDelay: 3000,
            loop: true
        });
        $('#vmap').vectorMap({
            map: 'indonesia_id',
            focusOn: 'path34',
            panOnDrag: false,
            backgroundColor: 'transparent',
            color: '#FFF',
            selectedRegions: ['path34'],
            zoomOnScroll: false,
            regionStyle: {
                initial: {
                    fill: 'transparent',
                    "fill-opacity": 1,
                },
                hover: {
                    "fill-opacity": 1,
                    cursor: 'default',
                },
                selected: {
                    fill: 'white',
                    stroke: 'green',
                    "stroke-width": .4,
                    "stroke-opacity": 1
                },
                selectedHover: {}
            },
            regionLabelStyle: {
                initial: {
                    'font-family': 'Verdana',
                    'font-size': '12',
                    'font-weight': 'bold',
                    cursor: 'default',
                    fill: 'black'
                },
                hover: {
                    cursor: 'pointer'
                }
            },
            onRegionTipShow: function(e, tip, code) {
                if (code != 'path34') {
                    $(tip).remove()
                } else {
                    $(tip).show();
                }
            }
        });
        $('.jvectormap-zoomin').remove();
        $('.jvectormap-zoomout').remove();
        $('.typed-cursor').addClass('d-inline-block fs-7 fs-sm-5 fs-md-2 fs-lg-2tx')
    </script>
@endpush
