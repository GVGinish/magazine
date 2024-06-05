<?php include("header.php")?>

<div class="main-content">
<div class="page-content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
               <h4 class="mb-sm-0">Magazine</h4>
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
                              <label class="form-label" for="product-title-input">Magazine Photo</label>
                              <input type="file" name="image" accept="image/*" class="form-control" placeholder="choose image" required>
                           </div>
                           <div class="mb-3">
                              <label class="form-label" for="product-title-input">Upload Magazine PDF</label>
                              <input type="file" name="pdf" accept="application/pdf,.pdf" class="form-control" placeholder="Upload PDF" required>
                           </div>
                           <div class="mb-3">
                              <input class="form-check-input" type="checkbox" id="formCheck6" name="show" value="yes">
                              <label class="form-label" for="product-title-input">Click to show in index </label>
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
      <div class="card">
         <div class="card-body">
            <div class="tab-content text-muted">
               <div class="tab-pane active" id="productnav-all" role="tabpanel">
                  <div id="table-product-list-all" class="table-card gridjs-border-none">
                     <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
                        <div class="gridjs-wrapper" style="height: auto;">
                           <div class="table-responsive">
                              <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                                 <thead class="gridjs-thead">
                                    <tr class="gridjs-tr">
                                       <th data-column-id="#" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width:50px;">
                                          <div class="gridjs-th-content">#</div>
                                       </th>
                                       <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width:180px;">
                                          <div class="gridjs-th-content">Title</div>
                                       </th>
                                       <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width:180px;">
                                          <div class="gridjs-th-content">Image</div>
                                       </th>
                                       <th data-column-id="product" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width:180px;">
                                          <div class="gridjs-th-content">PDF</div>
                                       </th>
                                       <th data-column-id="action" class="gridjs-th gridjs-th-sort text-muted" tabindex="0" style="width: 80px;">
                                          <div class="gridjs-th-content">Action</div>
                                       </th>
                                    </tr>
                                 </thead>
                                 <tbody class="gridjs-tbody">
                                    <?php $all_data=$this->db->order_by('id','DESC')->get('magazine')->result_array();
                                    $c=1;
                                    foreach($all_data as $key =>$all){?>
                                    <tr class="gridjs-tr">
                                       <td data-column-id="#" class="gridjs-td"><?=$c++?></td>
                                       <td data-column-id="product" class="gridjs-td">
                                          <span>
                                             <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 me-3"></div>
                                                <div class="flex-grow-1">
                                                   <p class="text-muted mb-0"><?=$all['title']?></p>
                                                </div>
                                             </div>
                                          </span>
                                       </td>
                                       <td data-column-id="price" class="gridjs-td">
                                          <span><img src="<?=BASEURL?>assets/magazine/<?=$all['image']?>" width="30px" height="30px"> </span>
                                      </td>
                                      <td data-column-id="price" class="gridjs-td">
                                          <span><a href="<?=BASEURL?>assets/magazine_pdf/<?=$all['pdf']?>" target="_blank"><img src="<?=BASEURL?>assets/magazine_pdf/default_pdf.png" width="30px" height="30px"> </span>
                                      </td>
                                       <td data-column-id="action" class="gridjs-td">
                                          <span>
                                             <div class="dropdown">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                   <i class="ri-more-fill"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                               
                                                   <li><a class="dropdown-item" href="<?= BASEURL . 'view_data/' . bin2hex($all['id']) .'/magazine/edit_magazine'?>"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                   <li class="dropdown-divider"></li>
                                                   <li>
                                                      <a class="dropdown-item remove-list" href="<?= BASEURL . 'delete_data/' . bin2hex($all['id']) . '/magazine/add_magazine' ?>" data-id="1" data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                         <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                      </a>
                                                   </li>
                                                </ul>
                                             </div>
                                          </span>
                                       </td>
                                    </tr>
                                 <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                     <div id="gridjs-temp" class="gridjs-temp"></div>
                  </div>
               </div>
            </div>
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
            image: { required: true },
            pdf: { required: true },

        },
        messages: {
            title: { required: "Please fill in the title." },
            image: { required: "Please choose a image." },
            pdf: { required: "Please choose a PDF." },

        }
    });

    if (form.valid()) {
        var formData = new FormData(form[0]); // Use FormData to handle file uploads
        formData.append('<?= $this->security->get_csrf_token_name(); ?>', '<?= $this->security->get_csrf_hash(); ?>');
        
        $.ajax({
            url: "<?=BASEURL?>add_magazine",
            type: "POST",
            data: formData,
            contentType: false, // Set contentType to false for FormData
            processData: false, // Set processData to false for FormData
            success: function(response) {
                $(".server_response").html(response);
                $(".error_response").empty();

                setTimeout(function() {
                    $(".server_response").empty();
                    window.location = '<?=BASEURL?>add_magazine';
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

