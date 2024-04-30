@extends('app')
@push('css')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-jvectormap-2.0.5.css') }}" />
@endpush
@section('content')
    <div class="container-fluid row justify-content-beetwen">
        <div class="col-12 col-md-6 text-center text-sm-start">
            <span class="d-inline-block d-sm-inline mb-2 fs-7 fs-sm-5 fs-md-2x fs-lg-2tx fw-bold" id="app_title">
            </span>
            <div class="separator border-0"></div>
            <span class="d-inline-block position-relative">
                <span class="d-inline-block mb-2 fs-7 fs-sm-5 fs-md-2x fs-lg-2tx fw-bold">
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
    <div class="separator"></div>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-jvectormap-2.0.5.min.js') }}"></script>
    <script src="{{ asset('assets/maps/jquery.vmap.indonesia.js') }}"></script>
    <script>
        var typed = new Typed("#app_title", {
            strings: ["", "TPID", "Tim Pengendalian Inflasi Daerah"],
            typeSpeed: 100,
            startDelay: 500,
            backSpeed: 60,
            backDelay: 700,
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
        $('.typed-cursor').addClass('d-inline-block fs-7 fs-sm-5 fs-md-2x fs-lg-2tx')
    </script>
@endpush
