<!-- Main Content -->
            <div class="main-content">
               <section class="section"> 
				  <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Our Approach - Info</h4>
                              </div>
                              <form action="<?php echo base_url();?>approach_add" method="post">
                              <div class="card-body">
                                 <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                                    <div class="col-sm-12 col-md-7">
                                       <textarea class="summernote" name="content"></textarea>
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
				  <div class="row">
					  <div class="col-12 col-md-12 col-lg-12">
                           <div class="card">
                              <div class="padding-20">
                                 <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab" aria-selected="true">
										   Our Approach - Info
									   </a>
                                    </li>
                                 </ul>
                                 <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                   
									   <p>
										   <img class="img-responsive thumbnail" src="assets/img/image-gallery/thumb/thumb-1.png" alt="">
									   </p>	
                              <?php foreach($approach as $approachs){ ?>
                                       <p class="m-t-30"><?php echo $approachs->content; ?>
                                       </p>
                                       <a href="<?php echo base_url(); ?>dashboard/delete/<?php echo  $approachs->id; ?>" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Are You Sure?|This action can not be undone. Do you want to continue?"
                                        ><i class="fas fa-trash"></i></a> 
                                       <?php } ?>
                                       <!-- <p>Worked as Professor and Head of the department at Sarda Collage, Rajkot,
                                          Gujarat
                                          from 2003-2015 
                                       </p>
                                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                          industry. Lorem
                                          Ipsum has been the industry's standard dummy text ever since the 1500s,
                                          when
                                          an unknown printer took a galley of type and scrambled it to make a
                                          type
                                          specimen book. It has survived not only five centuries, but also the
                                          leap
                                          into electronic typesetting, remaining essentially unchanged.
                                       </p>
                                       <div class="section-title">Education</div>
                                       <ul>
                                          <li>B.A.,Gujarat University, Ahmedabad,India.</li>
                                          <li>M.A.,Gujarat University, Ahmedabad, India.</li>
                                          <li>P.H.D., Shaurashtra University, Rajkot</li>
                                       </ul>
                                       <div class="section-title">Experience</div>
                                       <ul>
                                          <li>One year experience as Jr. Professor from April-2009 to march-2010
                                             at B.
                                             J. Arts College, Ahmedabad.
                                          </li>
                                          <li>Three year experience as Jr. Professor at V.S. Arts &amp; Commerse
                                             Collage
                                             from April - 2008 to April - 2011.
                                          </li>
                                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                             industry.
                                          </li>
                                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                             industry.
                                          </li>
                                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                             industry.
                                          </li>
                                          <li>Lorem Ipsum is simply dummy text of the printing and typesetting
                                             industry.
                                          </li>
                                       </ul> -->
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
				  </div> 
               </section>
            </div>