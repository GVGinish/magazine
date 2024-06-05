<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">
   <head>
      <meta charset="utf-8" />
      <title>MAGAZINE Admin</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.jpg">
      <link rel="stylesheet" href="<?=BASEURL?>assets/libs/nouislider/nouislider.min.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets/libs/gridjs/theme/mermaid.min.css">
      <link href="<?=BASEURL?>assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
      <!--Swiper slider css-->
      <link href="<?=BASEURL?>assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
      <!-- Layout config Js -->
      <script src="<?=BASEURL?>assets/js/layout.js"></script>
      <!-- Bootstrap Css -->
      <link href="<?=BASEURL?>assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
      <!-- Icons Css -->
      <link href="<?=BASEURL?>assets/css/icons.min.css" rel="stylesheet" type="text/css" />
      <!-- App Css-->
      <link href="<?=BASEURL?>assets/css/app.min.css" rel="stylesheet" type="text/css" />
      <!-- custom Css-->
      <link href="<?=BASEURL?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" href="<?=BASEURL?>assets/images/logo.jpg">
      <link rel="stylesheet" href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" type="text/css" />
      <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
      <link href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
   </head>
   <style>
      .alert{
      right: 22px !important;
      top: 16px !important;
      z-index: 109988 !important;
      position: absolute !important;
      }
      @media screen and (max-width:767px){
      .dataTables_wrapper .col-sm-12.col-md-6 {
      margin-bottom: 10px !important;
      }
      div.dataTables_info {
      margin-bottom: 6px !important;
      }
      }
      @media screen and (min-width:768px){
      div.dataTables_paginate {
      margin-top: 10px !important;
      }
     
      }
   </style>
   <?php if (!empty($this->session->flashdata('success_message'))) { ?>
   <div id="success-alert" class="alert alert-success alert-dismissible" role="alert">
      <?= $this->session->flashdata('success_message') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   <?php } ?>
   <?php if (!empty($this->session->flashdata('error_message'))) { ?>
   <div id="danger-alert" class="alert alert-danger alert-dismissible" role="alert">
      <?= $this->session->flashdata('error_message') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
   <?php } ?>
   <body>
      <div id="layout-wrapper">
      <header id="page-topbar">
         <div class="layout-width">
            <div class="navbar-header">
               <div class="d-flex">
                  <div class="navbar-brand-box horizontal-logo">
                     <a href="<?=BASEURL?>index" class="logo logo-dark">
                     <span class="logo-sm">
                     <img src="<?=BASEURL?>assets/images/logo-sm.png" alt="" height="50">
                     </span>
                     <span class="logo-lg">
                     <img src="<?=BASEURL?>assets/images/logo-dark.png" alt="" height="40">
                     </span>
                     </a>
                     <a href="<?=BASEURL?>index.html" class="logo logo-light">
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
                  <div class="logout">
                     <a class="dropdown-item"  href="" data-bs-toggle="modal"  data-bs-target="#exampleModal1">
                     <i class="bx bx-power-off me-2"></i>
                     <span class="align-middle">Log Out</span>
                     </a>
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
                                                graph 🔔.
                                             </p>
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
                                                graph 🔔.
                                             </p>
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
                                 Select 
                                 <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                 Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="dropdown ms-sm-3 header-item topbar-user">
                     <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span class="d-flex align-items-center">
                     <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                     <span class="text-start ms-xl-2">
                     <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Admin</span>
                     <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">SA RAJA</span>
                     </span>
                     </span>
                     </button>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
               <div class="modal-body">
                  Are you sure want to logout ?
               </div>
               <div class="modal-footer">
               
                  <a href="<?=BASEURL?>adminlogout" class="btn btn-primary">Yes</a>
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
               </div>
            </div>
         </div>
      </div>
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
            <a href="" class="logo logo-dark">
            <span class="logo-sm">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
            </span>
            <span class="logo-lg">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="40">
            </span>
            </a>
            <!-- Light Logo-->
            <a href="" class="logo logo-light">
            <span class="logo-sm">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="50">
            </span>
            <span class="logo-lg">
            <img src="<?=BASEURL?>assets/images/logo.jpg" alt="" height="40">
            </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
            </button>
         </div>
         <div id="scrollbar" >
            <div class="container-fluid">
               <div id="two-column-menu">
               </div>
               <ul class="navbar-nav" id="navbar-nav">
                  <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                  <li class="nav-item">
                     <a href="<?=BASEURL?>add_article"  class="nav-link menu-link" data-bs-toggle="" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                     <i class="ri-honour-line"></i> <span data-key="t-dashboards">Add Article</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link" href="<?=BASEURL?>add_magazine"  role="button"
                        aria-expanded="false" aria-controls="sidebarLanding">
                     <i class="ri-user-voice-fill"></i> <span data-key="t-landing">Add Magazine</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link" href="<?=BASEURL?>gallery"role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                     <i class="ri-image-add-line"></i> <span data-key="t-pages">Gallery</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link" href="<?=BASEURL?>video"role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                     <i class="ri-creative-commons-nc-fill"></i> <span data-key="t-pages">Add video</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link menu-link" href="<?=BASEURL?>notification"role="button"
                        aria-expanded="false" aria-controls="sidebarPages">
                     <i class="ri-creative-commons-nc-fill"></i> <span data-key="t-pages">Add notification</span>
                     </a>
                  </li>

                
               
                  <li class="nav-item">
                     <a class="nav-link menu-link" href="<?=BASEURL?>admin/admission_enquiry"  role="button"
                        aria-expanded="false" aria-controls="sidebarLanding">
                     <i class="ri-file-paper-2-fill"></i> <span data-key="t-landing">Enquiry</span></a>
                  </li>
               </ul>
            </div>
         </div>
      </div>