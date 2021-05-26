<!-- Main Content -->
<div class="main-content">
               <section class="section">
                  <div class="row">
					  <div class="col-8 col-md-6 col-lg-6">
							<form method="post" action="<?php echo base_url(); ?>dashboard/slider_update/<?php echo $slider_edit->id ?>" enctype="multipart/form-data">
                            <input type="hidden" class="custom-file-input" value="<?php echo $slider_edit->id ?>"name="id" id="customFile">
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
                                            <input type="file" class="custom-file-input" value="<?php echo $slider_edit->image ?> name="old_slider_image" id="customFile">
											<label class="custom-file-label" for="customFile">Choose file</label>
                                            <img src="<?php base_url(); ?><?php echo $slider_edit->image  ?>" class="ls-bg"  alt="Slide background"/>
										</div>
										<br /> 
										<div class="form-group" style="padding-top: 2rem !important;"> 
											<div class="input-group mb-2 mr-sm-2">
												<button type="submit" class="btn btn-primary btn-sm">Add Image</button>
											</div>
										</div>
									</div>
								</div>
							</form>
					   </div>


					   



                  </div>
				 
				   
				
               </section>
            </div>