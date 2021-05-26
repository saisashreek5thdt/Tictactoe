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
						  <form class="form-inline" action="<?php echo base_url(); ?>leader_add" method="post" enctype="multipart/form-data">
						    <div class="card-body">
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Select Leader</label>
								<div class="col-sm-12 col-md-7">
								   <select class="form-control selectric" name="leader" required>
								  
									  <option>Select Leader</option> 
									   <?php foreach ($name as $row) { ?>
									  <option value="<?php echo $row->id ?>"><?php echo $row->name?></option>
									<?php } ?>
								   </select>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
								<div class="col-sm-12 col-md-7">
								   <input type="text" name="title" class="form-control" required>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Leader Image</label>
								<div class="col-sm-12 col-md-7">
									<div class="custom-file">
									   <input type="file" class="custom-file-input" id="customFile" name = "leader_image">
									  
									   <label class="custom-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							 </div> 
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Inner Image </label>
								<div class="col-sm-12 col-md-7">
									<div class="custom-file">
									   <input type="file" class="custom-file-input" id="customFile" name = "leader_image_2">
									   <label class="custom-file-label" for="customFile">Choose file</label>
									</div>
								</div>
							 </div>
							 <div class="form-group row mb-4">
								<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
								<div class="col-sm-12 col-md-7">
								   <textarea class="summernote" name="description" required></textarea>
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
				   <div class="row">
					  
					   <div class="col-12 col-sm-6 col-md-6 col-lg-3">
					      <?php foreach ($leader as $leaders){?>
						   <article class="article article-style-b">
							  <div class="article-header">
								 <div class="article-image" data-background="<?php echo base_url(); ?><?php echo $leaders->image; ?>" style="background-image: url('<?php echo base_url(); ?>assets/web/img/blog/img10.png');">
								 </div>
							  </div>
							  <div class="article-details">
								 <div class="article-title">
									<h2><a href="#"><?php echo $leaders->title; ?></a></h2>
								 </div>
								 <p><?php echo substr($leaders->description,0,60); ?>
								 </p>
								 <div class="article-cta">
									<a href="<?php base_url(); ?>dashboard/leader_view/<?php echo $leaders->id ?>" >Read More <i class="fas fa-chevron-right"></i></a>
								 </div>
							  </div>
						   </article>
						   <?php } ?>
						</div>
					
						<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3">
						   <article class="article article-style-b">
							  <div class="article-header">
								 <div class="article-image" data-background="<?php base_url(); ?>assets/web/img/blog/img15.png">
								 </div>
							  </div>
							  <div class="article-details">
								 <div class="article-title">
									<h2><a href="#">The oddest place you will find photo studios</a></h2>
								 </div>
								 <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
									hath first signs.
								 </p>
								 <div class="article-cta">
									<a href="<?php base_url(); ?>leader_view">Read More <i class="fas fa-chevron-right"></i></a>
								 </div>
							  </div>
						   </article>
						</div> -->
						<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3">
						   <article class="article article-style-b">
							  <div class="article-header">
								 <div class="article-image" data-background="<?php base_url(); ?>assets/web/img/blog/img07.png">
								 </div>
							  </div>
							  <div class="article-details">
								 <div class="article-title">
									<h2><a href="#">The oddest place you will find photo studios</a></h2>
								 </div>
								 <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
									hath first signs.
								 </p>
								 <div class="article-cta">
									<a href="<?php base_url(); ?>leader_view">Read More <i class="fas fa-chevron-right"></i></a>
								 </div>
							  </div>
						   </article>
						</div> -->
						<!-- <div class="col-12 col-sm-6 col-md-6 col-lg-3">
						   <article class="article article-style-b">
							  <div class="article-header">
								 <div class="article-image" data-background="<?php base_url(); ?>assets/web/img/blog/img02.png">
								 </div>
							  </div>
							  <div class="article-details">
								 <div class="article-title">
									<h2><a href="#">The oddest place you will find photo studios</a></h2>
								 </div>
								 <p>A don't spirit gathered two under, lights said. May Multiply seasons you'll spirit tree morning
									hath first signs.
								 </p>
								 <div class="article-cta">
									<a href="<?php base_url(); ?>leader_view">Read More <i class="fas fa-chevron-right"></i></a>
								 </div>
							  </div>
						   </article>
						</div> -->
					    <div class="col-12">
							<a href="<?php base_url(); ?>more_leader">
								<button class="btn btn-primary">More Leaders</button>
							</a>
					    </div>
				   </div>
				</section>	
			</div>