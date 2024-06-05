<?php include('header.php')?>

      <div class="breadcrumb-wrap">
         <div class="container">
            <h2 class="breadcrumb-title">Articles</h2>
            <ul class="breadcrumb-menu list-style">
               <li><a href="<?=BASEURL?>index">Home</a></li>
               <li>Articles</li>
            </ul>
         </div>
      </div>
      <div class="sports-wrap ptb-100 mb-40">
         <div class="container">
            <div class="row gx-55 gx-5">
               <div class="col-lg-8">
                  <div class="popular-news-wrap">

                          <?php
                                 $articles=$this->db->order_by('id','DESC')->get('article')->result_array();

                                 $items_per_page = 6;
                                 $total_items = count($articles);
                                 $total_pages = ceil($total_items / $items_per_page);

                                 $current_page = isset($_GET['page']) ? intval($_GET['page']) : 1;
                                 $current_page = max(1, min($current_page, $total_pages));
                                 $start_index = ($current_page - 1) * $items_per_page;
                                 $end_index = min($start_index + $items_per_page, $total_items);

                                 for ($i = $start_index; $i < $end_index; $i++) {
                                    $arti = $articles[$i];
                                 ?>

                              <div class="news-card-five">
                                    <div class="news-card-img">
                                       <img src="<?=BASEURL?>assets/article/<?=$arti['image']?>" alt="Image">
                                    </div>
                                    <div class="news-card-info ">
                                       <h3><a target="_blank" href="#"><?=$arti['title']?></a></h3>
                                       <p><?=$arti['description']?></p>
                                       <ul class="news-metainfo list-style">
                                    
                                          <li><i class="fi fi-rr-calendar-minus"></i><a target="_blank" href="#"><?=date('M Y',strtotime($arti['entry_date']))?></a></li>
                                       </ul>
                                    </div>
                              </div>
                          <?php } ?>
                           </div>
                        
                  <ul class="page-nav list-style text-center mt-20">
                              <?php if ($current_page > 1): ?>
                                 <li><a href="?page=<?= $current_page - 1 ?>"><i class="flaticon-arrow-left"></i></a></li>
                              <?php endif; ?>
                              
                              <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                                 <li>
                                       <a href="?page=<?= $i ?>" tabindex="0" role="button" class="<?= $i == $current_page ? 'gridjs-currentPage' : '' ?>" title="Page <?= $i ?>" aria-label="Page <?= $i ?>">
                                          <?= $i ?>
                                       </a>
                                 </li>
                              <?php endfor; ?>
                              
                              <?php if ($current_page < $total_pages): ?>
                                 <li><a href="?page=<?= $current_page + 1 ?>"><i class="flaticon-arrow-right"></i></a></li>
                              <?php endif; ?>
                           </ul>

               </div>
               <div class="col-lg-4 recent-articles">
                  <div class="sidebar">
                     <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Recent Magazine</h3>
                        <div class="pp-post-wrap">
                        <?php $magazine=$this->db->order_by('id','DESC')->get('magazine')->result_array();
                              foreach($magazine as $key =>$mag){?>
                           <div class="news-card-one">
                              <div class="news-card-img">
                                 <img src="<?=BASEURL?>assets/magazine/<?=$mag['image']?>" alt="Image" style="width:80px;height:80px;">
                              </div>
                              <div class="news-card-info">
                                 <h3><a target="_blank" href="#"><?=$mag['title']?></a></h3>
                                 <p><a href="<?=BASEURL?>assets/magazine_pdf/<?=$mag['pdf']?>" target="_blank">
                                  <img src="<?=BASEURL?>assets/magazine_pdf/default_pdf.png" width="20px" height="20px"><span style="font-size:12px;">View PDF</span>
                                 </a><p>
                                 <ul class="news-metainfo list-style" style="margin-top:-20px;">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a target="_blank" href="#"><?=date('M Y',strtotime($mag['entry_date']))?></a></li>
                                 </ul>
                              </div>
                           </div>
                          <?php } ?>
                        </div>
                     </div>
                     <div class="sidebar-widget recent-videos">
                                 <h3 class="sidebar-widget-title">Recent videos</h3>
                                 <div class="pp-post-wrap">
                                 <?php $video=$this->db->order_by('id','DESC')->limit(5)->get('video')->result_array();
                                       foreach($video as $key =>$vid){ ?>
                                    <div class="news-card-one">
                                       <div class="news-card-img">
                                          <iframe id="videoIframe" src="<?=BASEURL?>assets/video/<?=$vid['video']?>" style="width:80px;height:80px;" class="rounded-circle"></iframe>
                                          <div class="play-button">
                                             <a class="play-now-two" data-fslightbox="" href="<?=BASEURL?>assets/video/<?=$vid['video']?>">
                                             <i class="flaticon-play-button"></i>
                                             </a>
                                          </div>
                                       </div>
                                       <div class="news-card-info ">
                                          <h3><a href="#"><?=$vid['title']?></a></h3>
                                          <ul class="news-metainfo list-style">
                                             <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M Y',strtotime($vid['entry_date']))?></a></li>
                                          </ul>
                                       </div>
                                    </div>
                               <?php } ?>
                                 
                                 </div>
                              </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>

<?php include('footer.php')?>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var iframe = document.getElementById("videoIframe");
    iframe.addEventListener("load", function() {
        var iframeDoc = iframe.contentDocument || iframe.contentWindow.document;
        var video = iframeDoc.querySelector("video");
        if (video) {
            video.muted = true;
        }
    });
});
</script>