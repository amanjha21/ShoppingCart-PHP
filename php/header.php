<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"
/>

<link
  rel="stylesheet"
  href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.css"
/>

<link rel="stylesheet" href="css/header2.css" />
<script>
function logout(){
    document.cookie = "PHPSESSID = 0;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    alert("Logged out in Successfully.");
    window.location.href = "index.php";
}
function showAlert(message){
  document.getElementById('alert-message').innerText=message;
  document.getElementById('alert-message').classList.remove("hide-alert");
  document.getElementById('alert-message').classList.add("show-alert");
   setTimeout(hideAlert,2500 );
}
function hideAlert(){
  document.getElementById('alert-message').classList.remove("show-alert");
document.getElementById('alert-message').classList.add("hide-alert");
}
</script>
<!-- Fixed navbar -->
<div id="alert-message"class="hide-alert"></div>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="navbar-header">
      <button
        type="button"
        class="navbar-toggle"
        data-toggle="collapse"
        data-target=".navbar-collapse"
      >
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <div class="small-logo-container">
        <a class="small-logo" href="index.php">
          <img src="image/logo-white.png" alt="logo" height="40px" />
          Shopee</a
        >
      </div>
    </div>
    <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <li class="search-bar">
        <form action="search.php" method="post">
                      <input type="text" placeholder="Search.." name="query" >                      
                      </button>
                    </form></li>
        <li class="active"><a href="index.php">Home</a></li>
        <li >
          <div class="dropdown ">
            <button class="dropbtn ">Products</button>
            <div class="dropdown-content">
              <a href="men.php">Men</a>
              <a href="women.php">Women</a>
              <a href="kids.php">Kids</a>
              <a href="other.php">Other</a>
            </div>
          </div>
        </li>
        <li><a href="#">Contact</a></li>
        <li><a href="cart.php">Cart
        <?php

if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
    echo "<span id=\"cart_count\" class=\"text-black bg-light\">$count</span>";
}else{
    echo "<span id=\"cart_count\" class=\"text-black bg-light\">0</span>";
}

?></a>
                </li>
                    <li><?php
                    if(isset($_SESSION['loggedin'])){
                        if($_SESSION['loggedin']){
                            echo"<a href=\"./login.php\" onclick = \"logout()\">Logout</a>";
                        }}else{
                          echo"<a href=\"./login.php\">Login</a></li>"; }
                    
                    ?>
        </a></li>
      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
</div>

<div class="container-fluid big-logo-row">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 big-logo-container">
        <h1 class="big-logo">
          <a href="index.php">
            <img src="image/logo-white.png" alt="logo" height="150px" />
            Shopee</a
          >
        </h1>
      </div>
      <!--/.col-xs-12 -->
    </div>
    <!--/.row -->
  </div>
  <!--/.container -->
</div>

<script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-8216c69d01441f36c0ea791ae2d4469f0f8ff5326f00ae2d00e4bb7d20e24edb.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="js/header.js"></script>
