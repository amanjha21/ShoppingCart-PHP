<script>
function logout(){
    document.cookie = "PHPSESSID = 0;expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    alert("Logged out in Successfully.");
    window.location.href = "index.php";
}
</script>
<div class="upper-part">
            <div class="head">
                <div class="logo">
                    <a  href="index.php" >
             <img src="./image/logo.png" width="100px"></img>
            </a>
            </div>
            
            <div class="tag-line">
                <div class="kart"><h2>MY-KART</h2></div>    
                <div class="tag">
                  
                    <h6>AN EXCELLENT PLACE FOR WHOLE FAMILY TO SHOP <br> FIND IT, LOVE IT, BUY IT</h6>
                </div>
              
            </div>
            <div class="search-container">
                    <form action="search.php" method="post">
                      <input type="text" placeholder="Search.." name="query" >
                      <button type="submit"><i class="fa fa-search" name="search"></i></button>
                    </form>
                  </div>
            <nav class="navi">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Products</a>
                        <div class="dropdown-content">
                          <a href="women.php" >Women</a>
                          <a href="men.php">Men</a>
                          <a href="kids.php">Kids</a>
                          <a href="other.php">Other Accesories</a>
                        </div>
                    <li><a href="contact.php">Contact</a></li>
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
                            echo"<a href=\"./login.php\" onclick = \"logout()\">logout</a>";
                        }}else{
                            echo"<a href=\"./login.php\">login</a></li>";                            
                        }
                    
                    ?>
                    
                    <li><a href="#">About</a></li>
                    
                </ul>
                <!-- <div class="search-container">
                    <form action="search.php" method="post">
                      <input type="text" placeholder="Search.." name="query" >
                      <button type="submit"><i class="fa fa-search" name="search"></i></button>
                    </form>
                  </div> -->
            </nav>
        </div>
        <div class="name">
            <a href="project.html" >
                <h2>my~kart.com</h2>
        </a>
        
        </div>
        

        </div>
