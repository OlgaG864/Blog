<header>
      <a href="<?php echo BASE_URL. '/index.php'?>" class="logo">
        <h1 class="logo-text"><span>Olga</span><span>Inspires</span></h1>
      </a>
      <i class="fa fa-bars menu-toggle"></i>
      <ul class="nav">
        <li>
          <a href="#">Home</a>
        </li>
        <li><a href="#">Services</a></li>
        <li><a href="#">About</a></li>

        <?php if(isset($_SESSION['id'])):?>
        <li>
          <a href="#">
            <i class="far fa-user"></i>
            <?php echo $_SESSION['username']; ?>
            <i class="fa fa-chevron-down" style="font-size: 0.8em"></i
          ></a>
          <ul>
           
              <li><a href="#">Dashboard</a></li>

            <li><a href="<?php echo BASE_URL .'/logout.php'?>" class="logout">Logout</a></li>
          </ul>
        </li>
        <?php else:?>
          <li><a href="<?php echo BASE_URL .'/register.php'?>">Sign up</a></li>
          <li><a href="<?php echo BASE_URL .'/login.php'?>">Login</a></li>

          <?php endif;?>
      </ul>
    </header>