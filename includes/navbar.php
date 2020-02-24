<?php session_start(); ?>
</head>
<body>
  <div class="nav-item">
      <div class="container">

          <nav class="nav-menu mobile-menu">
              <ul>
                  <li class="active"><a href="./index.html">Home</a></li>

                  <li><a href="#">Collection</a>
                      <ul class="dropdown">
                          <li><a href="#">Men's</a></li>
                          <li><a href="#">Women's</a></li>
                          <li><a href="#">Kid's</a></li>
                      </ul>
                  </li>
                  <li><a href="./product.php">Shop</a></li>
                  <li><a href="./blog.html">Blog</a></li>
                  <li><a href="./contact.html">Contact</a></li>
                  <li><a href="./order_form_1">Order</a></li>

                      </ul>
                  </li>
                <?php if(isset($_SESSION['isLoggedIn'])){?>
                  <li><a><?=$_SESSION['name']?></a></li>
                  <li><a href="logout">Log Out</a></li>
                <?php }else{ ?>
                    <li><a href="login">Log In</a></li>
                <?php } ?>
              </ul>
          </nav>
          <div id="mobile-menu-wrap"></div>
      </div>
  </div>
</header>
<!-- Header End -->
