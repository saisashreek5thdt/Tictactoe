<body>
      <div class="loader"></div>
      <div id="app">
         <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar sticky">
               <div class="form-inline mr-auto">
                  <ul class="navbar-nav mr-3">
                     <li>
						 <a href="#" data-toggle="sidebar" class="nav-link nav-link-lg collapse-btn"> 
							 <i data-feather="align-justify"></i>
						 </a>
					 </li>
                  </ul>
               </div>
               <ul class="navbar-nav navbar-right">
                  <li class="dropdown">
                     <a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user"> 
						 <img alt="image" src="<?php base_url(); ?>assets/web/img/logo/logo.ico" class="user-img-radious-style"> 
						 <span class="d-sm-none d-lg-inline-block"></span>
					  </a>
                     <div class="dropdown-menu dropdown-menu-right pullDown">
                        <div class="dropdown-title">Hello TicTacToe</div>
                        <a href="<?php base_url(); ?>admin" class="dropdown-item has-icon text-danger"> 
							<i class="fas fa-sign-out-alt"></i>
							Logout
                        </a>
                     </div>
                  </li>
               </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
               <aside id="sidebar-wrapper">
                  <div class="sidebar-brand">
                     <a href="<?php base_url(); ?>dashboard"> 
						 <img alt="image" src="<?php base_url(); ?>assets/web/img/logo/logo.png" class="header-logo" /> 
						 <span class="logo-name"></span>
                     </a>
                  </div>
                  <ul class="sidebar-menu">
                     <li class="dropdown">
                        <a href="<?php base_url(); ?>dashboard" class="nav-link">
							<i data-feather="monitor"></i>
							<span>Dashboard</span>
						</a>
                     </li>
					 <li class="dropdown">
                        <a href="<?php base_url(); ?>slider" class="nav-link">
							<i data-feather="image"></i>
							<span>Slider</span>
						</a>
                     </li> 
                     <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown">
							<i data-feather="briefcase"></i>
							<span>Explore</span>
						</a>
                        <ul class="dropdown-menu">
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>approach">Our Approach</a>
						   </li>
						   <li>
							   <a class="nav-link" href="<?php base_url(); ?>approachtabs">Our Approach Tabs</a>
						   </li>	
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>leader">Leadership</a>
						   </li>
						   <li>
							   <a class="nav-link" href="<?php base_url(); ?>our_program">Our Programms</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>fee_structure">Fee Structure</a>
						   </li>	
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown">
							<i data-feather="briefcase"></i>
							<span>Express</span>
						</a>
                        <ul class="dropdown-menu">
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>enquiry_form">Enquiry Form</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>testmoni_form">Testimonials</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>contact">Contact Us</a>
						   </li>
                        </ul>
                     </li>
                     <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown">
							<i data-feather="briefcase"></i>
							<span>Enjoy</span>
						</a>
                        <ul class="dropdown-menu">
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>gallery_img">Gallery</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>event">Events</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>medias">Media</a>
						   </li>
						   <li>
							   <a class="nav-link" href="<?php base_url(); ?>social_media">Social Media</a>
						   </li>	
                        </ul>
                     </li>
					 <li class="dropdown">
                        <a href="#" class="menu-toggle nav-link has-dropdown">
							<i data-feather="globe"></i>
							<span>SEO</span>
						</a>
                        <ul class="dropdown-menu">
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>seo_pages">SITE Pages</a>
						   </li>
                           <li>
							   <a class="nav-link" href="<?php base_url(); ?>seo_meta">META Info</a>
						   </li>	
                        </ul>
                     </li> 
					 <li class="dropdown">
                        <a href="<?php base_url(); ?>access" class="nav-link">
							<i data-feather="users"></i>
							<span>Access Control</span>
						</a>
                     </li> 
                  </ul>
               </aside>
            </div>