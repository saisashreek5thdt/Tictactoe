<!-- Slider -->
         <div id="layerslider">
           <?php foreach ($slider as $row){?>
            <!-- Slide 1 -->
            <div class="ls-slide" data-ls="transition2d:104;timeshift:-2000;">
               <!-- Background image -->
               <img src="<?php base_url(); ?><?php echo $row->image ?>" class="ls-bg"  alt="Slide background"/>
               <!-- Parallax Image -->
               <!--<img src="<?php base_url(); ?>assets/web/img/sun.png" class="ls-l img-responsive hidden-xs hidden-sm parallax1" alt="" data-ls="delayin:1000;easingin:fadeIn;parallaxlevel:7;">-->
               <!-- Text -->
               <!--<div class="ls-l header-text container" data-ls="offsetxin:0;durationin:2000;delayin:1500;easingin:easeOutElastic;rotatexin:-90;transformoriginin:50% top 0;offsetxout:-200;durationout:1000;parallaxlevel:2;">
                  <h1>Welcome to Alphabet</h1>
                  <p class="subtitle hidden-xs"> Alphabet is a Super Fun Daycare / Children HTML Theme including many Elements </p>
                  <div class="page-scroll hidden-xs">
                     <a class="btn" href="#contact">Contact us</a>
                  </div>
               </div>-->
               <!-- Parallax Image -->
               <!--<img src="<?php base_url(); ?>assets/web/img/flower.png" class="ls-l img-responsive hidden-xs hidden-sm parallax2" alt="" data-ls="delayin:1500;easingin:fadeIn;parallaxlevel:6;">-->
            </div>
            <!-- Slide 2 -->
            <?php } ?>
         </div>
         <!-- /Layerslider ends-->