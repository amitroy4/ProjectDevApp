@extends('layouts.index')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Multipurpose</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Home</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Dashboards</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <!--begin::Secondary button-->
            <a href="#" class="btn btn-sm fw-bold btn-secondary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_create_app">Rollover</a>
            <!--end::Secondary button-->
            <!--begin::Primary button-->
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                data-bs-target="#kt_modal_new_target">Add Target</a>
            <!--end::Primary button-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar container-->
</div>
<!--end::Toolbar-->
<div class="card m1-12">
    <div class="card-body">
        <!--begin::Row-->
        <div class="row gx-5 gx-xl-10 mb-xl-10">
            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                <!--begin::Card widget 16-->
                <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-center border-0 h-md-50 mb-5 mb-xl-10"
                    style="background-color: #080655">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-white opacity-50 pt-1 fw-semibold fs-6">Active
                                Projects</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex align-items-end pt-0">
                        <!--begin::Progress-->
                        <div class="d-flex align-items-center flex-column mt-3 w-100">
                            <div
                                class="d-flex justify-content-between fw-bold fs-6 text-white opacity-50 w-100 mt-auto mb-2">
                                <span>43 Pending</span>
                                <span>72%</span>
                            </div>
                            <div class="h-8px mx-3 w-100 bg-light-danger rounded">
                                <div class="bg-danger rounded h-8px" role="progressbar" style="width: 72%;"
                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <!--end::Progress-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 16-->
                <!--begin::Card widget 7-->
                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Amount-->
                            <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">357</span>
                            <!--end::Amount-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Professionals</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body d-flex flex-column justify-content-end pe-0">
                        <!--begin::Title-->
                        <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s
                            Heroes</span>
                        <!--end::Title-->
                        <!--begin::Users group-->
                        <div class="symbol-group symbol-hover flex-nowrap">
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
                                <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Michael Eberon">
                                <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Susan Redwood">
                                <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
                                <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                title="Perry Matthew">
                                <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                            </div>
                            <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
                                <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                            </div>
                            <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_view_users">
                                <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                            </a>
                        </div>
                        <!--end::Users group-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 7-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-10">
                <!--begin::Card widget 17-->
                <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <div class="card-title d-flex flex-column">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center">
                                <!--begin::Currency-->
                                <span class="fs-4 fw-semibold text-gray-500 me-1 align-self-start">$</span>
                                <!--end::Currency-->
                                <!--begin::Amount-->
                                <span class="fs-2hx fw-bold text-gray-900 me-2 lh-1 ls-n2">69,700</span>
                                <!--end::Amount-->
                                <!--begin::Badge-->
                                <span class="badge badge-light-success fs-base">
                                    <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>2.2%</span>
                                <!--end::Badge-->
                            </div>
                            <!--end::Info-->
                            <!--begin::Subtitle-->
                            <span class="text-gray-500 pt-1 fw-semibold fs-6">Projects
                                Earnings in April</span>
                            <!--end::Subtitle-->
                        </div>
                        <!--end::Title-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Card body-->
                    <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                        <!--begin::Chart-->
                        <div class="d-flex flex-center me-5 pt-2">
                            <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                data-kt-size="70" data-kt-line="11"></div>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="d-flex flex-column content-justify-center flex-row-fluid">
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 bg-success me-3">
                                </div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Leaf
                                    CRM</div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">
                                    $7,660</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center my-3">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 bg-primary me-3">
                                </div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Mivy
                                    App</div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">
                                    $2,820</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fw-semibold align-items-center">
                                <!--begin::Bullet-->
                                <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF"></div>
                                <!--end::Bullet-->
                                <!--begin::Label-->
                                <div class="text-gray-500 flex-grow-1 me-4">Others
                                </div>
                                <!--end::Label-->
                                <!--begin::Stats-->
                                <div class="fw-bolder text-gray-700 text-xxl-end">
                                    $45,257</div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Label-->
                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card widget 17-->
                <!--begin::List widget 25-->
                <div class="card card-flush h-lg-50">
                    <!--begin::Header-->
                    <div class="card-header pt-5">
                        <!--begin::Title-->
                        <h3 class="card-title text-gray-800">Highlights</h3>
                        <!--end::Title-->
                        <!--begin::Toolbar-->
                        <div class="card-toolbar d-none">
                            <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                            <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                class="btn btn-sm btn-light d-flex align-items-center px-4">
                                <!--begin::Display range-->
                                <div class="text-gray-600 fw-bold">Loading date
                                    range...</div>
                                <!--end::Display range-->
                                <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                            </div>
                            <!--end::Daterangepicker-->
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg.
                                Client Rating</div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-senter">
                                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Number-->
                                <span class="text-gray-900 fw-bolder fs-6">7.8</span>
                                <!--end::Number-->
                                <span class="text-gray-500 fw-bold fs-6">/10</span>
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg.
                                Quotes</div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-senter">
                                <i class="ki-duotone ki-arrow-down-right fs-2 text-danger me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Number-->
                                <span class="text-gray-900 fw-bolder fs-6">730</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                        <!--begin::Separator-->
                        <div class="separator separator-dashed my-3"></div>
                        <!--end::Separator-->
                        <!--begin::Item-->
                        <div class="d-flex flex-stack">
                            <!--begin::Section-->
                            <div class="text-gray-700 fw-semibold fs-6 me-2">Avg.
                                Agent Earnings</div>
                            <!--end::Section-->
                            <!--begin::Statistics-->
                            <div class="d-flex align-items-senter">
                                <i class="ki-duotone ki-arrow-up-right fs-2 text-success me-2">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i>
                                <!--begin::Number-->
                                <span class="text-gray-900 fw-bolder fs-6">$2,309</span>
                                <!--end::Number-->
                            </div>
                            <!--end::Statistics-->
                        </div>
                        <!--end::Item-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::LIst widget 25-->
            </div>
            <!--end::Col-->
            <!--begin::Col-->
            <div class="col-lg-12 col-xl-12 col-xxl-6 mb-10 mb-xl-0">
                <!--begin::Row-->
                <div class="row g-6 g-xl-9">

                    <!--begin::Timeline-->
                    <div class="card">
                        <!--begin::Card head-->
                        <div class="card-header card-header-stretch">
                            <!--begin::Title-->
                            <div class="card-title d-flex align-items-center">
                                <i class="ki-duotone ki-calendar-8 fs-1 text-primary me-3 lh-0">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                    <span class="path3"></span>
                                    <span class="path4"></span>
                                    <span class="path5"></span>
                                    <span class="path6"></span>
                                </i>
                                <h3 class="fw-bold m-0 text-gray-800">Jan 23, 2024</h3>
                            </div>
                            <!--end::Title-->
                            <!--begin::Toolbar-->
                            <div class="card-toolbar m-0">
                                <!--begin::Tab nav-->
                                <ul class="nav nav-tabs nav-line-tabs nav-stretch fs-6 border-0 fw-bold" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_today_tab"
                                            class="nav-link justify-content-center text-active-gray-800 active"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_today">Today</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_week_tab"
                                            class="nav-link justify-content-center text-active-gray-800"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_week">Week</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_month_tab"
                                            class="nav-link justify-content-center text-active-gray-800"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_month">Month</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a id="kt_activity_year_tab"
                                            class="nav-link justify-content-center text-active-gray-800 text-hover-gray-800"
                                            data-bs-toggle="tab" role="tab" href="#kt_activity_year">2024</a>
                                    </li>
                                </ul>
                                <!--end::Tab nav-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Card head-->
                        <!--begin::Card body-->
                        <div class="card-body">
                            <!--begin::Tab Content-->
                            <div class="tab-content">
                                <!--begin::Tab panel-->
                                <div id="kt_activity_today" class="card-body p-0 tab-pane fade show active"
                                    role="tabpanel" aria-labelledby="kt_activity_today_tab">
                                    <!--begin::Timeline-->
                                    <div class="timeline timeline-border-dashed">
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">There
                                                        are 2 new tasks for you in “AirPlus
                                                        Mobile App” project:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Added at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <!--begin::Record-->
                                                    <div
                                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                        <!--begin::Title-->
                                                        <a href="apps/projects/project.html"
                                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                                            with customer</a>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="min-w-175px pe-2">
                                                            <span class="badge badge-light text-muted">Application
                                                                Design</span>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Users-->
                                                        <div
                                                            class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <div
                                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                                    A</div>
                                                            </div>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Users-->
                                                        <!--begin::Progress-->
                                                        <div class="min-w-125px pe-2">
                                                            <span class="badge badge-light-primary">In
                                                                Progress</span>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Action-->
                                                        <a href="apps/projects/project.html"
                                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Record-->
                                                    <!--begin::Record-->
                                                    <div
                                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                        <!--begin::Title-->
                                                        <a href="apps/projects/project.html"
                                                            class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project
                                                            Delivery Preparation</a>
                                                        <!--end::Title-->
                                                        <!--begin::Label-->
                                                        <div class="min-w-175px">
                                                            <span class="badge badge-light text-muted">CRM
                                                                System Development</span>
                                                        </div>
                                                        <!--end::Label-->
                                                        <!--begin::Users-->
                                                        <div
                                                            class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <img src="assets/media/avatars/300-20.jpg" alt="img" />
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::User-->
                                                            <div class="symbol symbol-circle symbol-25px">
                                                                <div
                                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                                    B</div>
                                                            </div>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Users-->
                                                        <!--begin::Progress-->
                                                        <div class="min-w-125px">
                                                            <span class="badge badge-light-success">Completed</span>
                                                        </div>
                                                        <!--end::Progress-->
                                                        <!--begin::Action-->
                                                        <a href="apps/projects/project.html"
                                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Record-->
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon me-4">
                                                <i class="ki-duotone ki-flag fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n2">
                                                <!--begin::Timeline heading-->
                                                <div class="overflow-auto pe-3">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">
                                                        Invitation for crafting engaging
                                                        designs that speak human workshop
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Sent at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Alan Nilson">
                                                            <img src="assets/media/avatars/300-1.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-disconnect fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="mb-5 pe-3">
                                                    <!--begin::Title-->
                                                    <a href="#"
                                                        class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3
                                                        New Incoming Project Files:</a>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Sent at 10:30 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Jan Hummer">
                                                            <img src="assets/media/avatars/300-23.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div
                                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="" class="w-30px me-3"
                                                                src="assets/media/svg/files/pdf.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="apps/projects/project.html"
                                                                    class="fs-6 text-hover-primary fw-bold">Finance
                                                                    KPI App
                                                                    Guidelines</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-500">
                                                                    1.9mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--begin::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                            <!--begin::Icon-->
                                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                                src="assets/media/svg/files/doc.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#"
                                                                    class="fs-6 text-hover-primary fw-bold">Client
                                                                    UAT Testing
                                                                    Results</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-500">
                                                                    18kb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex flex-aligns-center">
                                                            <!--begin::Icon-->
                                                            <img alt="apps/projects/project.html" class="w-30px me-3"
                                                                src="assets/media/svg/files/css.svg" />
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <div class="ms-1 fw-semibold">
                                                                <!--begin::Desc-->
                                                                <a href="#"
                                                                    class="fs-6 text-hover-primary fw-bold">Finance
                                                                    Reports</a>
                                                                <!--end::Desc-->
                                                                <!--begin::Number-->
                                                                <div class="text-gray-500">
                                                                    20mb</div>
                                                                <!--end::Number-->
                                                            </div>
                                                            <!--end::Icon-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">Task
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>merged
                                                        with
                                                        <a href="#" class="text-primary fw-bold me-1">#45890</a>in
                                                        “Ads Pro Admin Dashboard project:
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Initiated at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Nina Nilson">
                                                            <img src="assets/media/avatars/300-14.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">3 new
                                                        application design concepts added:
                                                    </div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Created at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Marcus Dotson">
                                                            <img src="assets/media/avatars/300-2.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <div
                                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px"
                                                                    src="assets/media/stock/600x400/img-29.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay me-10">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px"
                                                                    src="assets/media/stock/600x400/img-31.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="overlay">
                                                            <!--begin::Image-->
                                                            <div class="overlay-wrapper">
                                                                <img alt="img" class="rounded w-150px"
                                                                    src="assets/media/stock/600x400/img-40.jpg" />
                                                            </div>
                                                            <!--end::Image-->
                                                            <!--begin::Link-->
                                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                            </div>
                                                            <!--end::Link-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-sms fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New
                                                        case
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                                                        assigned to you in Multi-platform
                                                        Database Design project</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="overflow-auto pb-5">
                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center mt-1 fs-6">
                                                            <!--begin::Info-->
                                                            <div class="text-muted me-2 fs-7">
                                                                Added at 4:23 PM by</div>
                                                            <!--end::Info-->
                                                            <!--begin::User-->
                                                            <a href="#" class="text-primary fw-bold me-1">Alice
                                                                Tan</a>
                                                            <!--end::User-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-pencil fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mb-10 mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">You
                                                        have received a new order:</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Placed at 5:05 AM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <div class="symbol symbol-circle symbol-25px"
                                                            data-bs-toggle="tooltip" data-bs-boundary="window"
                                                            data-bs-placement="top" title="Robert Rich">
                                                            <img src="assets/media/avatars/300-4.jpg" alt="img" />
                                                        </div>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                                <!--begin::Timeline details-->
                                                <div class="overflow-auto pb-5">
                                                    <!--begin::Notice-->
                                                    <div
                                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                        <!--begin::Icon-->
                                                        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                        </i>
                                                        <!--end::Icon-->
                                                        <!--begin::Wrapper-->
                                                        <div
                                                            class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                            <!--begin::Content-->
                                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                                <h4 class="text-gray-900 fw-bold">
                                                                    Database Backup
                                                                    Process Completed!
                                                                </h4>
                                                                <div class="fs-6 text-gray-700 pe-7">
                                                                    Login into Admin
                                                                    Dashboard to make
                                                                    sure the data
                                                                    integrity is OK
                                                                </div>
                                                            </div>
                                                            <!--end::Content-->
                                                            <!--begin::Action-->
                                                            <a href="#"
                                                                class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
                                                            <!--end::Action-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Notice-->
                                                </div>
                                                <!--end::Timeline details-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                        <!--begin::Timeline item-->
                                        <div class="timeline-item">
                                            <!--begin::Timeline line-->
                                            <div class="timeline-line"></div>
                                            <!--end::Timeline line-->
                                            <!--begin::Timeline icon-->
                                            <div class="timeline-icon">
                                                <i class="ki-duotone ki-basket fs-2 text-gray-500">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </div>
                                            <!--end::Timeline icon-->
                                            <!--begin::Timeline content-->
                                            <div class="timeline-content mt-n1">
                                                <!--begin::Timeline heading-->
                                                <div class="pe-3 mb-5">
                                                    <!--begin::Title-->
                                                    <div class="fs-5 fw-semibold mb-2">New
                                                        order
                                                        <a href="#" class="text-primary fw-bold me-1">#67890</a>is
                                                        placed for Workshow Planning &
                                                        Budget Estimation</div>
                                                    <!--end::Title-->
                                                    <!--begin::Description-->
                                                    <div class="d-flex align-items-center mt-1 fs-6">
                                                        <!--begin::Info-->
                                                        <div class="text-muted me-2 fs-7">
                                                            Placed at 4:23 PM by</div>
                                                        <!--end::Info-->
                                                        <!--begin::User-->
                                                        <a href="#" class="text-primary fw-bold me-1">Jimmy
                                                            Bold</a>
                                                        <!--end::User-->
                                                    </div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Timeline heading-->
                                            </div>
                                            <!--end::Timeline content-->
                                        </div>
                                        <!--end::Timeline item-->
                                    </div>
                                    <!--end::Timeline-->
                                </div>
                                <!--end::Tab panel-->
                                


                            </div>
                            <!--end::Tab Content-->
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Timeline-->


                </div>
                <!--end::Row-->

            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
</div>


@endsection

@push('script')
@endpush
