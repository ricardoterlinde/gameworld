<?php
require_once 'static/header.php';
?>

<div id="cart">
    <a href="checkout.php">
    <img src="images/shopcar.png" alt="winkelmand" width="75" height="50">
</a>
</div>

<div class = "Category">Checkout</div>

<div>
<table id="table">

    <thead class="thead">
        <tr>
            <th>Image </th> 
            <th>Game</th>
            <th>Description</th>
            <th>Price</th>
        </tr>
    </thead>

    <tbody class="tbody">
        <tr>
            <td class="fifa"></td>
            <td>FIFA 2019 PS4</td>
            <td>FIFA 19 is a football simulation video game.</td>
            <td>&euro;59,99</td>
        </tr>
        <tr>
            <td class="blackops"> </td>
            <td>Black Ops 4 PS4</td>
            <td>Black ops 4 is a shooter video game.</td>   
            <td>&euro;59,99</td>
        </tr>
        <tr>
            <td class="rdr"> </td> 
            <td> Red dead 2 PC</td>
            <td> Red dead 2 is a real life video game. </td>
            <td>&euro;54,99</td> 
        </tr>
    </tbody>

    <tfoot class="tfoot">
        <tr>
            <td id = "totaal">Total: </td>
            <td> </td>
            <td> </td>
            <td>&euro; 174,97</td>
        </tr>
    </tfoot>

</table>

<div class="clearfix"></div>

<?php
require_once 'static/footer.php';
?>
</div>
</body>
</html>
