<!-- Section About -->
         <section id="about">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Our Approach</h2>
                  </div>
               </div>
               <div class="row">
            
                  <div class="col-lg-12 col-sm-12">
                  <?php foreach($approach as $approachs){ ?>
                                       <p class="m-t-30"><?php echo $approachs->content; ?>
                                       </p>
                <?php } ?>
                  </div>
                  <!-- /col-lg-8 -->
               </div>
               <!-- /row -->
               <div class="row features">
                     <?php //foreach ($info as $row){ ?>
                  <!-- First Collumn -->
                   <div class="col-lg-12 col-sm-12">
                     <!-- item1 -->
                     <div class="col-md-4 media text-center">
                        <i class="<?php ?>"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Creative Play</h5>
                           <p>
							   Teaching and Learning in Early Years should be Play based as Carl Jung has said “The creation of something new is not accomplished by the intellect but by the play instinct.”
						     </p>
                        </div>
                     </div>
                     <!-- item2 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-game"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Physical Activity</h5>
                           <p>
							   It is an important and integral part of our active playtime and daily timetable. Playing on a jungle gym, jumping, climbing helps strengthen their muscles.
						   </p>
                        </div>
                     </div>
                     <!-- item3 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-two"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Friendship &amp; Social Interactions</h5>
                           <p>
							   Positive social interactions are beneficial for young learners including increased cognitive ability, communication skills and independence.
						   </p>
                        </div>
                     </div>
                  </div>
                  <!-- Second Collumn -->
                  <div class="col-lg-12 col-sm-12">
                     <!-- item4 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-hat"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Confident Learners</h5>
                           <p>
							   “I can surely do this” We provide an environment to encourage children to go one step higher on their personal confidence ladder which builds self-esteem makes them independent and self-reliant.
						   </p>
                        </div>
                     </div>
                     <!-- item5 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-person"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Teaching and Learning</h5>
                           <p>
							   We balance between play-based learning with educator-guided experiences for each child’s holistic development. Music and Movement is an integral part of our daily timetable.
						   </p>
                        </div>
                     </div>
                     <!-- item6 -->
                     <div class="col-md-4 media text-center">
                        <i class="flaticon-music"></i>
                        <div class="media-body">
                           <h5 class="media-heading">Communication Skills</h5>
                           <p>
							   We plan learning engagements using story-telling and field trips to nurture values, literacy, numeracy and respect for the environment
						   </p>
                        </div>
                     </div>
                  </div>
                  <?php //} ?>
               </div>
               <!-- /row features -->
               <div class="col-lg-12 col-sm-12 paper_block">
                  <h3 class="text-center">Testimonial</h3>
                  <div id="owl-testimonials" class="owl-carousel">
                     <!-- testimonial 1-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?php base_url(); ?>assets/web/img/testimonial1.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>
							   This is Ruhi Maynak's father writing in to express our gratitude towards the pains taken by you and other teachers to carry out online classes in an efficient and interesting manner. Am sure we will miss you as Ruhi moves to grade 1.
						   </p>
                           <small><i class="fa fa-user"></i>Prasad Maynak, Parent</small>
                        </div>
                     </blockquote>
                     <!-- testimonial 2-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?php base_url(); ?>assets/web/img/testimonial2.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1  quote-test">
                           <!-- quote -->
                           <p>
							   Last academic year was different in all aspects, it was challenging and the new way of teaching and learning was new to the teachers and students. As my son, Harveer Singh Bhambrah progresses to Grade 1.
						   </p>
                           <small><i class="fa fa-user"></i>Kanwaljit, Parent</small>
                        </div>
                     </blockquote>
                     <!-- testimonial 3-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?php base_url(); ?>assets/web/img/testimonial3.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>
							   Many thanks for all your efforts for inculcating strong Values and ethics in kids!!. Hridhaan really misses his tenure in TICTACTOE starting from Playgroup till UKG.
						   </p>
                           <small><i class="fa fa-user"></i>Tapsi Kavi, Parent</small>
                        </div>
                     </blockquote>
					 <!-- testimonial 4-->
                     <blockquote>
                        <div class="col-md-4 col-lg-4 col-centered">
                           <!-- testimonial image-->
                           <img src="<?php base_url(); ?>assets/web/img/testimonial3.jpg" alt="" class="img-responsive img-circle">
                        </div>
                        <div class="col-md-10 col-md-offset-1 quote-test">
                           <!-- quote -->
                           <p>
							   I’m writing to share our experience with our son Josiah’s class. Soniya Mam your contribution in the class is good. My son obeys the words of wisdom shared in the class. Other day on his own he said mama I will watch TV only for half an hour.
						   </p>
                           <small><i class="fa fa-user"></i>Josiah Kishore’s, Parent</small>
                        </div>
                     </blockquote> 
                  </div>
                  <!--owl testimonials-->
                  
               </div>
               <!-- /col-lg-7 -->
            </div>
            <!--/container-->	  
         </section>
         <!--/ Section ends -->