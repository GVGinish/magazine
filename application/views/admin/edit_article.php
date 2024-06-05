<?php include("header.php")?>

<div class="main-content">
<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Article</h4>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-xl-12">
            <form id="addCompanyForm" autocomplete="off" class="needs-validation" novalidate>
            <input type="hidden" name="csrf_token" value="<?= $this->security->get_csrf_hash(); ?>" />
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                        <input type="hidden" name="id" value="<?=$id_data['id']?>">
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Title</label>
                              <input type="text" class="form-control" name="title" value="<?=$id_data['title']?>" placeholder="Enter Title Name" required>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Article Photo</label>
                              <input type="file" name="image" accept="image/*" class="form-control" placeholder="choose image" >
                           </div>

                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Old Article Photo</label>
                              <input type="hidden" name="old_image"  value="<?=$id_data['image']?>" class="form-control" placeholder="choose image" required>
                                <img src="<?=BASEURL .'assets/article/'. $id_data['image']?>" width="80px" height="80px">
                            </div>
                            <div class="mb-3">
                              <label class="form-label" for="product-title-input">Description</label>
                              <textarea type="text" class="form-control" name="description" placeholder="Enter magazine description" required><?=$id_data['description']?></textarea>
                           </div>
                           <div class="mb-3">
                              <input class="form-check-input" type="checkbox" id="formCheck6" <?=($id_data['show'] == 'show') ? 'checked' : ''?> name="show" value="yes">
                              <label class="form-label" for="product-title-input">Click to show in index </label>
                           </div>
                           
                           <div class="col-sm-auto">
                              <div>
                                 <button type="button" class="btn btn-success" onclick="submitcompany()" style="float:right">Update</a>
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
<?php include("footer.php")?>

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
            url: "<?=BASEURL?>edit_article",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>edit_article';
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

