<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
    data-kt-sticky-offset="{default: '200px', lg: '300px'}">

    <div class="container-fluid d-flex align-items-center justify-content-center justify-content-sm-between"
        id="kt_header_container">
        <div class="aside-logo d-none d-sm-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
            <a href="{{ route('home') }}">
                <img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-50px" />
            </a>
        </div>
        <div class="menu">
            <div class="menu-item">
                <a href="{{ route('home') }}" class="menu-link text-success position-relative">
                    <span class="menu-title">Home</span>
                    <span
                        class="d-inline-block position-absolute h-2px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('home') }}" class="menu-link text-black position-relative">
                    <span class="menu-title">Susunan Jabatan</span>
                    <span
                        class="d-none position-absolute h-2px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                </a>
            </div>
            <div class="menu-item">
                <a href="{{ route('home') }}" class="menu-link text-black position-relative">
                    <span class="menu-title">Berita</span>
                    <span
                        class="d-none position-absolute h-2px bottom-0 end-0 start-0 bg-success translate rounded"></span>
                </a>
            </div>
        </div>
    </div>
</div>
