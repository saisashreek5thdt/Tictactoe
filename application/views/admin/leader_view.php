<!-- Main Content -->
<?php //print_r($leader_view);exit; ?>
            <div class="main-content">
               <section class="section">
                  <div class="section-body">
                     <div class="row mt-sm-4">
                        <div class="col-12 col-md-12 col-lg-4">
                           <div class="card author-box">
                              <div class="card-body">
                                 <div class="author-box-center">
                                    <img alt="image" src="<?php echo base_url(); ?><?php echo $leader_view->image ?>" class="author-box-picture">
                                    <div class="clearfix"></div>
                                    <div class="author-box-name">
                                       <a href="#"><?php echo $this->db->get_where('tbl_our_leadership_team',array('id'=> $leader_view->leader_id))->row()->name;?></a>
                                    </div>
                                    <div class="author-box-job"></div>
                                 </div>
							            <div class="text-center">
                                    <a href="<?php echo base_url(); ?>dashboard/leader_view_edit/<?php echo $leader_view->id ?>" class="btn btn-social-icon mr-1">
									    	<i class="far fa-edit" style="color: #4CC85A !important;"></i>
                                    </a>
                                    <a href="<?php echo base_url(); ?>dashboard/delete_leader/<?php echo $leader_view->id ?>" class="btn btn-social-icon mr-1">
										  <i class="far fa-trash-alt" style="color: #DB2E30 !important;"></i>
                                    </a>
                                    <div class="w-100 d-sm-none"></div>
                                 </div> 
                              </div>
                           </div>
                        </div>
                        <div class="col-12 col-md-12 col-lg-8">
                           <div class="card">
                              <div class="padding-20">
                                 <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                    <li class="nav-item">
                                       <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about" role="tab"
                                          aria-selected="true">About</a>
                                    </li>
                                 </ul>
                                 <div class="tab-content tab-bordered" id="myTab3Content">
                                    <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="home-tab2">
                                       <div class="row">
                                          <div class="col-md-3 col-6 b-r">
                                             <strong>Title</strong>
                                             <br>
                                             <p class="text-muted"><?php echo $leader_view->title ?></p>
                                          </div>
                                          <!-- <div class="col-md-3 col-6 b-r">
                                             <strong>Mobile</strong>
                                             <br>
                                             <p class="text-muted">(123) 456 7890</p>
                                          </div>
                                          <div class="col-md-3 col-6 b-r">
                                             <strong>Email</strong>
                                             <br>
                                             <p class="text-muted">johndeo@example.com</p>
                                          </div>
                                          <div class="col-md-3 col-6">
                                             <strong>Location</strong>
                                             <br>
                                             <p class="text-muted">India</p>
                                          </div> -->
                                       </div>
                                       <p class="m-t-30">
                                       <strong>Description</strong>
                                       <?php echo $leader_view->description ?>
                                       </p>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </section>
            </div>