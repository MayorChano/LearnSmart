
      <!-- start nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a style="color: #407aef" class="navbar-brand" href="/1819dw/LearnSmart">
                  <img src="/1819dw/LearnSmart/assets/images/logo.png" width="60" height="60" alt=""> Learn Smart
                </a>
                <button class="navbar-toggler" onclick="if($(window).scrollTop() < 30)document.getElementsByClassName('navbar')[0].classList.toggle('nav-strict')" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <?php if($access_control['logged_in'] == "yes") 
                    { ?>
                    <li class="nav-item active">
                      <a style="font-size: 16px" class="btn btn-primary nav-link" href="/1819dw/LearnSmart/home/index.php">Home <i class="fa fa-play-circle"></i></a>
                    </li>
                    <li class="nav-item active">
                      <a style="font-size: 16px" class="btn btn-primary nav-link" href="/1819dw/LearnSmart/dashboard/index.php">Dashboard <i class="fa fa-play-circle"></i></a>
                    </li>
                    <li class="nav-item active">
                      <a style="font-size: 16px" class="btn btn-primary nav-link" href="/1819dw/LearnSmart/editor/index.php">Editor <i class="fa fa-code" aria-hidden="true"></i></a>
                    </li>
                    <li class="nav-item active">
                      <a style="font-size: 16px" class="btn btn-primary nav-link" href="/1819dw/LearnSmart/about">About us <i class="fa fa-users"></i><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                      <a style="font-size: 16px" class="btn btn-primary nav-link" href="/1819dw/LearnSmart/user/upload">Upload File <i class="fa fa-file-upload"></i></a>
                    </li>
                    <?php } ?>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <?php 
                      if (!$access_control['email']) {
                    ?>
                    </li>
                    <li class="nav-item">
                    <a class="btn btn-primary nav-link" href="/1819dw/LearnSmart/user/register.php">Sign up</a>
                    </li>
                      <a class="btn btn-primary nav-link" href="/1819dw/LearnSmart/user/login.php">Login</a>
                    <?php
                      } else {
                    ?>
                        <a class="btn btn-primary nav-link" href="/1819dw/LearnSmart/user/profile/index.php">You are logged in as <?php echo $access_control['username']; ?> </a>
                        
                        </li>
                        <li class="nav-item">
                          <a class="btn btn-danger nav-link" href="/1819dw/LearnSmart/user/logout.php">Logout</a>
                        </li>

            <?php
              }
            ?>
            
            
            </li>
          </ul>
        </div>
</nav>