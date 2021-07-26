<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top " id="navigation-example">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <a class="navbar-brand" href="javascript:void(0)">Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation-example">
            <span class="sr-only">Toggle navigation</span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
            <span class="navbar-toggler-icon icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-right">
              <!-- <li class="nav-item"> -->

              <li class="nav-item dropdown" style="padding-left: 15px; padding-right: 60px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url('build/images/user.png')?>" alt=""><?php echo $this->session->userdata("username");?>
                  </a>
                  <div class="dropdown-menu dropdown-usermenu" aria-labelledby="navbarDropdown">
                   
                    <a class="dropdown-item"  href="<?php echo base_url('Logout/logout'); ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <!-- <a class="nav-link" href="javascript:void(0)">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block"> -->
                    
                  <!-- </p> -->
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- End Navbar -->