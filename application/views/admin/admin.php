<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-md-10 offset-md-1 col-lg-10 offset-lg-1">
            <div class="login-brand">
              TicTacToe Pre-School
            </div>
            <div class="card card-primary">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-5 p-0">
                  <div class="card-header text-center">
                    <h4 class="text-center">Login</h4>
                  </div>
                  <?php if ($this->session->flashdata('msg')) : ?>
                <?php echo '<div class="alert alert-success icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled">×</i>
                </button>
                <p><strong>Success! &nbsp;&nbsp;</strong>' . $this->session->flashdata('msg') . '</p></div>'; ?>
            <?php endif; ?>
            <?php if ($this->session->flashdata('error')) : ?>
                <?php echo '<div class="alert alert-danger icons-alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <i class="icofont icofont-close-line-circled"></i>
                </button>
                <p><strong>Error! &nbsp;&nbsp;</strong>' . $this->session->flashdata('error') . '</p></div>'; ?>
            <?php endif; ?>
                  <div class="card-body">
                    <form method="POST" action="<?php echo base_url(); ?>login_check">
                      <div class="form-group floating-addon">
                        <label>Email</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-envelope"></i>
                            </div>
                          </div>
                          <input id="email" type="email" class="form-control" name="email" autofocus placeholder="Enter Your Email ID">
                        </div>
                      </div>
                      <div class="form-group floating-addon">
                        <label>Password</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-eye"></i>
                            </div>
                          </div>
                          <input id="password" type="password" class="form-control" name="password" placeholder="Enter Your Password">
                        </div>
                      </div>
                      <div class="form-group text-center">
                        <button type="submit" class="btn btn-round btn-lg btn-primary">
                          Login
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-7 p-0">
                  <div class="contact-map">
					  <div class="contact-map">
						  <img src="<?php echo base_url(); ?>assets/web/img/logo/logo.jpg" class="img-fluid p-5" height="100%" alt="" />
					  </div>
				  </div>
                </div>
              </div>
            </div>
            <div class="simple-footer">
              Copyright &copy; 5TH Dimension Technologies <span id="year"></span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  </html>
<?php 
  if(($this->session->flashdata('error'))!= ""){
?>
<script type="text/javascript">
$(document).ready(function(){
  $.toast({
    heading: 'Error Message',
    text: '<?php echo $this->session->flashdata('error');?>',
    position: 'top-right',
    loaderBg: '#00ff48',
    icon:'#00ff48',
    hideAfter: '3500',
    stack: 6

  });

});


</script>
<?php 
  }
?></html>
<?php 
  if(($this->session->flashdata('msg'))!= ""){
?>
<script type="text/javascript">
$(document).ready(function(){
  $.toast({
    //	heading: 'Congratulations!!!',
            text: '<?php echo $this->session->flashdata('msg'); ?>',
            position: 'top-right',
            loaderBg: '#ff6849',
            icon: 'success',
            hideAfter: 3500,
            stack: 6

  });

});


</script>
<?php 
  }
?>