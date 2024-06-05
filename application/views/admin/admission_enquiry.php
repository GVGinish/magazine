
<?php include("header.php")?>
<?php include('table_css_cdn.php')?>

 <div class="vertical-overlay"></div>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0">Admission Enquiry List</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="tab-content text-muted">
                                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                            <div id="table-product-list-all" class="table-card gridjs-border-none">
                                                <div role="complementary" class="gridjs gridjs-container"
                                                    style="width: 100%;">
                                                    <div class="gridjs-wrapper" style="height: auto;">
                                                    <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                                            <thead class="gridjs-thead">
                                                                <tr class="gridjs-tr">
                                                                    <th data-column-id="#"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:50px;">
                                                                        <div class="gridjs-th-content">#</div>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:180px;">
                                                                        <div class="gridjs-th-content">Name</div>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:180px;">
                                                                        <div class="gridjs-th-content">Phone</div>
                                                                    </th>
                                                                    <th data-column-id="product"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:180px;">
                                                                        <div class="gridjs-th-content">Email</div>
                                                                    </th>
                                                                    <th data-column-id="Bookings"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:150px;">
                                                                        <div class="gridjs-th-content">Course</div>
                                                                    </th>
                                                                    <th data-column-id="Bookings"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width:150px;">
                                                                        <div class="gridjs-th-content">Message</div>
                                                                    </th>
                                                                    <th data-column-id="action"
                                                                        class="gridjs-th gridjs-th-sort text-muted"
                                                                        tabindex="0" style="width: 80px;">
                                                                        <div class="gridjs-th-content">Action</div>
                                                                    </th>
                                                                </tr>
                                                            </thead>
                                                            <tbody class="gridjs-tbody">
                                                                <tr class="gridjs-tr">
                                                                    <td data-column-id="#" class="gridjs-td">1</td>
                                                                        <td data-column-id="orders" class="gridjs-td">#3455699
                                                                    </td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                                
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                    <p class="text-muted mb-0">Ancy</p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>12365478</span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>21/1/2024</span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>12365478</span>
                                                                    </td>

                                                                    <td data-column-id="action" class="gridjs-td"><span>
                                                                            <div class="dropdown"><button
                                                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="ri-more-fill"></i></button>
                                                                                <ul
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="tailoring-cancelled-bill.php"><i
                                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                                 
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#" data-id="1"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span></td>
                                                                </tr>
                                                                <tr class="gridjs-tr">
                                                                <td data-column-id="#" class="gridjs-td">2</td>

                                                                        <td data-column-id="orders" class="gridjs-td">#3455699
                                                                    </td>
                                                                    <td data-column-id="product" class="gridjs-td">
                                                                        <span>
                                                                            <div class="d-flex align-items-center">
                                                                                <div class="flex-shrink-0 me-3">
                                                                              
                                                                                </div>
                                                                                <div class="flex-grow-1">
                                                                                 
                                                                                    <p class="text-muted mb-0">Sana</p>
                                                                                </div>
                                                                            </div>
                                                                        </span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>12365478</span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>12365478</span>
                                                                    </td>
                                                                    <td data-column-id="price" class="gridjs-td">
                                                                        <span>21/1/2024</span>
                                                                    </td>
                                                            

                                                                    <td data-column-id="action" class="gridjs-td"><span>
                                                                            <div class="dropdown"><button
                                                                                    class="btn btn-soft-secondary btn-sm dropdown"
                                                                                    type="button"
                                                                                    data-bs-toggle="dropdown"
                                                                                    aria-expanded="false"><i
                                                                                        class="ri-more-fill"></i></button>
                                                                                <ul
                                                                                    class="dropdown-menu dropdown-menu-end">
                                                                                    <li><a class="dropdown-item"
                                                                                            href="tailoring-cancelled-bill.php"><i
                                                                                                class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                                                            View</a></li>
                                                                               
                                                                                    <li class="dropdown-divider"></li>
                                                                                    <li><a class="dropdown-item remove-list"
                                                                                            href="#" data-id="1"
                                                                                            data-bs-toggle="modal"
                                                                                            data-bs-target="#removeItemModal"><i
                                                                                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                                                            Delete</a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </span></td>
                                                                </tr>
                                                      
                                                             
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                             
                                                <div id="gridjs-temp" class="gridjs-temp"></div>
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

    </div>
<?php include('footer.php')?>
<?php include('table_script_cdn.php')?>
