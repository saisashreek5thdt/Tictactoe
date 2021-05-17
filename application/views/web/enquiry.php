<!-- jumbotron -->
      <div class="blog jumbotron">
         <div class="container">
            <div class="col-lg-6 col-centered well text-center">
               <h1>Express Tab</h1>
               <!-- Breadcrumb -->
               <ol class="breadcrumb text-center">
                  <li><a href="<?php base_url(); ?>">Home</a></li>
				  <li class="active"><a href="<?php base_url(); ?>enquiry">Enquiry Form</a></li>
               </ol>
            </div>
         </div>
         <!-- /.container -->
      </div>
      <!-- /jumbotron -->
      <!-- Clouds SVG Divider -->
         <svg id="deco-clouds2" class="head hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
               M0 100 Q 5 0 10 100
               M5 100 Q 10 30 15 100
               M10 100 Q 15 10 20 100
               M15 100 Q 20 30 25 100
               M20 100 Q 25 -10 30 100
               M25 100 Q 30 10 35 100
               M30 100 Q 35 30 40 100
               M35 100 Q 40 10 45 100
               M40 100 Q 45 50 50 100
               M45 100 Q 50 20 55 100
               M50 100 Q 55 40 60 100
               M55 100 Q 60 60 65 100
               M60 100 Q 65 50 70 100
               M65 100 Q 70 20 75 100
               M70 100 Q 75 45 80 100
               M75 100 Q 80 30 85 100
               M80 100 Q 85 20 90 100
               M85 100 Q 90 50 95 100
               M90 100 Q 95 25 100 100
               M95 100 Q 100 15 105 100 Z">
            </path>
         </svg>
	  
	   <!-- Parallax objects -->
      <div class="blog-object1 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
		  <!-- Image -->
         <img src="<?php base_url(); ?>assets/web/img/blogobject1.png" alt="">
      </div>
	  
      <div class="blog-object2 hidden-sm hidden-xs hidden-md" data-0="opacity:1;"
         data-100="transform:translatey(0%);"
         data-1025="transform:translatey(-80%);">
		 <!-- Image -->
         <img src="<?php base_url(); ?>assets/web/img/blogobject2.png" alt="">
      </div>
<!-- Section Contact -->
         <section id="enquiry" class="color-section">
            <div class="container">
               <div class="col-lg-8 col-lg-offset-2">
                  <!-- Section heading -->
                  <div class="section-heading">
                     <h2>Enquiry Form</h2>
                  </div>
               </div>
               <!-- Contact Form -->
               <div class="col-lg-12">
                  <h4></h4>
                  <!-- Form Starts -->
                  <div id="enquiry_form">
                     <div class="form-group">
                        <input type="text" name="name" class="form-control input-field" placeholder="Name of the Student" required="">
						<input type="date" name="date" class="form-control input-field" placeholder="Date of Birth" required="">
						<input type="text" name="age" class="form-control input-field" placeholder="Age" required="">
						<input type="text" name="grade" class="form-control input-field" placeholder="Grade Seeking Admission" required="">
						<input type="text" name="pname" class="form-control input-field" placeholder="Parent Name" required="">
						<input type="tel" name="number" class="form-control input-field" placeholder="Parent Mobile Number" required=""> 
                        <input type="email" name="email" class="form-control input-field" placeholder="Email ID" required="">
						<input type="text" name="Branch" class="form-control input-field dropdown" placeholder="Branch Name" required="">         
                     </div>
                     <textarea name="message" id="message" class="textarea-field form-control" rows="4" placeholder="Enter your remarks" required=""></textarea>
                     <button type="submit" id="submit_btn" value="Submit" class="btn center-block">Send message</button>
                  </div>
                  <!-- Contact results -->
                  <div id="enquiry_results"></div>
               </div>
               <!--/Contact form -->
            </div>
            <!-- /container-->
         </section>
         <!--Section ends -->