<?php
require_once 'static/header.php';
?>

<div id="cart">
    <a href="checkout.php">
    <img src="images/shopcar.png" alt="winkelmand" width="75" height="50">
    </a>
</div>

<div id="center">

<div class= "centertext1"> Welcome to GameWorld </div>
<div class="centertext2"> the best webshop in Europe! </div> 

</div> 

<div id="undercenter">
    <div class="category-item">
            <a class="Playstation" href="games.php?catId=1"> Playstation </a> 
        </div>

        <div class="category-item">
            <a class="Xbox" href="games.php?catId=2"> Xbox </a> 
        </div>

        <div class="category-item">
            <a class="PC" href="games.php?catId=3"> PC </a> 
        </div>
         <div class="clearfix"></div>


<?php
require_once 'static/footer.php';
?>
</div>
</body>
</html>