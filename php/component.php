<?php

function component($productname, $productprice, $productimg, $productid){
    $element = "
    
    <div class=\"col-md-3 col-sm-6 my-3 my-md-0\">
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
                    <div class=\"border rounded\">
                        <div class=\"row bg-white\">
                            <div class=\"col-md-3 pl-0\">
                                <img src=$productimg alt=\"Image\" class=\"img-fluid\" height=\"350px\" width=\"auto\">
                            </div>
                            <div class=\"col-md-6\">
                                <h5 class=\"pt-2\">$productname</h5>
                                
                                <h5 class=\"pt-2\">$$productprice</h5>
                                <button type=\"submit\" class=\"btn btn-danger mx-2\" name=\"remove\">Remove</button>
                            </div>
                           
                        </div>
                    </div>
                </form>
    
    ";
    echo  $element;
}