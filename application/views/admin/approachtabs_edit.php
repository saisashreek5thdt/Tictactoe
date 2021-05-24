<!-- Main Content --><?php error_reporting(0); ?>
<div class="main-content">
               <section class="section">
               <!-- <?php if ($this->session->flashdata('success')) { ?>

                  <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                     <strong><?php echo $this->session->flashdata('success'); ?></strong>
                  </div>

                  <?php } ?>

                  <?php if ($this->session->flashdata('error')) { ?>

                  <div class="alert alert-danger">
                     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                     <strong><?php echo $this->session->flashdata('error'); ?></strong>
                  </div>

                  <?php } ?> -->
                  <div class="row">
					  <!--<div class="col-8 col-md-6 col-lg-6">
						  <div class="card">
							  <div class="card-header">
								 <h4>Our Approach Tab - Image</h4>
							  </div>
							  <div class="card-body">
								 <div class="section-title">File Browser</div>
								 <div class="custom-file">
									<input type="file" class="custom-file-input" id="customFile">
									<label class="custom-file-label" for="customFile">Choose file</label>
								 </div>
							  </div>
						   </div>
					   </div>-->
                  
                                       <div class="col-4 col-md-6 col-lg-6">
						   <div class="card">
							   <div class="card-header">
								 <h4>Our Approach Tab - Create Name</h4>
							  </div>
							  <div class="card-body">
								  <!-- <form class="form-inline" action="<?php base_url(); ?>approachtabs_add" method="post"> -->
                                 
                              <input type="text" value="<?php //echo $title_id->title ?>"class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" name ="title" placeholder="Create Our Approach Tab Name" required >
                              <div class="input-group mb-2 mr-sm-2">
                                 <button type="submit"class="btn btn-primary">Create Our Approach Tab</button>
                              </div>
                           <!-- </form> -->
							  </div> 
						   </div>
					   </div>
                  </div>
                  
				  <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Our Approach Tab - Info</h4>
                              </div>
                              <form class="form-inline" action="<?php base_url(); ?>dashboard/info_update/<?php echo $info_id->id; ?>" method="post" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?php echo $info_id->id ?>">
                                 <div class="card-body">
                                    <div class="form-group row mb-4">
                                       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Tab</label>
                                       <div class="col-sm-12 col-md-7">
                                          <select class="form-control selectric" name="title_data" required>
                                             <option >Select</option>
                                             <?php foreach ($title as $row) { ?>  
                                             <option  value="<?php echo $row->id?>"<?php if($row->id == $info_id->title_id) { echo "selected"; } ?> > <?php echo $row->title?></option>
                                             <?php } ?>
                                          </select>
                                       </div>
                                    </div>
                                 
                                    <div class="form-group row mb-4">
                                       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                       <div class="col-sm-12 col-md-7">
                                       <input type="text" class="form-control"  value="<?php echo $info_id->title ?>"  name="title" id="">
                                     
                                        
                                       </div>
                                    </div>
                                 <div class="form-group row mb-4">
                                       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
                                       <div class="col-sm-12 col-md-7">
                                          <div class="custom-file">
                                          <input type="text" class="form-control"  value="<?php echo $info_id->icon_image ?>"  name="icon" id="">
                                          <label class="" for=""></label>
                                 </div>
                                       </div>
                                    </div> 
                                    <div class="form-group row mb-4">
                                       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                       <div class="col-sm-12 col-md-7">
                                       <textarea class="form-control" name="text_title"  rows="3"><?php echo $info_id->text_icon ?></textarea>
                                          <!-- <textarea class="summernote" name=""></textarea> -->
                                       </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                       <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                       <div class="col-sm-12 col-md-7">
                                          <button type="submit" class="btn btn-primary">Publish</button>
                                       </div>
                                    </div>
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div> 
                     
               </section>
            </div>



<?php 
  if(($this->session->flashdata('error'))!= ""){
?>
<script type="text/javascript">
$(document).ready(function(){
  $.toast({
    heading: 'Error Message',
    text: '<?php echo $this->session->flashdata('error');?>',
    position: 'top-right',
    loaderBg: '#00ff48',
    icon:'#00ff48',
    hideAfter: '3500',
    stack: 6

  });

});


</script>
<?php 
  }
?></html>
<?php 
  if(($this->session->flashdata('msg'))!= ""){
?>
<script type="text/javascript">
$(document).ready(function(){
  $.toast({
    //	heading: 'Congratulations!!!',
            text: '<?php echo $this->session->flashdata('msg'); ?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6

  });

});


</script>
<?php 
  }
?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


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