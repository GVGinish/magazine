<?php include('header.php')?>

      <div class="breadcrumb-wrap">
         <div class="container">
            <h2 class="breadcrumb-title">Gallery</h2>
            <ul class="breadcrumb-menu list-style">
               <li><a href="<?=BASEURL?>index">Home</a></li>
               <li>Gallery</li>
            </ul>
         </div>
      </div>
      <div class="editor-news-three pt-100 pb-75">
         <div class="container">
            <div class="">
               <div class="row gx-4">
                  <?php $gallery =$this->db->order_by('id','DESC')->limit(6)->get('gallery')->result_array();
                  foreach($gallery as $key =>$gal){?>
                  <div class="col-xl-6">
                     <div class="news-card-four">
                        <img src="<?=BASEURL?>assets/gallery/<?=$gal['image']?>" alt="Image">
                        <a class="play-now" data-fslightbox href="assets/gallery/<?=$gal['image']?>">
                        <i class="fi fi-rr-plus"></i>
                        <span class="ripple"></span>
                        </a>
                     </div>
                  </div>
                 <?php } ?>
               </div>
            </div>
         </div>
      </div>
      <?php include('footer.php')?>
