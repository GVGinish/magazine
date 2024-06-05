<?php include('header.php')?>

      <div class="breadcrumb-wrap">
         <div class="container">
            <h2 class="breadcrumb-title">Notifications</h2>
            <ul class="breadcrumb-menu list-style">
               <li><a href="<?=BASEURL?>index">Home</a></li>
               <li>Notifications</li>
            </ul>
         </div>
      </div>
      <div class="container ptb-100">
         <div class="row">
            <div class="col-xxl-10 offset-xxl-1">
               <div class="contact-wrap">
                  <div class="row justify-content-center pb-75">
                     <div class="col-md-12">
                      <?php $notification =$this->db->order_by('id','DESC')->get('notification')->result_array(); 
                            foreach($notification as $key =>$noti){?>
                        <div class="notification notification-success">
                           <div class="notification-header">Title: <?=$noti['title']?></div>
                           <div class="notification-content">
                              <p>Details: <?=$noti['description']?></p>
                              <a href="<?=BASEURL.'notification_detail/'.bin2hex($noti['id'])?>" class="btn btn-primary">Add More Details</a>
                           </div>
                        </div>
                   <?php } ?>
                       
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <?php include('footer.php')?>
