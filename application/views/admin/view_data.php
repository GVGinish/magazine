<?php include("header.php")?>
<div class="main-content">
<?php if($table == "gallery"){?>
    <div class="page-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Edit Gallery</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <form id="gallery_form" autocomplete="off" class="needs-validation" novalidate>
                <input type="hidden" name="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />
                <input type="hidden" name="id" value="<?= $id_data['id'] ?>" />
                <input type="hidden" name="old_image" value="<?= $id_data['image'] ?>" />


                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label" for="product-title-input">Gallery</label>
                                <div class="text-center">
                                    <img src = "<?=BASEURL?>assets/gallery/<?= $id_data['image'] ?>" width="200px" height="200px">
                                </div>
                                <label class="form-label" for="product-title-input">Click here to change image</label>
                                <input type="file" name="new_image" accept="image/*" class="form-control" placeholder="choose image" >
                            </div>
                            
                            <div class="col-sm-auto">
                                <div>
                                    <button type="button" class="btn btn-success" onclick="edit_gallery()" style="float:right">Change</a>
                                </div>
                            </div>
                            <div class="server_response ml-3" style="color:green;font-size: 20px;"></div>
                            <div class="error_response ml-3" style="color:red;font-size: 20px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
<?php }else if($table == "video"){?>
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Edit Video</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <form id="video_form" autocomplete="off" class="needs-validation" novalidate>
                    <input type="hidden" name="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />
                    <input type="hidden" name="id" value="<?= $id_data['id'] ?>" />
                     <input type="hidden" name="old_video" value="<?= $id_data['video'] ?>" />
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Title</label>
                                    <input type="text" class="form-control" name="title" placeholder="Enter Title Name" value="<?= $id_data['title'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label" for="product-title-input">Video</label>
                                    <div class="text-center">
                                      <iframe src="<?=BASEURL?>assets/video/<?= $id_data['video'] ?>" width="200px" height="200px"></iframe>
                                    </div>
                                    <input type="file" name="new_video" accept="video/*" class="form-control" placeholder="choose video" >
                                </div>
                                <div class="col-sm-auto">
                                    <div>
                                        <button type="button" class="btn btn-success" onclick="edit_video()" style="float:right">Change</a>
                                    </div>
                                </div>
                                <div class="server_response ml-3" style="color:green;font-size: 20px;"></div>
                                <div class="error_response ml-3" style="color:red;font-size: 20px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php }else if($table == "notification"){ ?>
        
<div class="page-content">
   <div class="container-fluid">
        <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Notification</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <form id="addCompanyForm" autocomplete="off" class="needs-validation" novalidate>
            <input type="hidden" name="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />
            <input type="hidden" name="id" value="<?= $id_data['id'] ?>" />
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Title</label>
                              <input type="text" class="form-control" name="title" placeholder="Enter Title Name" value="<?= $id_data['title'] ?>" required>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Description</label>
                              <input type="text" name="description" class="form-control" placeholder="Enter description" value="<?= $id_data['description'] ?>" required>
                           </div>
                           <div class="col-sm-auto">
                              <div>
                                 <button type="button" class="btn btn-success" onclick="submitcompany()" style="float:right">Add</a>
                              </div>
                           </div>
                           <div class="server_response ml-3" style="color:green;font-size: 20px;"></div>
                           <div class="error_response ml-3" style="color:red;font-size: 20px;"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
      </div>
      </div>


        <?php } ?>

    
<?php include("footer.php")?>

<script>
   function edit_gallery() {
    var form = $("#gallery_form");


        var formData = new FormData(form[0]); // Use FormData to handle file uploads
        formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url: "<?=BASEURL?>edit_gallery",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>gallery';
                }, 2000);
            },
            error: function() {
                $(".error_response").html("An error occurred during the AJAX request.");
                $(".server_response").empty();
            }
        });
    
}

   </script>

<script>
   function edit_video() {
    var form = $("#video_form");
    form.validate({
        rules: {
            title: { required: true },
        },
        messages: {
            title: { required: "Please fill in the title." },
        }
    });

    if (form.valid()) {
        var formData = new FormData(form[0]); // Use FormData to handle file uploads
        formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url: "<?=BASEURL?>edit_video",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>video';
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

<script>
   function submitcompany() {
    var form = $("#addCompanyForm");
    form.validate({
        rules: {
            title: { required: true },
            description: { required: true },
        },
        messages: {
            title: { required: "Please fill in the title." },
            description: { required: "Please fill in the description." },
        }
    });

    if (form.valid()) {
        var formData = new FormData(form[0]); // Use FormData to handle file uploads
        formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url: "<?=BASEURL?>edit_notification",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>notification';
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


