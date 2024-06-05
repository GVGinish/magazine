<?php include('header.php')?>
<style>
   .form-check {
    display: block;
    min-height: 1.5rem;
    padding-left: 1.5em;
    margin-bottom: .125rem;
    display: flex;
    flex-direction: row-reverse;
}

   </style>


      <div class="breadcrumb-wrap">
         <div class="container">
            <h2 class="breadcrumb-title">Contact Us</h2>
            <ul class="breadcrumb-menu list-style">
               <li><a href="<?=BASEURL?>index">Home</a></li>
               <li>Contact Us</li>
            </ul>
         </div>
      </div>
      <div class="container ptb-100">
         <div class="row">
            <div class="col-xxl-10 offset-xxl-1">
               <div class="contact-wrap">
                  <div class="row justify-content-center pb-75">
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                           <span class="contact-icon">
                           <i class="flaticon-phone-call"></i>
                           </span>
                           <div class="contact-info">
                              <h3>Phone</h3>
                              <a href="tel:+91 90486 49269">+91 90486 49269</a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                           <span class="contact-icon">
                           <i class="flaticon-mail"></i>
                           </span>
                           <div class="contact-info">
                              <h3>E-Mail</h3>
                              <a href="mailto:businessboom01@gmail.com"><span class="__cf_email__" data-cfemail="f5868085859a8781b597948d9adb969a98">businessboom01@gmail.com</span></a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="contact-card">
                           <span class="contact-icon">
                           <i class="flaticon-location"></i>
                           </span>
                           <div class="contact-info">
                              <h3>Location</h3>
                              <p>Business Boom,
                                 <br>Media/news company, Alappuzha, Kerala, India
                              </p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="contact-form">
                     <h2 class="section-title mb-40">Send Message</h2>
                     <form class="form-wrap" id="contact-form">
                      <input type="hidden" name="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="text" name="name" placeholder="Your Name*" required >
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <input type="email" name="email"  required placeholder="Email Address*" >
                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="text" name="subject" placeholder="Subject*"  required >

                              </div>
                           </div>
                           <div class="col-md-12">
                              <div class="form-group v1">
                                 <textarea name="message"  placeholder="Your Messages Here" cols="30" rows="10" required ></textarea>
                              </div>

                           </div>
                           <div class="form-group">
                           <div class="form-group d-flex align-items-center">
                                 <div class="form-check">
                                    <label style="margin-left:10px;">I agree to the <a href="<?=BASEURL?>terms_conditions">Terms &amp; Conditions</a> and <a href="<?=BASEURL?>privacy_policy">Privacy Policy</a></label>
                                    <input name="condition" value="agree" class="form-check" type="checkbox" required style="height:20px;width:20px;">
                                 </div>
                              </div>
                              <div id="condition_error" style="color:red; margin-left: 50px;margin-top:-20px;"></div>


                           </div>
                           <div class="col-md-12">
                              <button type="button" class="btn-two" onclick="submitaccessory()">Send Message<i class="flaticon-right-arrow"></i></button>
                              <div id="msgSubmit" class="h3 text-center hidden"></div>
                              <div class="clearfix"></div>
                           </div>
                           <div class="server_response ml-3" style="color:green;font-size: 20px;"></div>
                           <div class="error_response ml-3" style="color:red;font-size: 20px;"></div>
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
   
      <?php include('footer.php')?>
    
<script src="<?=BASEURL?>assets/js/jquery.min.js"></script>
<script src="<?=BASEURL?>assets/js/validation.js"></script>

<script>
   function submitaccessory() {
    var form = $("#contact-form");
    form.validate({
         rules: {
            name: { required: true },
            email: { required: true, email: true },
            subject: { required: true },
            message: { required: true },
            condition: { required: true }
         },
         messages: {
            name: { required: "Please fill name." },
            email: { required: "Please fill email", email: "Please enter a valid email address" },
            subject: { required: "Please fill subject." },
            message: { required: "Please fill message." },
            condition: { required: "Please agree to our terms and conditions." }
         },
         errorPlacement: function(error, element) {
            if (element.attr("name") == "condition") {
                  error.appendTo("#condition_error");
            } else {
                  error.insertAfter(element);
            }
         }
      });


    if (form.valid()) {
        var formData = new FormData(form[0]); // Use FormData to handle file uploads
        formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url: "<?=BASEURL?>contact",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>contact';
                }, 2000);
            },
            error: function() {
                $(".error_response").html("An error occurred during the AJAX request.");
                $(".server_response").empty();
            }
        });
    }
}

   </script>