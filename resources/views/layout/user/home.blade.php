@extends('app')
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
                    class="d-inline-block position-absolute h-8px bottom-0 end-0 start-0 bg-success translate rounded"></span>
            </span>
        </div>
        <div class="col-12 col-md-6">
            <div id="vmap" style="width: 100%; height: 300px ;"></div>
        </div>
    </div>
    <div class="separator"></div>
@endsection
@push('js')
    <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/jquery.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/jquery.vmap.js') }}"></script>
    <script src="{{ asset('assets/maps/jquery.vmap.indonesia.js') }}"></script>
    <script>
        var typed = new Typed("#app_title", {
            strings: ["", "TPID", "Tim Pengendalian Inflasi Daerah"],
            typeSpeed: 50,
            startDelay: 500,
        });
        let state_color = [];
        var zParams = {
            scale: 5,
            lat: -4.286175,
            lng: 113.8523998,
            x: 0.5,
            y: 0.5,
            animate: true
        };
        state_color['path34'] = '#000'
        $('#vmap').vectorMap({
            map: 'indonesia_id',
            backgroundColor: '#fff0',
            color: '#9e9ca2',
            scaleColors: ['#b6d6ff', '#005ace'],
            selectedColor: null,
            hoverColor: null,
            enableZoom: true,
            showTooltip: false,
            colors: ['path34', '#FFF'],
            normalizeFunction: 'linear',
            colors: state_color
        });
        $('.typed-cursor').addClass('d-inline-block fs-7 fs-sm-5 fs-md-2x fs-lg-2tx')
    </script>
@endpush
