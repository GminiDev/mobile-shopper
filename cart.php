<?php
    //include header.php file
    include('header.php');
?>

<?php

    /* include cart items if it is not empty */
    count($product->getData('cart'))? include('Template/_cart-template.php'): include('Template/notFound/_cart_notFound.php');
    /* include cart items if it is not empty */

    /* include Wishilist */
    count($product->getData('wishlist'))? include('Template/_wishilist_template.php'): include('Template/notFound/_wishlist_notFound.php');
    /* include Wishilist */

    /* include New phones section */
    include('Template/_new-phones.php');
    /* include New phones section */

?>

<?php
    //include footer.php file
    include('footer.php');
?>
