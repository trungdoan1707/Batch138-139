<section class="container" style="margin-top: 20px" >
    
    <h1 style="font-size: 4em">Phone</h1>
    <div class="row ">
            
    <?php 
    while($row = $listProduct->fetch_assoc()) {
        $id = $row['id'];

        
        echo 
        ' 
        <form method="post" action="Model/cart_update.php">
             <div class="col-lg-4 col-sm-12 " >
                <div class="thumbnail">
                    <img class="imagecontent" src="image/product/'.$row['image'].'" >
                    '.$row['name'].
                    '
                    <p>Price: '.$row['price'].'$ </p>
                    <a href="#">View</a>
                    <div class="caption fontNew ">
                        <div class="cart-action"> 
                            <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </div>
                    </div>
                </div>
            </div>
        </form>
            ';
         

    }
    ?>
        <div class="shopping-cart">
                <h2>Your Shopping Cart</h2>
                <?php
                if(isset($_SESSION["products"]))
                {
                    $total = 0;
                    echo '<ol>';
                    foreach ($_SESSION["products"] as $cart_itm)
                    {
                        echo '<li class="cart-itm">';
                        echo '<span class="remove-itm"><a href="cart_update.php?removep='.$cart_itm["code"].'&return_url='.$current_url.'">&times;</a></span>';
                        echo '<h3>'.$cart_itm["name"].'</h3>';
                        echo '<div class="p-code">P code : '.$cart_itm["code"].'</div>';
                        echo '<div class="p-qty">Qty : '.$cart_itm["qty"].'</div>';
                        echo '<div class="p-price">Price :'.$currency.$cart_itm["price"].'</div>';
                        echo '</li>';
                        $subtotal = ($cart_itm["price"]*$cart_itm["qty"]);
                        $total = ($total + $subtotal);
                    }
                    echo '</ol>';
                    echo '<span class="check-out-txt"><strong>Total : '.$currency.$total.'</strong> <a href="view_cart.php">Check-out!</a></span>';
                    echo '<span class="empty-cart"><a href="cart_update.php?emptycart=1&return_url='.$current_url.'">Empty Cart</a></span>';

                }else{
                    echo 'Your Cart is empty';
                }
                ?>
        </div>
        
    </div>
</section>