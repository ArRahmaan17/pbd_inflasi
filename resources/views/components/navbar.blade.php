<div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">

    <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
        <a href="{{ route('home') }}">
            <img alt="Logo" src="assets/media/logos/logo-default.svg" class="h-50px" />
        </a>
    </div>

    <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
        <div class="hover-scroll-overlay-y mb-10 scroll-ms" data-kt-scroll="true"
            data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="{default: '100px', lg: '300px'}"
            data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer"
            data-kt-scroll-offset="0px">

            <ul class="nav flex-column" role="tablist">
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                    data-bs-dismiss="click" title="Menu">
                    <a class="nav-link btn btn-custom btn-icon active" data-bs-toggle="tab"
                        href="#kt_aside_nav_tab_menu">
                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="2" y="2" width="9" height="9" rx="2" fill="white" />
                                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                    fill="white" />
                                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                    fill="white" />
                                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                    fill="white" />
                            </svg>
                        </span>
                    </a>
                </li>

                {{-- <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                    data-bs-dismiss="click" title="Subscription">

                    <a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab"
                        href="#kt_aside_nav_tab_subscription">

                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <rect x="8" y="9" width="3" height="10" rx="1.5" fill="white" />
                                <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                    fill="white" />
                                <rect x="18" y="11" width="3" height="8" rx="1.5" fill="white" />
                                <rect x="3" y="13" width="3" height="6" rx="1.5" fill="white" />
                            </svg>
                        </span>

                    </a>

                </li> --}}

                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                    data-bs-dismiss="click" title="Tasks">

                    <a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab" href="#kt_aside_nav_tab_tasks">

                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z"
                                    fill="white" />
                                <path
                                    d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z"
                                    fill="white" />
                            </svg>
                        </span>

                    </a>

                </li>
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                    data-bs-dismiss="click" title="Notifications">

                    <a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab"
                        href="#kt_aside_nav_tab_notifications">

                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                    fill="white" />
                                <path
                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                    fill="white" />
                            </svg>
                        </span>

                    </a>

                </li>
                <li class="nav-item mb-2" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="right"
                    data-bs-dismiss="click" title="Authors">

                    <a class="nav-link btn btn-custom btn-icon" data-bs-toggle="tab" href="#kt_aside_nav_tab_authors">

                        <span class="svg-icon svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path opacity="0.3"
                                    d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                    fill="white" />
                                <path
                                    d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                    fill="white" />
                            </svg>
                        </span>

                    </a>

                </li>
            </ul>
        </div>
    </div>

    <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
        <div class="d-flex align-items-center mb-2">
            <div class="btn btn-icon btn-custom" id="kt_drawer_chat_toggle" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-dismiss="click" title="Menu">
                <span class="svg-icon svg-icon-2 svg-icon-lg-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <path opacity="0.3"
                            d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                            fill="white" />
                        <rect x="6" y="12" width="7" height="2" rx="1" fill="white" />
                        <rect x="6" y="7" width="12" height="2" rx="1" fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="d-flex align-items-center mb-2">
            <div class="btn btn-icon btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-dismiss="click" title="Notifications">
                <span class="svg-icon svg-icon-2 svg-icon-lg-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect x="2" y="2" width="9" height="9" rx="2" fill="white" />
                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                            fill="white" />
                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                            fill="white" />
                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                            fill="white" />
                    </svg>
                </span>
            </div>

            <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
                <div class="d-flex flex-column bgi-no-repeat rounded-top"
                    style="background-image:url('assets/media/misc/dropdown-header-bg.png')">

                    <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                        <span class="fs-8 opacity-75 ps-3">24 reports</span>
                    </h3>

                    <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                                href="#kt_topbar_notifications_1">Alerts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab"
                                href="#kt_topbar_notifications_3">Logs</a>
                        </li>
                    </ul>

                </div>
                <div class="tab-content">
                    <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                        <div class="scroll-y mh-325px my-5 px-8">
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#"
                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                            Alice</a>
                                        <div class="text-gray-400 fs-7">Phase 1 development</div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">1 hr</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-danger">
                                            <span class="svg-icon svg-icon-2 svg-icon-danger">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <rect opacity="0.3" x="2" y="2" width="20" height="20"
                                                        rx="10" fill="white" />
                                                    <rect x="11" y="14" width="7" height="2" rx="1"
                                                        transform="rotate(-90 11 14)" fill="white" />
                                                    <rect x="11" y="17" width="2" height="2" rx="1"
                                                        transform="rotate(-90 11 17)" fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR
                                            Confidential</a>
                                        <div class="text-gray-400 fs-7">Confidential staff documents
                                        </div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">2 hrs</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-warning">
                                            <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                        fill="white" />
                                                    <path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#"
                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company
                                            HR</a>
                                        <div class="text-gray-400 fs-7">Corporeate staff profiles</div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">5 hrs</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-success">
                                            <span class="svg-icon svg-icon-2 svg-icon-success">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                        fill="white" />
                                                    <path
                                                        d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                        fill="white" />
                                                    <path opacity="0.3"
                                                        d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                        fill="white" />
                                                    <path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#"
                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                            Redux</a>
                                        <div class="text-gray-400 fs-7">New frontend admin theme</div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">2 days</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-primary">
                                            <span class="svg-icon svg-icon-2 svg-icon-primary">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z"
                                                        fill="white" />
                                                    <path
                                                        d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#"
                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                            Breafing</a>
                                        <div class="text-gray-400 fs-7">Product launch status update
                                        </div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">21 Jan</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-info">
                                            <span class="svg-icon svg-icon-2 svg-icon-info">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                        fill="white" />
                                                    <path
                                                        d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#"
                                            class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner
                                            Assets</a>
                                        <div class="text-gray-400 fs-7">Collection of banner images
                                        </div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">21 Jan</span>
                            </div>
                            <div class="d-flex flex-stack py-4">
                                <div class="d-flex align-items-center">
                                    <div class="symbol symbol-35px me-4">
                                        <span class="symbol-label bg-light-warning">
                                            <span class="svg-icon svg-icon-2 svg-icon-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25"
                                                    viewBox="0 0 24 25" fill="none">
                                                    <path opacity="0.3"
                                                        d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                                        fill="white" />
                                                    <path
                                                        d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                                        fill="white" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                    <div class="mb-0 me-2">
                                        <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon
                                            Assets</a>
                                        <div class="text-gray-400 fs-7">Collection of SVG icons</div>
                                    </div>
                                </div>
                                <span class="badge badge-light fs-8">20 March</span>
                            </div>
                        </div>
                        <div class="py-3 text-center border-top">
                            <a href="../dist/pages/profile/activity.html"
                                class="btn btn-color-gray-600 btn-active-color-primary">View All
                                <span class="svg-icon svg-icon-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="white">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                            rx="1" transform="rotate(-180 18 13)" fill="white" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">

                        <div class="d-flex flex-column px-9">

                            <div class="pt-10 pb-0">

                                <h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>

                                <div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you
                                    honest. They stoping you from amazing poorly about drive</div>

                                <div class="text-center mt-5 mb-9">
                                    <a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal"
                                        data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                </div>

                            </div>

                            <div class="text-center px-4">
                                <img class="mw-100 mh-200px" alt="metronic"
                                    src="assets/media/illustrations/sigma-1/6.png" />
                            </div>

                        </div>

                    </div>
                    <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                        <div class="scroll-y mh-325px my-5 px-8">

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>

                                </div>

                                <span class="badge badge-light fs-8">Just now</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">New
                                        customer</a>

                                </div>

                                <span class="badge badge-light fs-8">2 hrs</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment
                                        process</a>

                                </div>

                                <span class="badge badge-light fs-8">5 hrs</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Search
                                        query</a>

                                </div>

                                <span class="badge badge-light fs-8">2 days</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">API
                                        connection</a>

                                </div>

                                <span class="badge badge-light fs-8">1 week</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-success me-4">200 OK</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Database
                                        restore</a>

                                </div>

                                <span class="badge badge-light fs-8">Mar 5</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">System
                                        update</a>

                                </div>

                                <span class="badge badge-light fs-8">May 15</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS
                                        update</a>

                                </div>

                                <span class="badge badge-light fs-8">Apr 3</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-warning me-4">300 WRN</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">API
                                        rollback</a>

                                </div>

                                <span class="badge badge-light fs-8">Jun 30</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund
                                        process</a>

                                </div>

                                <span class="badge badge-light fs-8">Jul 10</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal
                                        process</a>

                                </div>

                                <span class="badge badge-light fs-8">Sep 10</span>

                            </div>

                            <div class="d-flex flex-stack py-4">

                                <div class="d-flex align-items-center me-2">

                                    <span class="w-70px badge badge-light-danger me-4">500 ERR</span>

                                    <a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>

                                </div>

                                <span class="badge badge-light fs-8">Dec 10</span>

                            </div>

                        </div>
                        <div class="py-3 text-center border-top">
                            <a href="../dist/pages/profile/activity.html"
                                class="btn btn-color-gray-600 btn-active-color-primary">View All

                                <span class="svg-icon svg-icon-5">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="18" y="13" width="13" height="2"
                                            rx="1" transform="rotate(-180 18 13)" fill="black" />
                                        <path
                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                            fill="black" />
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex align-items-center mb-3">
            <div class="btn btn-icon btn-custom" data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-dismiss="click" title="Activity Logs" id="kt_activities_toggle">
                <span class="svg-icon svg-icon-2 svg-icon-lg-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect x="8" y="9" width="3" height="10" rx="1.5" fill="white" />
                        <rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                            fill="white" />
                        <rect x="18" y="11" width="3" height="8" rx="1.5" fill="white" />
                        <rect x="3" y="13" width="3" height="6" rx="1.5" fill="white" />
                    </svg>
                </span>
            </div>
        </div>
        <div class="d-flex align-items-center mb-10" id="kt_header_user_menu_toggle">

            <div class="cursor-pointer symbol symbol-40px" data-kt-menu-trigger="click" data-kt-menu-overflow="true"
                data-kt-menu-placement="top-start" data-bs-toggle="tooltip" data-bs-placement="right"
                data-bs-dismiss="click" title="User profile">
                <img src="assets/media/avatars/150-26.jpg" alt="image" />
            </div>

            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px"
                data-kt-menu="true">

                <div class="menu-item px-3">
                    <div class="menu-content d-flex align-items-center px-3">

                        <div class="symbol symbol-50px me-5">
                            <img alt="Logo" src="assets/media/avatars/150-26.jpg" />
                        </div>

                        <div class="d-flex flex-column">
                            <div class="fw-bolder d-flex align-items-center fs-5">Max Smith
                                <span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span>
                            </div>
                            <a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
                        </div>

                    </div>
                </div>

                <div class="separator my-2"></div>

                <div class="menu-item px-5">
                    <a href="../dist/account/overview.html" class="menu-link px-5">My Profile</a>
                </div>

                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-text">My Audit Logs</span>
                        <span class="menu-badge">
                            <span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
                        </span>
                    </a>
                </div>

                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title">My Subscription</span>
                        <span class="menu-arrow"></span>
                    </a>

                    <div class="menu-sub menu-sub-dropdown w-175px py-4">
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Referrals</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Billing</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link px-5">Payments</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex flex-stack px-5">Statements
                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                    title="View your statements"></i></a>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-3">
                            <div class="menu-content px-3">
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                        checked="checked" name="notifications" />
                                    <span class="form-check-label text-muted fs-7">Notifications</span>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">My Activities</a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-end">
                    <a href="#" class="menu-link px-5">
                        <span class="menu-title position-relative">Language
                            <span
                                class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
                                <img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg"
                                    alt="" /></span></span>
                    </a>
                    <div class="menu-sub menu-sub-dropdown w-175px py-4">

                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5 active">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="assets/media/flags/united-states.svg"
                                        alt="" />
                                </span>English</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
                                </span>Spanish</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
                                </span>German</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
                                </span>Japanese</a>
                        </div>
                        <div class="menu-item px-3">
                            <a href="#" class="menu-link d-flex px-5">
                                <span class="symbol symbol-20px me-4">
                                    <img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
                                </span>French</a>
                        </div>
                    </div>
                </div>
                <div class="menu-item px-5 my-1">
                    <a href="#" class="menu-link px-5">Account Settings</a>
                </div>
                <div class="menu-item px-5">
                    <a href="#" class="menu-link px-5">Sign Out</a>
                </div>
                <div class="separator my-2"></div>
                <div class="menu-item px-5">
                    <div class="menu-content px-5">
                        <label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success"
                            for="kt_user_menu_dark_mode_toggle">
                            <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../dist/index.html" />
                            <span class="pulse-ring ms-n1"></span>
                            <span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
