<?php

session_start();

require_once ("php/CreateDb.php");
require_once ("php/component.php");

$db = new CreateDb("b1ztlbmzquybazmc1q7l", "Producttb");

if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["product_id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              $_SESSION['message']="Product removed!";
            //   echo "<script>alert('$_SESSION[message]');</script>";
            //   echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
</head>
<body class="bg-light">
    
    <?php
    require_once ('php/header.php');
    ?>

<div class="container-fluid cart-container">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <div class="heading-section"><h1>My Cart</h1></div>
                <?php
                $total = 0;
                    if (isset($_SESSION['cart'])&& (count($_SESSION['cart'])>0)){
                        $product_id = array_column($_SESSION['cart'], 'product_id');
                        $result = $db->getData();
                        while ($row = mysqli_fetch_assoc($result)){
                            foreach ($product_id as $id){
                                if ($row['id'] == $id){
                                    cartElement($row['product_image'], $row['product_name'],$row['product_price'], $row['id']);
                                    $total = $total + (int)$row['product_price'];
                                }
                            }
                        }
                    }else{
                        echo "<div class='no-results'><h2><b>Oops! Cart is Empty...</b></h2>
                        <h4>Return to <a href='index.php'>Homepage</a></h4></div>";
                    }
                     ?>
            </div>
        </div>
        <div class="col-md-4 ">
            <div class=" price-container">
                <h5>PRICE DETAILS</h5>               
                <div class=" price-details">
                    <div >
                        <?php
                            if (isset($_SESSION['cart']) ){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items): Rs.$total</h6>";
                            }else{
                                echo "<h6>Price (0 items): Rs.0</h6>";
                            }
                        ?>
                        <h6>Delivery Charges: <span class="text-success">FREE</span></h6>
                        
                        <h6>Amount Payable: Rs.<?php
                            echo $total;
                            ?></h6>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php require_once ("php/footer.php"); ?>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>