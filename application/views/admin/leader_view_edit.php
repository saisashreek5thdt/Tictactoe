<!-- Main Content -->
<div class="main-content">
               <section class="section">
                  <div class="row">
					  <!--<div class="col-8 col-md-6 col-lg-6">
						  <div class="card">
							  <div class="card-header">
								 <h4>Our Leadership Team - Image</h4>
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
								 <h4>Our Leadership Team - Create Name</h4>
							  </div>
							  <div class="card-body">
								  <form class="form-inline" action="<?php echo base_url(); ?>leader_name_add" method="post">
                                    <input type="text" class="form-control mb-2 mr-sm-2" name="leader_name" id="inlineFormInputName2" placeholder="Create Leader Name">
                                    <div class="input-group mb-2 mr-sm-2">
                                       <button type="submit"  class="btn btn-primary">Create Leader</button>
                                    </div>
                                 </form>
							  </div> 
						   </div>
					   </div>
                  </div>
				  <div class="row">
					<div class="col-12">
					    <div class="card">
						  <div class="card-header">
							 <h4>Our Leadership Team - Info</h4>
						  </div>
						  <form class="form-inline" action="<?php echo base_url(); ?>dashboard/leader_view_update/<?php echo $leader_view_edit->id; ?>" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" value="<?php echo $leader_view_edit->id ?>">
                          <div class="card-body">
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Leader</label>
								<div class="col-sm-12 col-md-7">
								   <select class="form-control selectric" name="leader" required>
								  
									  <option>Select Leader</option> 
									   <?php foreach ($name as $row) { ?>
									  <option value="<?php echo $row->id ?><?php if($row->id == $leader_view_edit->leader_id) { echo "selected"; } ?>"><?php echo $row->name?></option>
									<?php } ?>
								   </select>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
								<div class="col-sm-12 col-md-7">
								   <input type="text" name="title" class="form-control" value="<?php echo $leader_view_edit->title ?>"  required>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Leader Image</label>
								<div class="col-sm-12 col-md-7">
									<div class="custom-file">
									   <input type="file" class="custom-file-input" id="customFile" name = "leader_image">
                                       <input type="text" class="custom-file-input" id="customFile" value="<?php echo $leader_view_edit->image ?>" name = "old_leader_image">
									   <img class="thumbnail" style="height: 50px; width: 30px;" src="<?php echo base_url(); ?><?php echo $leader_view_edit->image ?>" alt="">
									   <label class="custom-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							 </div> 
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Inner Image </label>
								<div class="col-sm-12 col-md-7">
									<div class="custom-file">
									   <input type="file" class="custom-file-input" id="customFile" name = "leader_image_2">
                                       <input type="text" class="custom-file-input" id="customFile" value="<?php echo $leader_view_edit->inner_image ?>" name = "old_inner_image">
									   <img class="thumbnail" style="height: 50px; width: 30px;" src="<?php echo base_url(); ?><?php echo $leader_view_edit->inner_image ?>" alt="">
									   <label class="custom-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
								<div class="col-sm-12 col-md-7">
								   <textarea class="summernote" name="description" required><?php echo $leader_view_edit->description ?></textarea>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
								<div class="col-sm-12 col-md-7">
								   <button type="submit" class="btn btn-primary">Publish</button>
								</div>
							 </div>
							 </form>
						  </div>
					   </div>
					</div>
				   </div>
				</section>	
			</div>