<!-- navbar -->
<div class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="container">
 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">E-Library</a>
        </div>
 
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
 
                <!-- highlight if $page_title has 'Products' word. -->
                <li <?php echo $page_title=="Books" ? "class='active'" : ""; ?>>
                    <a href="index.php" class="dropdown-toggle">Books</a>
                </li>
 
                <li <?php echo $page_title=="Cart" ? "class='active'" : ""; ?> >
                    <a href="cart.php">
                        <?php
                        // count products in cart
                        $cart_count=count($_SESSION['cart']);
                        ?>
                        Cart <span class="badge" id="comparison-count"><?php echo $cart_count; ?></span>
                    </a>
                </li>
				<li <?php echo $page_title=="Bookmarks" ? "class='active'" : ""; ?>>
                    <a href="processBook.php" class="dropdown-toggle">Bookmarks</a>
                </li>
				<li <?php echo $page_title=="Guest" ? "class='active'" : ""; ?>>
                    <a href="selectUserAdmin.php" class="dropdown-toggle">Log in</a>
                </li>
				
				<li <?php echo $page_title=="User" ? "class='active'" : ""; ?>>
                    <a href="logoutUser.php" class="dropdown-toggle">Log out</a>
                </li>
<form class="navbar-form navbar-left" action="index.php" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search" name="search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
            </ul>
 
        </div><!--/.nav-collapse -->
 
    </div>
</div>
<!-- /navbar -->