<?php include("header.php")?>

<div class="main-content">
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
               <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-body">
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Title</label>
                              <input type="text" class="form-control" name="title" placeholder="Enter Title Name" required>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Description</label>
                              <input type="text" name="description" class="form-control" placeholder="Enter description" required>
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
      <div class="row">
         <div class="col-lg-12">
               <div class="card">
                  <div class="card-header">
                     <h4 class="card-title mb-0">Notification List</h4>
                  </div><!-- end card header -->

                  <div class="card-body">
                     <div class="listjs-table" id="customerList">
                           <div class="row g-4 mb-3">
                              <div class="col-sm">
                                 <div class="d-flex justify-content-sm-end">
                                       <div class="search-box ms-2">
                                          <input type="text" class="form-control search" placeholder="Search...">
                                          <i class="ri-search-line search-icon"></i>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           <div class="table-responsive table-card mt-3 mb-1">
                              <table class="table align-middle table-nowrap" id="customerTable">
                                 <thead class="table-light">
                                    <tr>
                                       <th scope="col text-center" style="width: 50px;">#</th>
                                       <th class="sort text-center" data-sort="customer_name">Title</th>
                                       <th class="sort text-center" data-sort="customer_name">Description</th>
                                       <th class="sort text-center" data-sort="action">Action</th>
                                    </tr>
                                 </thead>
                                 <tbody class="list form-check-all">
                                    <?php $all_data=$this->db->order_by('id','DESC')->get('notification')->result_array();
                                       $c=1;
                                       foreach($all_data as $key =>$all){?>
                                    <tr>
                                       <th scope="row text-center"><?=$c++?></th>
                                       <td class="id text-center" style="display:none;"><a href="javascript:void(0);" class="fw-medium link-primary">#VZ2101</a></td>
                                       <td class="customer_name text-center"><?=$all['title']?></td>
                                       <td class="customer_name text-center"><p><?=$all['description']?></p></td>
                                       <td class="text-center">
                                          <div class="d-flex gap-2 justify-content-center">
                                             <div class="edit">
                                                <a href="<?= BASEURL . 'view_data/' . bin2hex($all['id']).'/notification/view_data' ?>" class="btn btn-sm btn-success edit-item-btn" >Edit</a>
                                             </div>
                                             <div class="remove">
                                                <button class="btn btn-sm btn-danger remove-list" href="<?= BASEURL . 'delete_data/' . bin2hex($all['id']) . '/notification/notification' ?>" data-bs-toggle="modal" data-bs-target="#deleteRecordModal">Remove</button>
                                             </div>
                                          </div>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                 </tbody>
                              </table>
                              <div class="noresult" style="display: none">
                                 <div class="text-center">
                                       <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px"></lord-icon>
                                       <h5 class="mt-2">Sorry! No Result Found</h5>
                                       <p class="text-muted mb-0">We've searched more than <?=$this->db->count_all_results('gallery')+0?> Image We did not find any image for you search.</p>
                                 </div>
                              </div>
                           </div>

                           <div class="d-flex justify-content-end">
                              <div class="pagination-wrap hstack gap-2">
                                 <a class="page-item pagination-prev disabled" href="javascript:void(0);">
                                       Previous
                                 </a>
                                 <ul class="pagination listjs-pagination mb-0"></ul>
                                 <a class="page-item pagination-next" href="javascript:void(0);">
                                       Next
                                 </a>
                              </div>
                           </div>
                     </div>
                  </div><!-- end card -->
               </div>
               <!-- end col -->
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
            url: "<?=BASEURL?>notification",
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

