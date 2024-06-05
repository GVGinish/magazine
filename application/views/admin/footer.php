<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Garggy.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                  Developed by Relaxplzz Technologies
                </div>
            </div>
        </div>
    </div>
</footer>
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>

<script src="<?=BASEURL?>assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?=BASEURL?>assets/libs/simplebar/simplebar.min.js"></script>
<script src="<?=BASEURL?>assets/libs/node-waves/waves.min.js"></script>
<script src="<?=BASEURL?>assets/libs/feather-icons/feather.min.js"></script>
<script src="<?=BASEURL?>assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<!-- <script src="<?=BASEURL?>assets/js/plugins.js"></script> -->
<!-- password-addon init -->
<script src="<?=BASEURL?>assets/js/pages/password-addon.init.js"></script>
<script src="<?=BASEURL?>assets/libs/dropzone/dropzone-min.js"></script>
<script src="<?=BASEURL?>assets/libs/cleave.js/cleave.min.js"></script>
<!-- <script src="<?=BASEURL?>assets/js/pages/invoicecreate.init.js"></script> -->
<script src="<?=BASEURL?>assets/libs/sweetalert2/sweetalert2.min.js"></script>
<script src="<?=BASEURL?>assets/js/app.js"></script>
<script src="<?=BASEURL?>assets/libs/multi.js/multi.min.js"></script>
<!-- <script src="<?=BASEURL?>assets/libs/%40tarekraafat/autocomplete.js/autoComplete.min.js"></script> -->
<!-- <script src="<?=BASEURL?>assets/js/pages/form-advanced.init.js"></script> -->
<script src="<?=BASEURL?>assets/js/pages/form-input-spin.init.js"></script>
<!-- <script src="<?=BASEURL?>assets/js/pages/flag-input.init.js"></script> -->
<script src="<?=BASEURL?>assets/libs/list.js/list.min.js"></script>
<script src="<?=BASEURL?>assets/libs/list.pagination.js/list.pagination.min.js"></script>
<script src="<?=BASEURL?>assets/libs/nouislider/nouislider.min.js"></script>
<script src="<?=BASEURL?>assets/libs/wnumb/wNumb.min.js"></script>
<!-- jQuery -->
<!-- <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script> -->
<script src="<?=BASEURL?>assets/js/pages/listjs.init.js"></script>

<script src="<?=BASEURL?>assets/js/jquery.min.js"></script>
<script src="<?=BASEURL?>assets/js/validation.js"></script>





<!-- <script src="https://unpkg.com/bootstrap-table@1.22.2/dist/bootstrap-table.min.js"></script> -->
<script>
   $(document).ready(function () {
     $('.alert').toast('show');
       setInterval(function () {
               $('.alert').toast('hide');
       }, 2000);
       <?php 
      // Clear flash messages after displaying them
      $this->session->set_flashdata('error_message', '');
      $this->session->set_flashdata('success_message', '');
      ?>
   });
</script>
<!-- <script src="../../../../unpkg.com/gridjs%406.0.6/plugins/selection/dist/selection.umd.js"></script> -->

<script>
   $(document).ready(function () {
       $(".remove-list").click(function (e) {
           e.preventDefault(); // Prevent the default link behavior
           var deleteUrl = $(this).attr("href");
           var itemId = $(this).data("id");
           // Display SweetAlert confirmation dialog
           Swal.fire({
               title: 'Delete Item?',
               text: 'Are you sure you want to delete this item?',
               icon: 'warning',
               showCancelButton: true,
               confirmButtonColor: '#3085d6',
               cancelButtonColor: '#d33',
               confirmButtonText: 'Yes, delete it!',
               cancelButtonText: 'Cancel'
           }).then((result) => {
               if (result.isConfirmed) {
                   // Redirect to the delete URL if confirmed
                   window.location.href = deleteUrl;
               }
           });
       });
   });
</script>


</body>
</html>

        
      