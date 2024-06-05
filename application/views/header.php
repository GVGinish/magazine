<!DOCTYPE html>
<html lang="zxx">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/bootstrap.min.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/remixicon.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/uicons-regular-rounded.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/flaticon_baxo.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/swiper.bundle.min.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/aos.min.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/header.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/style.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/footer.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/responsive.css">
      <link rel="stylesheet" href="<?=BASEURL?>assets1/css/dark-theme.css">
      <title>Buisness Boom - Booming You Globally</title>
      <link rel="icon" type="image/png" href="<?=BASEURL?>assets1/img/logo.jpg">
   </head>
   <style>
    .page-nav a.gridjs-currentPage {
        background-color: orange;
        font-weight: bold;
    }
    .page-nav a {
        color: black;
        padding: 5px 10px;
        text-decoration: none;
    }
    .page-nav a:hover {
        color: orange;
    }
    .error{
      color:red;
    }
</style>

   <body>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
      </div>
      <div class="switch-theme-mode">
         <label id="switch" class="switch">
         <input type="checkbox" onchange="toggleTheme()" id="slider">
         <span class="slider round"></span>
         </label>
      </div>
      <div class="navbar-area header-three" id="navbar">
         <div class="container">
            <nav class="navbar navbar-expand-lg">
               <a class="navbar-brand" href="<?=BASEURL?>index">
               <img class="logo-light" src="<?=BASEURL?>assets1/img/logo.jpg" alt="logo">
               <img class="logo-dark" src="<?=BASEURL?>assets1/img/logo.jpg" alt="logo">
               </a>
               <a class="navbar-toggler" data-bs-toggle="offcanvas" href="#navbarOffcanvas" role="button"
                  aria-controls="navbarOffcanvas">
               <span class="burger-menu">
               <span class="top-bar"></span>
               <span class="middle-bar"></span>
               <span class="bottom-bar"></span>
               </span>
               </a>
               <div class="collapse navbar-collapse">
                  <ul class="navbar-nav mx-auto">
                     <li class="nav-item">
                        <a href="<?=BASEURL?>index" class="nav-link <?=($index == 'active')? 'active': '' ?>">
                        Home
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>magazine" class="nav-link <?=($magazine == 'active')? 'active': '' ?>">
                        Magazine
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>articles" class="nav-link <?=($articles == 'active')? 'active': '' ?>">
                        Articles
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>featured_video" class="nav-link <?=($featured_video == 'active')? 'active': '' ?>">
                        Video
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>site_gallery" class="nav-link <?=($site_gallery == 'active')? 'active': '' ?>">
                        Gallery
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>contact" class="nav-link <?=($contact == 'active')? 'active': '' ?>">
                        Contact Us
                        </a>
                     </li>
                     <li class="nav-item">
                        <a href="<?=BASEURL?>site_notification" class="nav-link <?=($site_notification == 'active')? 'active': '' ?>">
                        Notifications
                        </a>
                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
      <div class="responsive-navbar offcanvas offcanvas-end" data-bs-backdrop="static" tabindex="-1" id="navbarOffcanvas">
         <div class="offcanvas-header">
            <a href="<?=BASEURL?>index" class="logo d-inline-block">
            <img class="logo-light" src="<?=BASEURL?>assets1/img/logo.jpg" alt="logo">
            <img class="logo-dark" src="<?=BASEURL?>assets1/img/logo.jpg" alt="logo">
            </a>
            <button type="button" class="close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
            <i class="ri-close-line"></i>
            </button>
         </div>
         <div class="offcanvas-body">
            <div class="accordion" id="navbarAccordion">
               <ul class="navbar-nav mx-auto">
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>index" class="nav-link <?=($index == 'active')? 'active': '' ?>">
                     Home
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>business" class="nav-link <?=($business == 'active')? 'active': '' ?>">
                     Magazine
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>politics" class="nav-link <?=($featured_video == 'active')? 'active': '' ?>">
                     Articles 
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>featured_video" class="nav-link <?=($politics == 'active')? 'active': '' ?>">
                     Video
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>site_gallery" class="nav-link <?=($site_gallery == 'active')? 'active': '' ?>">
                     Gallery
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>contact" class="nav-link <?=($contact == 'active')? 'active': '' ?>">
                     Contact Us
                     </a>
                  </li>
                  <li class="nav-item mobi">
                     <a href="<?=BASEURL?>site_notification" class="nav-link <?=($site_notification == 'active')? 'active': '' ?>">
                     Notifications
                     </a>
                  </li>
               </ul>
            </div>
            <div class="offcanvas-contact-info">
               <h4>Contact Info</h4>
               <ul class="contact-info list-style">
                  <li>
                     <i class="ri-map-pin-fill"></i>
                     <p>28/A Street, New York, USA</p>
                  </li>
                  <li>
                     <i class="ri-mail-fill"></i>
                     <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#e189848d8d8ea18380998ecf828e8c"><span class="__cf_email__" data-cfemail="3d55585151527d5f5c4552135e5250">[email&#160;protected]</span></a>
                  </li>
                  <li>
                     <i class="ri-phone-fill"></i>
                     <a href="tel:1800123456789">+1 800 123 456 789</a>
                  </li>
               </ul>
               <ul class="social-profile list-style">
                  <li><a href="https://www.fb.com/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                  <li><a href="https://www.instagram.com/" target="_blank"><i class="ri-instagram-line"></i></a></li>
                  <li><a href="https://www.linkedin.com/" target="_blank"><i class="ri-linkedin-fill"></i></a></li>
                  <li><a href="https://www.twitter.com/" target="_blank"><i class="ri-twitter-fill"></i></a></li>
               </ul>
            </div>
            <div class="others-option d-flex d-lg-none align-items-center">
               <div class="option-item">
                  <a href="<?=BASEURL?>login" class="btn-two">Sign In</a>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form>
                  <input type="text" class="form-control" placeholder="Search here....">
                  <button type="submit"><i class="fi fi-rr-search"></i></button>
               </form>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i class="ri-close-line"></i></button>
            </div>
         </div>
      </div>