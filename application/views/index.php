<?php include('header.php')?>

      <!--Mobile Responsive Navbar End-->
      <div class="modal fade searchModal" id="searchModal" data-bs-backdrop="static" data-bs-keyboard="false"
         tabindex="-1" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <form>
                  <input type="text" class="form-control" placeholder="Search here....">
                  <button type="submit"><i class="fi fi-rr-search"></i></button>
               </form>
               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><i
                  class="ri-close-line"></i></button>
            </div>
         </div>
      </div>
      <!--Banner Start-->
      <div class="container">
         <div class="section-title-two mb-40">
            <div class="row align-items-center">
               <div class="col-md-7 " style="margin-top: 50px;">
                  <h2>Articles</h2>
               </div>
            </div>
         </div>
         <div class="row featured-news-three">
         <?php $first_articles=$this->db->order_by('id','DESC')->limit(1)->get('article')->result_array();
               foreach($first_articles as $key =>$fir){ ?>
            <div class="col-xl-6">
               <div class="news-card-eleven">
                  <div class="news-card-img banner-img">
                     <img src="<?=BASEURL?>assets/article/<?=$fir['image']?>" alt="Image">
                  </div>
                  <div class="news-card-info">
                     <h3><a href="business-details.html"><?=$fir['title']?></a>
                     </h3>
                     <p><?=$fir['description']?></p>
                     <ul class="news-metainfo list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M d, Y',strtotime($fir['entry_date']))?></a></li>
                     </ul>
                  </div>
               </div>
            </div>
            <?php } ?>

            <div class="col-xl-6">
  
               <div class="row">
               <?php $bal_articles = $this->db->order_by('id', 'DESC')->limit(5, 1)->get('article')->result_array();

               foreach($bal_articles as $key =>$bal){ ?>
                  <div class="col-md-6">
                     <div class="news-card-thirteen">
                        <div class="news-card-img">
                           <img src="<?=BASEURL?>assets/article/<?=$bal['image']?>" alt="Iamge">
                        </div>
                        <div class="news-card-info">
                           <h3><a href="#"><?=$bal['title']?></a></h3>
                           <ul class="news-metainfo list-style">
                              <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M d, Y',strtotime($bal['entry_date']))?></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
              
            <?php } ?>

               </div>

            </div>
         </div>
      </div>
      <!--Banner End-->
      <!--Latest Notification Start-->
      <div class="container ptb-30">
         <div class="section-title-two ">
            <div class="row align-items-center">
               <div class="col-md-7 " style="margin-top: 50px;">
                  <h2 style="font-size: 20px;">Latest Notification</h2>
               </div>
            </div>
         </div>
         <div class="col-md-12">
         <?php $notification = $this->db->order_by('id', 'DESC')->limit(3)->get('notification')->result_array();
           foreach($notification as $key =>$noti){ ?>
            <div class="notification notification-info" style="margin-bottom: 0px;">
               <div class="notification-header"><?=$noti['title']?>:</div>
               <div class="notification-content">
                  <p>Details: <?=$noti['description']?></p>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
      <!--Latest Notification End-->
      <!--Latest Magazine Start-->
      <div class="container ptb-100">
         <div class="section-title-two mb-40">
            <div class="row align-items-center">
               <div class="col-md-7 " style="margin-top: 26px;">
                  <h2>Latest Magazine</h2>
               </div>
            </div>
         </div>
         <div class="popular-news-slider swiper">
            <div class="swiper-wrapper">
               <?php $magazine=$this->db->order_by('id','DESC')->limit(3)->get('magazine')->result_array();
               foreach($magazine as $key =>$mag){?>
               <div class="swiper-slide pp-news-card">
                  <a target="_blank" href="<?=BASEURL?>assets/magazine/<?=$mag['image']?>">
                  <img src="<?=BASEURL?>assets/magazine/<?=$mag['image']?>" alt="Image">
                  </a>
                  <div class="pp-news-info">
                     <ul class="news-metainfo list-style">
                        <li><i class="fi fi-rr-calendar-minus"></i><a target="_blank" href="<?=BASEURL?>assets/magazine/<?=$mag['image']?>"><?=date('M Y',strtotime($mag['entry_date']))." ".$mag['title']?></a></li>
                     </ul>
                  </div>
               </div>
        <?php } ?>
            </div>
         </div>
      </div>
      <!--Latest Magazine End-->
      <!--Social Media Start-->
      <div class="container ">
         <div class="section-title-two ">
            <div class="row">
               <div class="col-md-12 " style="margin-top: 50px;">
                  <h2 style="font-size: 20px;">Join Our Social Media</h2>
               </div>
            </div>
         </div>
         <ul class="social-widget-two list-style ">
            <li>
               <span><a href="https://www.facebook.com/businessboomindia?mibextid=ZbWKwL" target="_blank"><img src="<?=BASEURL?>assets1/img/icons/facebook.svg"
                  alt="Image"></a></span>
               <a href="https://www.facebook.com/businessboomindia?mibextid=ZbWKwL" target="_blank" class="social-link">
                  Facebook
                  <p>28 Likes</p>
               </a>
            </li>
            <li>
               <span><a href="https://www.youtube.com/@businessboomglobal2871" target="_blank"><img src="<?=BASEURL?>assets1/img/icons/youtube.svg"
                  alt="Image"></a></span>
               <a href="https://www.youtube.com/@businessboomglobal2871" target="_blank" class="social-link">
                  Youtube
                  <p>19k Subscriber</p>
               </a>
            </li>
         </ul>
      </div>
      <!--Social Media End-->
      <div class="editor-news-three pt-100 pb-75">
         <div class="container">
            <div class="section-title-two mb-40">
               <div class="row align-items-center">
                  <div class="col-md-7">
                     <h2>Articles</h2>
                  </div>
                  <div class="col-md-5 text-md-end">
                     <a href="<?=BASEURL?>articles" class="link-three">View All Articles<span><img
                        src="<?=BASEURL?>assets1/img/icons/arrow-right.svg" alt="Iamge"></span></a>
                  </div>
               </div>
            </div>
            <div class="row justify-content-center">
            <?php $articles=$this->db->order_by('id','DESC')->get('article')->result_array();
               foreach($articles as $key =>$arti){ ?>
               <div class="col-xl-4 col-lg-6 col-md-6">
                  <div class="news-card-thirteen">
                     <div class="news-card-img">
                        <img src="<?=BASEURL?>assets/article/<?=$arti['image']?>" alt="Iamge">
                     </div>
                     <div class="news-card-info">
                        <h3><a href="<?=BASEURL?>business"><?=$arti['title']?></a>
                        </h3>
                        <ul class="news-metainfo list-style">
                           <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M Y',strtotime($arti['entry_date']))?></a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
           <?php } ?>
            </div>
         </div>
      </div>
      <!--Video Start-->
      <div class="selected-news-three pb-100">
         <div class="container">
            <div class="section-title-two mb-40">
               <div class="row align-items-center">
                  <div class="col-md-6">
                     <h2>Videos</h2>
                  </div>
               </div>
            </div>
            <div class="tab-content selected-news-content">
        
               <div class="tab-pane fade active show" id="tab_2" role="tabpanel">
                  <div class="row justify-content-center">
                  <?php $video=$this->db->order_by('id','DESC')->limit(6)->get('video')->result_array();
                      foreach($video as $key =>$vid){ ?>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <video src="<?=BASEURL?>assets/video/<?=$vid['video']?>" alt="video" width="250px" height="250px"></video>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html"><?=$vid['title']?></a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M Y',strtotime($vid['entry_date']))?></a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
               <div class="tab-pane fade" id="tab_3" role="tabpanel">
                  <div class="row justify-content-center">
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/politics/politics-9.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Ex-fifa Officials latini Acquitted Of Fraud
                                 Charges</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/politics/politics-10.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">How Is Technology Changing Treatment Of
                                 Injuries?</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/news-94.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Meet The Final Three Teams To Qualify For The
                                 2023 World Cup</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/news-95.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Cyclist Out Of Giro D'italia After Injuring Eye
                                 With Prosecco Cork</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/politics/politics-7.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">The Political Landscape: Navigating Power And
                                 Policy</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/politics/politics-8.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Navigating the Political Sphere: Insights and
                                 Analysis</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/news-96.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Qatar World Cup: Fans Must Show Negative
                                 Covid-19 Result</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div class="col-xxl-3 col-xl-4 col-lg-6 col-md-6">
                        <div class="news-card-thirteen">
                           <div class="news-card-img">
                              <img src="<?=BASEURL?>assets1/img/news/news-97.webp" alt="Iamge">
                              <a href="business.html" class="news-cat">Business</a>
                           </div>
                           <div class="news-card-info">
                              <h3><a href="business-details.html">Joe Gibbs Discusses Ty Gibbs Incident At
                                 Martinsville</a>
                              </h3>
                              <ul class="news-metainfo list-style">
                                 <li><i class="fi fi-rr-calendar-minus"></i><a href="#">Feb 27,
                                    2024</a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <a href="<?=BASEURL?>featured_video" class="btn-three d-block w-100">View All Videos<i
               class="flaticon-arrow-right"></i></a>
         </div>
      </div>
      <!--Video End-->
      <div class="popular-news-three pb-100">
         <div class="container">
            <div class="row gx-5">
               <div class="col-lg-8">
                  <div class="section-title-two mb-40">
                     <div class="row align-items-center">
                        <div class="col-md-7">
                           <h2>Most Popular</h2>
                        </div>
                        <div class="col-md-5 text-md-end">
                           <a href="<?=BASEURL?>articles" class="link-three">View All News<span><img
                              src="<?=BASEURL?>assets1/img/icons/arrow-right.svg" alt="Iamge"></span></a>
                        </div>
                     </div>
                  </div>
                  <div class="popular-news-wrap">
                     <?php 
                     $popular_articles=$this->db->order_by('id','DESC')->where('show','show')->get('article')->result_array();                     
                     foreach($popular_articles as $key =>$pop){?>
                     <div class="news-card-five">
                        <div class="news-card-img">
                           <img src="<?=BASEURL?>assets/article/<?=$pop['image']?>" alt="Image">
                        </div>
                        <div class="news-card-info">
                           <h3><a href="business-details.html"><?=$pop['title']?></a>
                           </h3>
                           <p><?=$pop['description']?></p>
                           <ul class="news-metainfo list-style">
                   
                              <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M Y',strtotime($pop['entry_date']))?></a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <?php } ?>
                  </div>
               </div>
               <div class="col-lg-4">
                  <div class="sidebar">
                     <div class="sidebar-widget">
                        <h3 class="sidebar-widget-title">Our Magazines</h3>
                        <div class="pp-post-wrap-two">
                        <?php 
                              $popular_magazine=$this->db->order_by('id','DESC')->limit(4)->where('show','show')->get('magazine')->result_array();                     
                              foreach($popular_magazine as $key =>$pop_mag){?>
                           <div class="news-card-one">
                              <div class="news-card-img">
                                 <img src="<?=BASEURL?>assets/magazine/<?=$pop_mag['image']?>" alt="Image" style="height: 80px;">
                              </div>
                              <div class="news-card-info">
                                 <h3><a href="#"><?=$pop_mag['title']?></a></h3>
                                 <p><a href="<?=BASEURL?>assets/magazine_pdf/<?=$pop_mag['pdf']?>" target="_blank">
                                  <img src="<?=BASEURL?>assets/magazine_pdf/default_pdf.png" width="20px" height="20px"><span style="font-size:12px;">View PDF</span>
                                 </a><p>
                                 <ul class="news-metainfo list-style">
                                    <li><i class="fi fi-rr-calendar-minus"></i><a href="#"><?=date('M Y',strtotime($pop_mag['entry_date']))?></a>
                                    </li>
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
      <?php include('footer.php')?>
