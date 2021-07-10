<?php
session_start();
require_once ('php/CreateDb.php');
require_once ('./php/component.php');

// create instance of Createdb class
$database = new CreateDb("b1ztlbmzquybazmc1q7l", "Producttb");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shopping Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->

    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/header.css"> -->
</head>


<?php require_once ("php/header.php"); ?>
<div class="heading-section"><h1>MEN SECTION</h1></div>
<div class="section-container">
        
            <?php
                $result = $database->getData("men");
                if(!$result){
                    echo("<div class='no-results'><h2>Oops! Nothing to Show</h2><h4>Return to <a href='index.php'>Homepage</a></h4></div>");
                }
                else{
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['product_name'], $row['product_price'], $row['product_image'], $row['id']);
                }}
            ?>
        
</div>
<?php require_once ("php/footer.php"); ?>
