<?php include('header.php')?>

      <div class="breadcrumb-wrap">
         <div class="container">
            <h2 class="breadcrumb-title">Noti</h2>
            <ul class="breadcrumb-menu list-style">
               <li><a href="<?=BASEURL?>index">Home</a></li>
               <li><a href="<?=BASEURL?>site_notification">Notifications</a></li>
               <li>Notifications Details</li>

            </ul>
         </div>
      </div>
      <div class="container ptb-100">
         <div class="row">

            <div class="col-xxl-10 offset-xxl-1">
               <div class="contact-wrap">
                  <div class="row justify-content-center pb-75">
                     <div class="col-md-12 details">
                        <h4><?=$detail['title']?></h4>
                        <p> <?=$detail['description']?></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('footer.php')?>
