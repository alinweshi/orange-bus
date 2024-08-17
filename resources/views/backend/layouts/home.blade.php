@extends('backend.layouts.app')
@section("content")
<div class="main-content app-content">
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">اهلا و سهلا</p>
                <span class="fs-semibold text-muted" style="font-size:18px">اكتشف كل تفاصيل شغلك هنا </span>
            </div>
            <div class="btn-list mt-md-0 mt-2">
                <button type="button" class="btn btn-primary btn-wave"><i
                        class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters</button>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-9 col-xl-12">
                <div class="row">

                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xxl-4 col-lg-4 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary"> <i
                                                        class="ti ti-users fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">{{ __("Total mobile customers") }}
                                                        </p>
                                                        <h4 class="fw-semibold mt-1">1,02,890</h4>
                                                    </div>
                                                    <div id="crm-total-customers"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-primary" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+40%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-4 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-secondary"> <i
                                                        class="ti ti-wallet fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">{{__("Total card customers")}} </p>
                                                        <h4 class="fw-semibold mt-1">$56,562</h4>
                                                    </div>
                                                    <div id="crm-total-revenue"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-secondary" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+25%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-6 col-lg-6 col-md-6 d-none">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-success"> <i
                                                        class="ti ti-wave-square fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Conversion Ratio</p>
                                                        <h4 class="fw-semibold mt-1">12.08%</h4>
                                                    </div>
                                                    <div id="crm-conversion-ratio"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-success" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-4 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning"> <i
                                                        class="ti ti-briefcase fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">{{ __("total bus number") }}</p>
                                                        <h4 class="fw-semibold mt-1">2,543</h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-4 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning"> <i
                                                        class="ti ti-briefcase fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">{{ __("total drivers number") }}</p>
                                                        <h4 class="fw-semibold mt-1">2,543</h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-lg-4 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-warning"> <i
                                                        class="ti ti-briefcase fs-16"></i> </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div
                                                    class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">{{ __("total delegators number") }}
                                                        </p>
                                                        <h4 class="fw-semibold mt-1">2,543</h4>
                                                    </div>
                                                    <div id="crm-total-deals"></div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-warning" href="#">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold">+19%</p>
                                                        <span class="text-muted op-7 fs-11">this month</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">{{ __("total daily bus trips") }}</div>
                                <div class="dropdown">
                                    <a href="#" class="p-2 fs-12 text-muted" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        View All<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item" href="#">Today</a></li>
                                        <li><a class="dropdown-item" href="#">This Week</a></li>
                                        <li><a class="dropdown-item" href="#">Last Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="crm-revenue-analytics"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Deals Statistics</div>
                                <div class="d-flex flex-wrap gap-2">
                                    <div><input class="form-control form-control-sm" type="text"
                                            placeholder="Search Here" aria-label=".form-control-sm example" />
                                    </div>
                                    <div class="dropdown">
                                        <a href="#" class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Sort By<i class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item" href="#">New</a></li>
                                            <li><a class="dropdown-item" href="#">Popular</a></li>
                                            <li><a class="dropdown-item" href="#">Relevant</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table text-nowrap table-hover border table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel1" value=""
                                                        aria-label="..." /></th>
                                                <th scope="col">Sales Rep</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Mail</th>
                                                <th scope="col">Location</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel2" value=""
                                                        aria-label="..." /></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="assets/images/faces/4.jpg" alt="img" />
                                                        </span>Mayor Kelly
                                                    </div>
                                                </td>
                                                <td>Manufacture</td>
                                                <td>mayorkelly@gmail.com</td>
                                                <td><span class="badge bg-info-transparent">Germany</span></td>
                                                <td>Sep 15 - Oct 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."
                                                        checked /></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="assets/images/faces/15.jpg" alt="img" />
                                                        </span>Andrew Garfield
                                                    </div>
                                                </td>
                                                <td>Development</td>
                                                <td>andrewgarfield@gmail.com</td>
                                                <td><span class="badge bg-primary-transparent">Canada</span>
                                                </td>
                                                <td>Apr 10 - Dec 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel4" value=""
                                                        aria-label="..." /></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="assets/images/faces/11.jpg" alt="img" />
                                                        </span>Simon Cowel
                                                    </div>
                                                </td>
                                                <td>Service</td>
                                                <td>simoncowel234@gmail.com</td>
                                                <td><span class="badge bg-danger-transparent">Europe</span></td>
                                                <td>Sep 15 - Oct 12, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel5" value="" aria-label="..."
                                                        checked /></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="assets/images/faces/8.jpg" alt="img" />
                                                        </span>Mirinda Hers
                                                    </div>
                                                </td>
                                                <td>Marketing</td>
                                                <td>mirindahers@gmail.com</td>
                                                <td><span class="badge bg-warning-transparent">USA</span></td>
                                                <td>Apr 14 - Dec 14, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row" class="ps-4"><input class="form-check-input"
                                                        type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."
                                                        checked /></th>
                                                <td>
                                                    <div class="d-flex align-items-center fw-semibold">
                                                        <span class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                src="assets/images/faces/9.jpg" alt="img" />
                                                        </span>Jacob Smith
                                                    </div>
                                                </td>
                                                <td>Social Plataform</td>
                                                <td>jacobsmith@gmail.com</td>
                                                <td><span class="badge bg-success-transparent">Singapore</span>
                                                </td>
                                                <td>Feb 25 - Nov 25, 2023</td>
                                                <td>
                                                    <div class="hstack gap-2 fs-15">
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                class="ri-download-2-line"></i></a>
                                                        <a aria-label="anchor" href="#"
                                                            class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                class="ri-edit-line"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center">
                                    <div>Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                    </div>
                                    <div class="ms-auto">
                                        <nav aria-label="Page navigation" class="pagination-style-4">
                                            <ul class="pagination mb-0">
                                                <li class="page-item disabled"><a class="page-link" href="#">
                                                        Prev </a></li>
                                                <li class="page-item active"><a class="page-link" href="#">1</a>
                                                </li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link text-primary" href="#"> next
                                                    </a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 d-none">
                                <div class="card custom-card crm-highlight-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Your target
                                                    is incomplete</div>
                                                <span class="d-block fs-12 text-fixed-white">
                                                    <span class="op-7">You have completed</span> <span
                                                        class="fw-semibold text-warning">48%</span> <span
                                                        class="op-7">of the given target, you can also check
                                                        your status</span>.
                                                </span>
                                                <span class="d-block fw-semibold mt-1">
                                                    <a class="text-fixed-white" href="#"><u>Click here</u></a>
                                                </span>
                                            </div>
                                            <div>
                                                <div id="crm-main"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop