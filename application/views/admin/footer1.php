<footer class="main-footer">
               <div class="footer-left">
                  Copyright &copy; <a href="http://5thdt.com/" target="_blank">5TH Dimension Technologies</a> <span id="year"></span>
               </div>
               <div class="footer-right"></div>
            </footer>
         </div>
      </div>
      <!-- General JS Scripts -->
      <script src="<?php echo base_url(); ?>assets/admin/js/app.min.js"></script>
	  <!-- Page Specific JS File -->
	  <script src="<?php echo base_url(); ?>assets/admin/bundles/summernote/summernote-bs4.js"></script>
	  <script src="<?php echo base_url(); ?>assets/admin/bundles/jquery-selectric/jquery.selectric.min.js"></script>
 	  <script src="<?php echo base_url(); ?>assets/admin/bundles/dropzonejs/min/dropzone.min.js"></script>
	  <script src="<?php echo base_url(); ?>assets/admin/js/page/multiple-upload.js"></script>
	  <script src="<?php echo base_url(); ?>assets/admin/bundles/lightgallery/dist/js/lightgallery-all.js"></script>
	  <script src="<?php echo base_url(); ?>assets/admin/js/page/light-gallery.js"></script>
      <!-- Template JS File -->
      <script src="<?php echo base_url(); ?>assets/admin/js/scripts.js"></script>
      <!-- Custom JS File -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.0/jquery.toast.min.js" ></script>
      <script src="<?php echo base_url(); ?>assets/admin/js/custom.js"></script>
   </body>
</html>



<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

<script type="text/javascript">


<?php if($this->session->flashdata('success')){ ?>
    toastr.success("<?php echo $this->session->flashdata('success'); ?>");
<?php }else if($this->session->flashdata('error')){  ?>
    toastr.error("<?php echo $this->session->flashdata('error'); ?>");
<?php }else if($this->session->flashdata('warning')){  ?>
    toastr.warning("<?php echo $this->session->flashdata('warning'); ?>");
<?php }else if($this->session->flashdata('info')){  ?>
    toastr.info("<?php echo $this->session->flashdata('info'); ?>");
<?php } ?>


</script>