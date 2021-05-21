<!-- Main Content -->
            <div class="main-content">
               <section class="section">
                  <div class="row">
					  <div class="col-8 col-md-6 col-lg-6">
							<form method="post" action="<?php echo base_url(); ?>add" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<h4>Slider</h4>
									</div>
									<div class="card-body">
										<!-- <div class="section-title mt-0">Select</div>
										<div class="form-group">
											<label>Choose One</label>
											<select class="custom-select">
											<option selected>Select Slider Menu</option>
											<option value="1">Home</option>
											<option value="2">Pages</option>
											</select>
										</div> -->
										<div class="section-title">File Browser</div>
										<div class="custom-file">
											<input type="file" class="custom-file-input" name="slider_image" id="customFile">
											<label class="custom-file-label" for="customFile">Choose file</label>
										</div>
										<br /> 
										<div class="form-group" style="padding-top: 2rem !important;"> 
											<div class="input-group mb-2 mr-sm-2">
												<button type="submit" class="btn btn-primary btn-sm">Add Images</button>
											</div>
										</div>
									</div>
								</div>
							</form>
					   </div>


					   



                  </div>
				  <div class="row">
					    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Slider Images</h4>
                              </div>
                                <div class="card-body">
							         <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"> <i class="fas fa-pencil-alt"></i>
									</a> 
									<a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a> 
                                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
										<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<a href="<?php base_url(); ?>assets/admin/img/image-gallery/1.png" data-sub-html="Demo Description">
										<img class="img-responsive thumbnail" src="<?php base_url(); ?>assets/admin/img/image-gallery/thumb/thumb-1.png" alt="">
										</a>
										</div>
										<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<a href="<?php base_url(); ?>assets/admin/img/image-gallery/2.png" data-sub-html="Demo Description">
										<img class="img-responsive thumbnail" src="<?php base_url(); ?>assets/admin/img/image-gallery/thumb/thumb-2.png" alt="">
										</a>
										</div> -->
										<!-- <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
										<a href="<?php base_url(); ?>assets/admin/img/image-gallery/3.png" data-sub-html="Demo Description">
										<img class="img-responsive thumbnail" src="<?php base_url(); ?>assets/admin/img/image-gallery/thumb/thumb-3.png" alt="">
										</a>
										</div> -->
                                    </div>
                                </div>
                           </div>
                        </div>
				   </div> 
               </section>
            </div>