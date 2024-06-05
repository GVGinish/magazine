<?php include('header.php')?>
<div id="layout-wrapper">
<header id="page-topbar">
    <div class="layout-width">
        <div class="navbar-header">
            <div class="d-flex">
               
                <div class="navbar-brand-box horizontal-logo">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="<?=BASEURL?>assets/images/logo-sm.png" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=BASEURL?>assets/images/logo-dark.png" alt="" height="40">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="<?=BASEURL?>assets/images/logo-sm.png" alt="" height="50">
                        </span>
                        <span class="logo-lg">
                            <img src="<?=BASEURL?>assets/images/logo-light.png" alt="" height="40">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon">
                    <span class="hamburger-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>

              
            </div>

            <div class="d-flex align-items-center">

<div class="dropdown d-md-none topbar-head-dropdown header-item">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="bx bx-search fs-22"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
        <form class="p-3">
            <div class="form-group m-0">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                    <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
    <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
        <i class='bx bx-bell fs-22'></i>
        <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
    </button>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

        <div class="dropdown-head bg-primary bg-pattern rounded-top">
            <div class="p-3">
                <div class="row align-items-center">
                    <div class="col">
                        <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                    </div>
                    <div class="col-auto dropdown-tabs">
                        <span class="badge bg-light-subtle text-body fs-13"> 4 New</span>
                    </div>
                </div>
            </div>

            <div class="px-2 pt-2">
                <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                    <li class="nav-item waves-effect waves-light">
                        <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                            All (4)
                        </a>
                    </li>
                 
                </ul>
            </div>

        </div>

        <div class="tab-content position-relative" id="notificationItemsTabContent">
            <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                <div data-simplebar style="max-height: 300px;" class="pe-2">
                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                            <div class="avatar-xs me-3 flex-shrink-0">
                                <span class="avatar-title bg-info-subtle text-info rounded-circle fs-16">
                                    <i class="bx bx-badge-check"></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                        Optimization <span class="text-secondary">reward</span> is
                                        ready!
                                    </h6>
                                </a>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                    <label class="form-check-label" for="all-notification-check01"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                        graph 🔔.</p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                    <label class="form-check-label" for="all-notification-check02"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                            <div class="avatar-xs me-3 flex-shrink-0">
                                <span class="avatar-title bg-danger-subtle text-danger rounded-circle fs-16">
                                    <i class='bx bx-message-square-dots'></i>
                                </span>
                            </div>
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                    </h6>
                                </a>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                    <label class="form-check-label" for="all-notification-check03"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item position-relative">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs flex-shrink-0" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                    <label class="form-check-label" for="all-notification-check04"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 text-center view-all">
                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                            All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                    </div>
                </div>

            </div>

            <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                <div data-simplebar style="max-height: 300px;" class="pe-2">
                    <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                    <label class="form-check-label" for="messages-notification-check01"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">Answered to your comment on the cash flow forecast's
                                        graph 🔔.</p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                    <label class="form-check-label" for="messages-notification-check02"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                    </p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                    <label class="form-check-label" for="messages-notification-check03"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="text-reset notification-item d-block dropdown-item">
                        <div class="d-flex">
                            <img src="<?=BASEURL?>assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                            <div class="flex-grow-1">
                                <a href="#!" class="stretched-link">
                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                </a>
                                <div class="fs-13 text-muted">
                                    <p class="mb-1">We talked about a project on linkedin.</p>
                                </div>
                                <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                    <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                </p>
                            </div>
                            <div class="px-2 fs-15">
                                <div class="form-check notification-check">
                                    <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                    <label class="form-check-label" for="messages-notification-check04"></label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-3 text-center view-all">
                        <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                            All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"></div>

            <div class="notification-actions" id="notification-actions">
                <div class="d-flex text-muted justify-content-center">
                    Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="dropdown ms-sm-3 header-item topbar-user">
    <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="d-flex align-items-center">
            <img class="rounded-circle header-profile-user" src="<?=BASEURL?>assets/images/users/avatar-1.jpg" alt="Header Avatar">
            <span class="text-start ms-xl-2">
                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Garggy</span>
            </span>
        </span>
    </button>
 
</div>
</div>
        </div>
    </div>
</header>
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
            </div>
            <div class="modal-body">
                <div class="mt-2 text-center">
                    <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
                    <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                        <h4>Are you sure ?</h4>
                        <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                    </div>
                </div>
                <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                    <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="app-menu navbar-menu">
           
           <div class="navbar-brand-box">
            
               <a href="dashboard.php" class="logo logo-dark">
                   <span class="logo-sm">
                       <img src="<?=BASEURL?>assets/images/logo-sm.png" alt="" height="50">
                   </span>
                   <span class="logo-lg">
                       <img src="<?=BASEURL?>assets/images/logo-dark.png" alt="" height="40">
                   </span>
               </a>
               <!-- Light Logo-->
               <a href="dashboard.php" class="logo logo-light">
                   <span class="logo-sm">
                       <img src="<?=BASEURL?>assets/images/logo-sm.png" alt="" height="50">
                   </span>
                   <span class="logo-lg">
                       <img src="<?=BASEURL?>assets/images/logo-light.png" alt="" height="40">
                   </span>
               </a>
               <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                   <i class="ri-record-circle-line"></i>
               </button>
           </div>

           <div id="scrollbar">
               <div class="container-fluid">

                   <div id="two-column-menu">
                   </div>
                   <ul class="navbar-nav" id="navbar-nav">
                       <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                       <li class="nav-item">
                           <a href="contact.php"  class="nav-link menu-link" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                               <i class="ri-account-circle-line"></i> <span data-key="t-dashboards">Customers</span>
                           </a>
                      </li>
                      <li class="nav-item">
                           <a href="employee-database.php"  class="nav-link menu-link" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                               <i class="ri-pages-line"></i> <span data-key="t-dashboards">Employee Database</span>
                           </a>
                      </li>
                       <li class="nav-item">
                           <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                               <i class="ri-apps-2-line"></i> <span data-key="t-apps">Rental</span>
                           </a>
                           <div class="collapse menu-dropdown" id="sidebarApps">
                               <ul class="nav nav-sm flex-column">
                                   <li class="nav-item">
                                       <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                          Products
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="products-category-details.php" class="nav-link" data-key="t-products">Category</a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="product-list.php" class="nav-link" data-key="t-products"> Products </a>
                                               </li>
                                            
                                           </ul>
                                       </div>
                                    </li>
                                       <li class="nav-item">
                                       <a href="#sidebarCalendar1" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar1" data-key="t-calender">
                                        Bookings
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar1">
                                       <ul class="nav nav-sm flex-column">
                                              
                                       <li class="nav-item">
                                                   <a href="completed-details.php" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebaremailTemplates5" data-key="t-email-templates">
                                                     New Booking
                                                   </a>
                                                </li>
                                               <li class="nav-item">
                                                   <a href="booking-list.php " class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebaremailTemplates4" data-key="t-email-templates">
                                                   Current Booking 
                                                   </a></li>
                                                 
                                               <li class="nav-item">
                                                   <a href="upcoming-list.php" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebaremailTemplates3" data-key="t-email-templates">
                                                   Upcoming Booking 
                                                   </a>
                                               </li>

                                               <li class="nav-item">
                                                   <a href="cancelled.php" class="nav-link"  role="button" aria-expanded="false" aria-controls="sidebaremailTemplates3" data-key="t-email-templates">
                                                   Cancelled Booking 
                                                   </a>
                                               </li>
                                            </ul>
                                       </div>
</li>
                                       <li class="nav-item">
                                                   <a href="rental-list.php" class="nav-link"   aria-expanded="false"  data-key="t-email-templates">
                                                   Rentals 
                                                   </a></li>
                                  
                                   <li class="nav-item">
                                                   <a href="return-list.php" class="nav-link"   aria-expanded="false"  data-key="t-email-templates">
                                                   Returned 
                                                   </a></li>
                                
                                   <li class="nav-item">
                                                   <a href="dry-cleaning-list.php" class="nav-link"   aria-expanded="false"  data-key="t-email-templates">
                                                   Dry Cleaning 
                                                   </a></li>
                                 
                                   <li class="nav-item">
                                                   <a href="repair-list.php" class="nav-link"   aria-expanded="false"  data-key="t-email-templates">
                                                   Repairs 
                                                   </a></li>
                                  
                                   <li class="nav-item">
                                                   <a href="completed-list.php" class="nav-link"   aria-expanded="false"  data-key="t-email-templates">
                                                   Completed
                                                   </a></li>
                                  
                                </li>
                                <li class="nav-item">
                                       <a href="sales-man.php" class="nav-link" role="button" aria-expanded="false" aria-controls="sidebarCalendar1" data-key="t-calender">
                                        Sales Man
                                       </a></li>
                               </ul>
                           </div>
                       </li>
                       <li class="nav-item">
                   <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarAuth">
                       <i class="ri-stack-line"></i> <span data-key="t-authentication">Retail Billing</span>
                   </a>
                   <div class="collapse menu-dropdown" id="sidebarAuth">
                       <ul class="nav nav-sm flex-column">
                  
                           <li class="nav-item">
                               <a href="retail-category.php" class="nav-link"role="button"
                                   aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup">Category 
                               </a></li>

                           <li class="nav-item">
                               <a href="retail-product-list.php" class="nav-link"  role="button"
                                   aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                               Products
                               </a></li>
                               <li class="nav-item">
                               <a href="retail-billing-details.php" class="nav-link"  role="button"
                                   aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                              Billing
                               </a></li>
                               <li class="nav-item">
                               <a href="new-billing.php" class="nav-link"  role="button"
                                   aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">
                              Records
                               </a></li>
                           </ul>
                   </div>
               </li>
                       <li class="nav-item">
                           <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                               <i class="ri-layout-3-line"></i> <span data-key="t-layouts"> Tailoring</span>
                           </a>
                           <div class="collapse menu-dropdown" id="sidebarLayouts">
                               <ul class="nav nav-sm flex-column">
                               <li class="nav-item">
                                       <a href="#sidebarCalendar" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                          Shop-1
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="tailoring-new-bill.php" class="nav-link" data-key="t-products">New Bill</a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="open-bill-list.php" class="nav-link" data-key="t-products">Open Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="closed-bill-list.php" class="nav-link" data-key="t-products">Closed Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="cancelled-bill-list.php" class="nav-link" data-key="t-products">Cancelled Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-bill-record.php" class="nav-link" data-key="t-products">Bills Record</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-expense.php" class="nav-link" data-key="t-products">Expense</a>
                                               </li>
                                            </ul>
                                       </div>
                                    </li>
                                    <li class="nav-item">
                                       <a href="#sidebarCalendar00" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                          Shop-2
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar00">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="tailoring-new-bill.php" class="nav-link" data-key="t-products">New Bill</a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="open-bill-list.php" class="nav-link" data-key="t-products">Open Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="closed-bill-list.php" class="nav-link" data-key="t-products">Closed Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="cancelled-bill-list.php" class="nav-link" data-key="t-products">Cancelled Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-bill-record.php" class="nav-link" data-key="t-products">Bills Record</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-expense.php" class="nav-link" data-key="t-products">Expense</a>
                                               </li>
                                            </ul>
                                       </div>
                                    </li>
                           <li class="nav-item">
                                       <a href="#sidebarCalendar01" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                          Shop-3
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar01">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="tailoring-new-bill.php" class="nav-link" data-key="t-products">New Bill</a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="open-bill-list.php" class="nav-link" data-key="t-products">Open Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="closed-bill-list.php" class="nav-link" data-key="t-products">Closed Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="cancelled-bill-list.php" class="nav-link" data-key="t-products">Cancelled Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-bill-record.php" class="nav-link" data-key="t-products">Bills Record</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-expense.php" class="nav-link" data-key="t-products">Expense</a>
                                               </li>
                                            </ul>
                                       </div>
                                    </li>
                           <li class="nav-item">
                                       <a href="#sidebarCalendar02" class="nav-link" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCalendar" data-key="t-calender">
                                          Shop-4
                                       </a>
                                       <div class="collapse menu-dropdown" id="sidebarCalendar02">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="tailoring-new-bill.php" class="nav-link" data-key="t-products">New Bill</a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="open-bill-list.php" class="nav-link" data-key="t-products">Open Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="closed-bill-list.php" class="nav-link" data-key="t-products">Closed Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="cancelled-bill-list.php" class="nav-link" data-key="t-products">Cancelled Bills</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-bill-record.php" class="nav-link" data-key="t-products">Bills Record</a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="tailoring-expense.php" class="nav-link" data-key="t-products">Expense</a>
                                               </li>
                                            </ul>
                                       </div>
                                    </li>
                               </ul>
                           </div>
                       </li>
                      
               <li class="nav-item">
                   <a class="nav-link menu-link" href="tailoring-expense.php"role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                       <i class="ri-creative-commons-nc-fill"></i> <span data-key="t-pages">Expenses</span>
                   </a>
                </li>
                
               <li class="nav-item">
                   <a class="nav-link menu-link"data-bs-toggle="collapse"  href="#sidebarCalendar001"role="button"
                       aria-expanded="false" aria-controls="sidebarPages">
                       <i class="bx bx-bell fs-22"></i> <span data-key="t-pages">Notification</span>
                   </a>
                   <div class="collapse menu-dropdown" id="sidebarCalendar001">
                                           <ul class="nav nav-sm flex-column">
                                           <li class="nav-item">
                                                   <a href="notification.php" class="nav-link" data-key="t-products"> Booking </a>
                                               </li>
                                           <li class="nav-item">
                                                   <a href="notification.php" class="nav-link" data-key="t-products">Rental </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="notification.php" class="nav-link" data-key="t-products">Dry Cleaning </a>
                                               </li>
                                               <li class="nav-item">
                                                   <a href="notification.php" class="nav-link" data-key="t-products"> Repair</a>
                                               </li>
                                            </ul>
                                       </div>
                </li>

               <li class="nav-item">
                   <a class="nav-link menu-link" href="report.php"  role="button"
                       aria-expanded="false" aria-controls="sidebarLanding">
                       <i class="ri-pie-chart-line"></i> <span data-key="t-landing">Reports</span></a>
                   </li>
                    </ul>
               </div>
               </div>
           </div>

           <?php include('footer.php')?>

