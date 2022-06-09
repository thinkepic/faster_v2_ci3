<div id="kt_content_container" class="container-xxl">
    <!--begin::Card-->
    <div class="card">
        <div class="card-body border-0 pt-6">
            <div class="row">
                <div class="col-md-6">
                    <h5>Data Events</h5>
                    <span>List all your events</span>
                </div>

                <div class="col-md-6 d-flex justify-content-end">
                    <div class="d-flex">
                        <button class="btn btn-secondary btn-sm m-2 btn-active-dark active">Today</button>
                        <button class="btn btn-secondary btn-sm m-2">This Week</button>
                        <button class="btn btn-secondary btn-sm m-2">This Mount</button>
                        <button class="btn btn-secondary btn-sm m-2">All Event</button>
                    </div>
                </div>
            </div>
        </div>
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                    <span class="svg-icon svg-icon-1 position-absolute ms-6">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Search Event">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">

                    <!--end::Filter-->
                    
                    <!--begin::Add user-->
                    <div class="alert alert-danger" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                    3 Event Not reported,
                <a href="">Click to view !</a>
                </div>
                    <!--end::Add user-->
                </div>
                <!--end::Toolbar-->
        
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <div id="kt_table_users_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                <div class="table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_table_users">
                <!--begin::Table head-->
                <thead class="bg-secondary">
                    <!--begin::Table row-->
                    <tr class="text-start text-muted fw-bolder fs-7 text-uppercase gs-0">
                        <th class="min-w-25px sorting text-dark" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending" style="width: 5%;">
                        PROJECT
                        </th>
                        <th class="min-w-125px sorting text-dark" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Role: activate to sort column ascending" style="width: 20%;">
                        TOR INFORMATION
                        </th>
                        <th class="min-w-125px sorting text-dark" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 45%;">
                        DETAIL INFORMATION
                        </th>
                        <th class="min-w-125px sorting text-dark" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Last login: activate to sort column ascending" style="width: 25%;">
                        REQUESTOR
                        </th>
                        <th class="min-w-25px sorting text-dark" tabindex="0" aria-controls="kt_table_users" rowspan="1" colspan="1" aria-label="Two-step: activate to sort column ascending" style="width: 5%;">
                    
                        </th>
                    </tr>
                    <!--end::Table row-->
                </thead>
                <!--end::Table head-->
                <!--begin::Table body-->
                <tbody class="text-gray-600 fw-bold">
                                                
                    <!--end::Table row-->
                <tr class="odd">
                    <td>
                    <!--begin::Avatar-->
                    <div class="symbol symbol-rectangle symbol-50px overflow-hidden me-3">
                        <a href="../../demo8/dist/apps/user-management/users/view.html">
                            <div class="symbol-label">
                                <img src="<?= base_url()?>assets/media/logos/lingkages.png" alt="Emma Smith" class="w-100">
                            </div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    </td>
                        <!--begin::User=-->
                        <td class="d-flex align-items-center">
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="../../demo8/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">
                                    <b>T-123456</b>
                                </a>
                                <span class="text-danger" style="font-size: 0.7em"> > ASAP-234321</span>
                                <span class="text-primary" style="font-size: 0.9em"> Rp. 2.5000.000</span>
                            </div>
                            <!--begin::User details-->
                        </td>
                        <!--end::User=-->
                        <!--begin::Role=-->
                        <td style="padding-right: 80px" >
                            <p style="font-size: 0.85em">
                                1. pelatihan pemograman satu di bireuen.
                                2. pelatihan pemograman dua di bireuen.
                                3. pelatihan pemograman tiga di bireuen.
                                <br>
                                <b class="text-primary" style="font-size: 0.8em;">
                                    Periode: Juni 2022 (Postponed From Mei 2022)
                                </b>
                            </p>
                        </td>
                        <!--end::Role=-->
                        <!--begin::hh=-->
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-rectangle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo8/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= base_url()?>assets/media/svg/avatars/001-boy.svg" alt="Emma Smith" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <div class="col-md-8">
                                    <span class="text-dark">Luthfi</span>
                                    <br>
                                    <span style="font-size:0.9em">ICT4D - Officer</span>
                                </div>
                            </div>
                        </td>
                        <!--end::hh=-->
                        <!--begin::Action=-->
                        <td class="d-flex align-items-center">
                            <!-- <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions -->
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <a href="eventorganizing/detail">
                                <span class="svg-icon svg-icon m-0" style="position:relative; top:20px">
                                    <i class="bi bi-vector-pen fs-2x"></i>
                                </span>
                            </a>
                            <!--end::Svg Icon-->
                        </td>
                        <!--end::Action=-->
                    </tr>

                    <tr class="odd">
                    <td>
                    <!--begin::Avatar-->
                    <div class="symbol symbol-rectangle symbol-50px overflow-hidden me-3">
                        <a href="../../demo8/dist/apps/user-management/users/view.html">
                        <div class="symbol-label">
                            <img src="<?= base_url()?>assets/media/logos/lingkages.png" alt="Emma Smith" class="w-100">
                        </div>
                        </a>
                    </div>
                    <!--end::Avatar-->
                    </td>
                        <!--begin::User=-->
                        <td class="d-flex align-items-center">
                            <!--begin::User details-->
                            <div class="d-flex flex-column">
                                <a href="../../demo8/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">
                                    <b>T-123456</b>
                                </a>
                                <span class="text-danger" style="font-size: 0.7em"> > ASAP-234321</span>
                                <span class="text-primary" style="font-size: 0.9em"> Rp. 2.5000.000</span>
                            </div>
                            <!--begin::User details-->
                        </td>
                        <!--end::User=-->
                        <!--begin::Role=-->
                        <td style="padding-right: 80px" >
                            <p style="font-size: 0.85em">
                                1. pelatihan pemograman satu di bireuen.
                                2. pelatihan pemograman dua di bireuen.
                                3. pelatihan pemograman tiga di bireuen.
                                <br>
                                <b class="text-primary" style="font-size: 0.8em;">
                                    Periode: Juni 2022 (Postponed From Mei 2022)
                                </b>
                            </p>
                        </td>
                        <!--end::Role=-->
                        <!--begin::hh=-->
                        <td>
                            <div class="row">
                                <div class="col-md-4">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-rectangle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo8/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="<?= base_url()?>assets/media/svg/avatars/001-boy.svg" alt="Emma Smith" class="w-100">
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                </div>
                                <div class="col-md-8">
                                    <span class="text-dark">Luthfi</span>
                                    <br>
                                    <span style="font-size:0.9em">ICT4D - Officer</span>
                                </div>
                            </div>
                        </td>
                        <!--end::hh=-->
                        <!--begin::Action=-->
                        <td class="d-flex align-items-center">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
                            <a href="eventorganizing/detail">
                                <span class="svg-icon svg-icon m-0" style="position:relative; top:20px">
                                <i class="bi bi-vector-pen fs-2x"></i>
                                </span>
                            </a>
                            <!--end::Svg Icon--></a>
                        </td>
                        <!--end::Action=-->
                    </tr>
                    
                </tbody>
                <!--end::Table body-->
            </table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start">
                <div class="form-group">
                    <select name="" id="" class="form-control">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="75">75</option>
                        <option value="100">100</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"><div class="dataTables_paginate paging_simple_numbers" id="kt_table_users_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_table_users_previous"><a href="#" aria-controls="kt_table_users" data-dt-idx="0" tabindex="0" class="page-link"><i class="previous"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="kt_table_users" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_table_users" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="kt_table_users" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="kt_table_users_next"><a href="#" aria-controls="kt_table_users" data-dt-idx="4" tabindex="0" class="page-link"><i class="next"></i></a></li></ul></div></div></div></div>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->
</div>