<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"box-container my-3 my-md-0\">
<form action=\"index.php\" method=\"post\">
    <div class=\"box\">
        <div class=\"products\" id=\"brands1\"> <img src=\"$productimg\" height=\"350px\" width=\"auto\">
        <h4>$productname</h4>
        <p>Rs.$productprice</p>
        <div class=\"rating\">
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"fa fa-star\" aria-hidden=\"true\"></i>
            <i class=\"far fa-star\" aria-hidden=\"true\"></i>
        </div>
        <h4> <button type=\"submit\" class=\"btn btn-warning my-3\" name=\"add\">Add to Cart <i class=\"fas fa-shopping-cart\"></i></button></h4>
        <input type='hidden' name='product_id' value='$productid'>
        </div> 
        </div>
                </form>
            </div>
    ";
    echo $element;
}

function cartElement($productimg, $productname, $productprice, $productid){
    $element = "
    
    <form action=\"cart.php?action=remove&id=$productid\" method=\"post\" class=\"cart-items\">
    <div class=\"box box-cart\">
        <div class=\"products\" id=\"brands1\"> <img src=\"$productimg\" height=\"350px\" width=\"auto\">
        </div><div><h4>$productname</h4>
        <p>Rs.$productprice</p>
        <h4> <button type=\"submit\" class=\"btn btn-danger my-3\" name=\"remove\">Remove</button></h4>
        <input type='hidden' name='product_id' value='$productid'>        
        </div></div>
                </form>
    
    ";
    echo  $element;
}