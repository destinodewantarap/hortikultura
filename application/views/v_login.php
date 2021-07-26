<!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="<?php echo base_url('build/images/diskominfo.png') ?>" type="image/ico" />

    <title>Kebun Inovasi Politeknik Negeri Jember</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url('assets/login/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url('assets/login/nprogress/nprogress.css') ?>" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo base_url('assets/login/iCheck/skins/flat/green.css') ?>" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo base_url('assets/login/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') ?>" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo base_url('assets/login/jqvmap/dist/jqvmap.min.css')?>" rel="stylesheet"/>
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url('assets/login/build/css/custom.min.css') ?>" rel="stylesheet">

    
  </head>

  <body class="login">
      <div class="login_wrapper"> 
          <div class="login_content">
              <h1>Login Form</h1>
            <h2><?php echo $this->session->flashdata('item'); ?></h2>
            <form action="<?php echo base_url('Login/aksi_login'); ?>" method="post">
              <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required="" />
              </div>
              <div>
                <button class="btn btn-info submit" type="submit" value="Login">Log In</button>
              </div>
              </form>
               <div class="separator"> 
                <div class="clearfix"></div>
                <br />

                <div>
                  <h2> KEBUN INOVASI</h2>
                  <tr>
                  <h1>POLITEKNIK NEGERI JEMBER</h1>
                 
                </div>
              </div>
            </form>
          </div>
        </div>

        
      </div>
    </div>
  </body>
</html>
