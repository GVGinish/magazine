<!doctype html>
<html class="no-js" lang="zxx">
   <head>
      <meta charset="utf-8" />
      <title>MAGAZINE Login</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
      <meta content="Themesbrand" name="author" />
      <link rel="shortcut icon" href="<?=BASEURL?>assets/images/favicon.ico">
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
      <link href="<?=BASEURL?>assets/css/fullcalender.min.css" rel="stylesheet" type="text/css" />
      <!-- custom Css-->
      <link href="<?=BASEURL?>assets/css/custom.min.css" rel="stylesheet" type="text/css" />
      <link rel="shortcut icon" href="<?=BASEURL?>assets/medocal_logo.png">
      <link rel="stylesheet" href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" type="text/css" />
      <link href="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css" />
      <link href="<?=BASEURL?>assets/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
   </head>
   <body>

      <div class="auth-page-content">
      <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="text-center mt-sm-5 mb-4 text-white-50">
               <div>
                  <a href="index" class="d-inline-block auth-logo">
                  <img src="" alt="" height="100%">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="row justify-content-center"   >
         <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card">


               <div class="card-body p-4" id="admin_login" >
                  <div class="text-center mt-2">
                     <h5 class="text-primary">Admin Sign in <?=$username?></h5>
                  </div>
                  <div class="p-2 mt-4">
                  <form id="loginform">
                  <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" />
                        <div class="mb-3">
                           <label for="username" class="form-label">Username</label>
                           <input type="text" class="form-control"  name="username" placeholder="Enter username" value="<?=$username?>">
                        </div>
                        <div class="mb-3">
                           <label class="form-label" for="password-input">Password</label>
                           <div class="position-relative auth-pass-inputgroup mb-3">
                              <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input" name="password" value="<?=$password?>">
                              <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                           </div>
                        </div>
                        <div class="mt-4">
                           <button class="btn btn-success w-100"  onclick="loginsubmit()" type="button">Sign In</button>
                        </div>
                        <div class="error_response ml-3 p-3" style="color:red;font-size: 16px;"></div>
                  </div>
                  </form>
               </div>


              
            </div>
         </div>
         <!-- end -->
      </div>
      <footer class="footer">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <div class="text-center">
                     <p class="mb-0 text-muted">
                        &copy;
                        <script>document.write(new Date().getFullYear())</script>Garggy Developed by : Relaxplzz Technologies
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <script src="<?=BASEURL?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/simplebar/simplebar.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/node-waves/waves.min.js"></script>
      <script src="<?=BASEURL?>assets/libs/feather-icons/feather.min.js"></script>
      <script src="<?=BASEURL?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
      <script src="<?=BASEURL?>assets/js/plugins.js"></script>
      <script src="<?=BASEURL?>assets/libs/particles.js/particles.js"></script>
      <script src="<?=BASEURL?>assets/js/pages/particles.app.js"></script>
      <script src="<?=BASEURL?>assets/js/pages/password-addon.init.js"></script>
      <?php $this->session->set_flashdata('error_message', '');?>
   

      <script src="<?=BASEURL?>assets/js/jquery.min.js"></script>
      <script src="<?=BASEURL?>assets/js/validation.js"></script>
<script>
         function loginsubmit() {
             var form = $("#loginform");
         
             form.validate({
                 rules: {
                     username: { required: true },
                     password: { required: true },
                 },
                 messages: {
                     username: { required: "Please fill username" },
                     password: { required: "Please fill the password" },
                 }
             });
         
             if (form.valid()) {
                 var formData = new FormData(form[0]);
                 formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
         
                 $.ajax({
                     url: "<?=BASEURL?>login",
                     type: "post",
                     data: formData,
                     processData: false,
                     contentType: false,
                     headers: {
                         "X-Requested-With": "XMLHttpRequest"
                     },
                     success: function (response) {
                         var data = JSON.parse(response); // Parse JSON response
                         if (data.replay === "success") { // Check the parsed data
                             form[0].reset();
                             window.location.href = '<?=BASEURL?>adminlogin';
                         } else if (data.replay === "failed") {
                             $(".error_response").html(data.message); // Display the error message from the server
                             $(".server_response").empty(); // Clear any previous success messages
                             // Reload the page after setting values
                             setTimeout(function(){
                               window.location.href = '<?=BASEURL?>adminlogin/'+ data.username + "/" + data.password ;
                             }, 2000); // Reload the page after 2 seconds
                         }
                     },
                     error: function (xhr, status, error) {
                         if (xhr.status === 200) {
                             $(".error_response").html("An error occurred: " + xhr.responseText);
                         } else {
                             $(".error_response").html("An AJAX error occurred: " + error);
                         }
                         $(".server_response").empty();
                     }
                 });
             }
         }
      </script>
   </body>
</html>