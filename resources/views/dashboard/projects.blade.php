@extends('dashboard.index')
@section('content')
<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-gray-900 fw-bold fs-3 flex-column justify-content-center my-0">
                Projects</h1>
            <!--end::Title-->
            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="index.html" class="text-muted text-hover-primary">Dashboard</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-500 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Projects</li>
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
<!--begin::Content-->
<div>

    <div class="card shadow m-8">
        <div class="card-body">
            <h5 class="card-title"><div class="d-flex justify-content-end mr-5">
        <button type="button" class="btn btn-secondary">Add Project</button>
    </div></h5>
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Developer Name</th>
                            <th>Version</th>
                            <th>Status</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Project Alpha</td>
                            <td>Jane Doe</td>
                            <td>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option value="1" selected>1.2.5</option>
                                    <option value="2">2.3.4</option>
                                    <option value="3">3.4.5</option>
                                </select>
                            </td>
                            <td><span class="badge badge-success">Active</span></td>
                            <td><a href="#"><i class="fa-solid fa-eye text-primary p-2"></i></a><a href="#"><i class="fa-solid fa-pen-to-square text-danger p-2"></i></a><a href="#"><i class="fa-solid fa-desktop text-warning p-2"></i></a><a href="#"><i class="fa-solid fa-laptop-code text-info p-2"></i></a></td>
                        </tr>
                        <tr>
                            <td>Project Beta</td>
                            <td>John Smith</td>
                            <td>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option value="1" selected>1.2.5</option>
                                    <option value="2">2.3.4</option>
                                    <option value="3">3.4.5</option>
                                </select>
                            </td>
                            <td><span class="badge badge-warning">In Progress</span></td>
                            <td><a href="#"><i class="fa-solid fa-eye text-primary p-2"></i></a><a href="#"><i class="fa-solid fa-pen-to-square text-danger p-2"></i></a><a href="#"><i class="fa-solid fa-desktop text-warning p-2"></i></a><a href="#"><i class="fa-solid fa-laptop-code text-info p-2"></i></a></td>
                        </tr>
                        <tr>
                            <td>Project Gamma</td>
                            <td>Alice Johnson</td>
                            <td>
                                <select class="form-select form-select-sm" aria-label="Default select example">
                                    <option value="1" selected>1.2.5</option>
                                    <option value="2">2.3.4</option>
                                    <option value="3">3.4.5</option>
                                </select>
                            </td>
                            <td><span class="badge badge-danger">On Hold</span></td>
                            <td><a href="#"><i class="fa-solid fa-eye text-primary p-2"></i></a><a href="#"><i class="fa-solid fa-pen-to-square text-danger p-2"></i></a><a href="#"><i class="fa-solid fa-desktop text-warning p-2"></i></a><a href="#"><i class="fa-solid fa-laptop-code text-info p-2"></i></a></td>
                        </tr>
                        <!-- Add more rows as needed -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>






</div>

<!--end::Content-->


@endsection

@push('script')
@endpush
