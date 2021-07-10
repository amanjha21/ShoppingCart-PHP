<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("b1ztlbmzquybazmc1q7l", "Producttb");

if (isset($_POST['add'])){
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            $_SESSION['message']="Product is already added in the cart..!";
        }else{

            $count = count($_SESSION['cart'])+1;
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
            $_SESSION['message']="Product added.";
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        $_SESSION['message']="Product added";
        //  print_r($_SESSION['cart']);
    }
}
if(isset($_SESSION['greet'])){
if($_SESSION['greet']){
    $_SESSION['message']="Logged in Successfully.";
    $_SESSION['greet']=false;
}
}

?>



<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Shopee</title>
     
        <!-- CSS only -->
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/owl.carousel.css">
        <link rel="stylesheet" href="css/owl.theme.green.css">
       
        <link rel="stylesheet" href="css/project.css">
        <link rel="icon" href="image/logo-white.png" type="image" sizes="18x18">
         <script src="js/jquery.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
    
    </head>

    <body>
    <?php require_once ("php/header.php"); ?>

        
  <br>
  <br>
<!--Deals-->

<div class="headphone">
    <h2>Deal Of The Day</h2>

    <div class="second-part">
      
        <br>
        <br>
        <div class=deal-img id="deal-img">
           <img src="image/banner-1.jpg" height="500px" width="auto"> 
        </div>
        </div>
        


</div>




<h2 id="trend">Trending Offers</h2>

<div class="container-2">





<div class="products" id="brands1"> <a href="men.php" target="_blank"> <img src="image/product-1.jpg" height="300px" width="auto"></a>
    <a href="men.php" target="_blank"><h4>Red printed T-shirt</h4></a>
<p>Rs.699</p>
<div class="rating">
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star" aria-hidden="true"></i>
    <i class="fa fa-star-o" aria-hidden="true"></i>
</div>

</div>
<div class="products" id="brands2"> <a href="men.php" target="_blank"> <img src="image/product-2.jpg" height="300px" width="auto"></a>

    <a target="_blank" href="men.php"><h4>Gold-Star Shoes</h4></a>
    
    <p>Rs.1699</p>
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-half-o" aria-hidden="true"></i>
    </div>
    

</div>
<div class="products" id="brands3"> <a href="men.php" target="_blank"><img src="image/product-3.jpg" height="300px" width="auto"></a>

    <a href="men.php" target="_blank"> <h4>Roadster Track Pant</h4></a>
    <p>Rs.969</p>
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-half-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        
    </div>

</div>
<div class="products" id="brands4"> <a href="men.php" target="_blank"><img src="image/product-8.jpg" height="300px" width="auto"></a>

    <a href="men.php" target="_blank"><h4>Fastrack Wrist Watch</h4></a>
    <p>Rs.3699</p>
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
    </div>

</div>
<div class="products" id="brands5"> <a href="men.php" target="_blank"><img src="image/product-7.jpg" height="300px" width="auto"></a>

    <a href="men.php" target="_blank"><h4>HR-X Socks</h4></a>
    <p>Rs.199</p>
    <div class="rating">
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
        <i class="fa fa-star-o" aria-hidden="true"></i>
    </div>

</div>


</div>
</div>
 <!--main div-->

<!--for women-->

<div class="women">

    <div class="women-deal">

        <h2 id="trend" >Deal For Women</h2>
        <div class="third-part" id="purse">
           
            <br>
            <br>
            <div class="women-offer">
                <p id="bag-offer">
                    <i><e>Exclusive offers are available <br> on women hand bags.<br>
                    Please check out <br> our women's product section <br> and take the benefit <br> of offers available.
                </e></i>
                </p>
                <h4>  <a href="#" class="btn">Check Out &#10140;</a></h4>
            </div>
            <div class=banner-img>
                <img src="image/deal-women.jpg" height="500px" width="auto">
            </div>
            </div>


    </div>
    
        
        
        
        <h2 id="trend">Trending Offers</h2>
        
        <div class="container-2">
        
        
        
        
        
        <div class="products" id="brands1"> <a href="women.php" target="_blank">   <img src="image/women-1.jpg" height="300px" width="auto"></a>
            <a href="women.php" target="_blank"> <h4>No-Heels-Sandals</h4></a>
        <p>Rs.1599</p>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        
        </div>
        <div class="products" id="brands2"> <a href="women.php" target="_blank"> <img src="image/women-2.png" height="300px" width="230px"></a>
        
            <a href="women.php" target="_blank"> <h4>Pashmina Scarf</h4></a>
            <p>Rs.299</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands3"> <a href="women.php" target="_blank"> <img src="image/women-3.Jpeg" height="300px" width="230px"></a>
        
            <a href="women.php" target="_blank"> <h4>Rebals Tales Bag</h4></a>
            <p>Rs.1969</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                
            </div>
        
        </div>
        <a href="women.php" target="_blank"> <div class="products" id="brands4"> <img src="image/women-4.jpeg" height="300px" width="230px"></a>
        
            <a href="women.php" target="_blank"> <h4>Pink shirt for women</h4></a>
            <p>Rs.999</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands5"> <a href="women.php" target="_blank"> <img src="image/women-5.jpg" height="300px" width="230px"></a>
        
            <a href="women.php" target="_blank"> <h4>Pull-Over Sweater</h4></a>
            <p>Rs.499</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        
        </div>
        
        </div>
        </div>

</div>

<!--for men-->
<div class="men">

    <div class="forth-part" id="band">
        <h2 id="trend">Deal For Men</h2> 
        <br>
        <br>
       <div class="band-part">
           <div class="band-text">

          
      <p id="bag-offer">
        <i><e>Exclusive offers are available <br> on women hand bags.<br>
            Please check out <br> our women's product section <br> and take the benefit <br> of offers available.
        </e></i>
      </p>
      <h4>  <a href="#" class="btn">Check Out &#10140;</a></h4>
    </div>
        <div class=banner-img>
           <img src="image/exclusive.png" height="500px" width="auto"> 
        </div>
        </div>

       </div>    
        
        <h2 id="trend">Trending Offers</h2>
        
        <div class="container-2">
        
        
        
        
        
        <div class="products" id="brands1"> <a href="men.php" target="_blank"> <img src="image/men-1.jpg" height="300px" width="230"></a>
            <a href="men.php" target="_blank"><h4>Men's Formal Shirt</h4></a>
        <p>Rs.1699</p>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        
        </div>
        <div class="products" id="brands2">  <a href="men.php" target="_blank"><img src="image/men-2.jpg" height="300px" width="230px"></a>
        
            <a href="men.php" target="_blank"><h4>Philips Trimmer</h4></a>
            <p>Rs.1459</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands3">  <a href="men.php" target="_blank"><img src="image/men-3.jpg" height="300px" width="230px"></a>
        
            <a href="men.php" target="_blank"><h4>Fogg Perfume</h4></a>
            <p>Rs.1269</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                
            </div>
        
        </div>
        <div class="products" id="brands4">  <a href="men.php" target="_blank"><img src="image/men-4.jpeg" height="300px" width="230px"></a>
        
            <a href="men.php" target="_blank"><h4>Sleeveless Vest</h4></a>
            <p>Rs.299</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands5"> <a href="men.php" target="_blank"> <img src="image/men-5.jpg" height="300px" width="230px"></a>
        
            <a href="men.php" target="_blank"><h4>Rakuten Jersey</h4></a>
            <p>Rs.1999</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        
        </div>
        
        </div>
        </div>

</div>

<!--kids-->

<div class="kid">

    <div class="fifth-part" id="band">
        <h2 id="trend">Kids Collection</h2> 
        <br>
        <br>
       <div class="band-part">
           <div class="band-text">

          
      <p id="bag-offer">
        <i><e>Exclusive offers are available <br> on women hand bags.<br>
            Please check out <br> our women's product section <br> and take the benefit <br> of offers available.
        </e></i>
      </p>
      <h4>  <a href="#" class="btn">Check Out &#10140;</a></h4>
    </div>
        <div class=banner-img>
           <img src="image/kids-banner.jpg" height="500px" width="auto"> 
        </div>
        </div>

       </div>    
        
        <h2 id="trend">Trending Offers</h2>
        
        <div class="container-2">
        
        
        
        
        
        <div class="products" id="brands1"><a href="kids.php" target="_blank"> <img src="image/kids-1.jpg" height="300px" width="230"></a>
            <a href="kids.php" target="_blank"> <h4>Minnie Mouse</h4></a>
        <p>Rs.1099</p>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        
        </div>
        <div class="products" id="brands2"> <a href="kids.php" target="_blank"><img src="image/kids-2.jpg" height="300px" width="230px"></a>
        
            <a href="kids.php" target="_blank"> <h4>Multi-Guitar</h4></a>
            <p>Rs.999</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands3"><a href="kids.php" target="_blank">  <img src="image/kids-3.jpg" height="300px" width="230px"></a>
        
            <a href="kids.php" target="_blank"> <h4>Disney-Blue-Pillow</h4></a>
            <p>Rs.259</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                
            </div>
        
        </div>
        <div class="products" id="brands4"><a href="kids.php" target="_blank">  <img src="image/kids-4.jpg" height="300px" width="230px"></a>
        
            <a href="kids.php" target="_blank"> <h4>Twin-Face Bag</h4></a>
            <p>Rs.2599</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands5"> <a href="kids.php" target="_blank"> <img src="image/kids-5.jpg" height="300px" width="230px"></a>
        
            <a href="kids.php" target="_blank"> <h4>Kitty Pink Shoes</h4></a>
            <p>Rs.999</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        
        </div>
        
        </div>
        </div>

</div>

<!--lockdown-offers-->

<div class="lockdown">

    <div class="sixth-part" id="band">
        <h2 id="mask">Stay Home & Stay Safe</h2> 
        <br>
        <br>
       <div class="band-part">
           <div class="band-text">

          
      <p id="bag-offer">
        <i><e>Exclusive offers are available <br> on women hand bags.<br>
            Please check out <br> our women's product section <br> and take the benefit <br> of offers available.
        </e></i>
      </p>
      <h4>  <a href="#" class="btn">Check Out &#10140;</a></h4>
    </div>
        <div class=banner-img id="mask-banner">
           <img src="image/lockdown-banner.jpg" height="500px" width="auto"> 
        </div>
        </div>

       </div>    
        
        <h2 id="trend">Trending Offers</h2>
        
        <div class="container-2">
        
        
        
        
        
        <div class="products" id="brands1"><a href="other.php" target="_blank"> <img src="image/lockdown-1.jpg" height="300px" width="230"></a>
            <a href="other.php" target="_blank"><h4>Wild-Craft Mask</h4></a>
        <p>Rs.199</p>
        <div class="rating">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-o" aria-hidden="true"></i>
        </div>
        
        </div>
        <div class="products" id="brands2"> <a href="other.php" target="_blank"><img src="image/lockdown-3.jpg" height="300px" width="230px"></a>
        
            <a href="other.php" target="_blank"><h4>Face-Shield</h4></a>
            <p>Rs.59</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands3"><a href="other.php" target="_blank"> <img src="image/lockdown-4.jpg" height="300px" width="230px"></a>
        
            <a href="other.php" target="_blank"><h4>Hand Sanitizer</h4></a>
            <p>Rs.99</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                
            </div>
        
        </div>
        <div class="products" id="brands4"><a href="other.php" target="_blank"><img src="image/lockdown-2.jpg" height="300px" width="230px"></a>
        
            <a href="other.php" target="_blank"><h4>3-Mask-Combo</h4></a>
            <p>Rs.499</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
            </div>
        
        </div>
        <div class="products" id="brands5"> <a href="other.php" target="_blank"><img src="image/lockdown-5.jpg" height="300px" width="230px"></a>
        
            <a href="other.php" target="_blank"><h4>PPE Full Kit</h4></a>
            <p>Rs.599</p>
            <div class="rating">
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </div>
        
        </div>
        
        </div>
        </div>

</div>

<!--footer-->
<?php require_once ("php/footer.php"); ?>

<script >
    $(document).ready(function(){
    $('.owl-carousel').css({
        margin : 10,
        autoplay : 1000,
        loop : true,
        items : 4,
        nav : true
    });
})
</script>
    </body>
</html>