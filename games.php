<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "gameworld";
$connection = new mysqli ($servername, $username, $password, $dbname) or die ($connection->error);

if (isset($_GET['catId']))
{
    $categoryId = $_GET['catId'];
}
else
{
    $categoryId = ""; 
}

$selectGamesQuery = "
SELECT * FROM gamecategory, games WHERE gamecategory . categoryId = games . categoryId"; 

if(isset($categoryId) && $categoryId != "") 
{
    $selectGamesQuery .=" AND gamecategory . categoryId = '".$categoryId."'"; 
}

$selectGamesQuery .= " ORDER BY games. gamePrice DESC"; 

$results = mysqli_query ($connection,$selectGamesQuery);

while ($row = mysqli_fetch_assoc($results))
{
    $games[] = $row;
}

?>

<?php
require_once 'static/header.php';
?>

<div id="cart2">
    <a href="checkout.php">
    <img src="images/shopcar.png" alt="winkelmand" width="75" height="50">
</a>
</div>

<?php
if  ($categoryId == 1) 
{
    echo "<div id = 'game-category1'>";
    echo "<p>PLAYSTATION</p>";
    echo "</div>";
}
else if ($categoryId == 2) 
{
    echo "<div id = 'game-category2'>";
    echo "<p>XBOX</p>";
    echo "</div>";
}
else if ($categoryId == 3) 
{
    echo "<div id = 'game-category3'>";
    echo "<p>PC</p>";
    echo "</div>";
}
else 
{
    echo "<div id = 'game-category4'>";
    echo "<p>All Games</p>";
    echo "</div>";
}

?>

<?php
foreach($games as $key => $game)
{
?> 
        <div class="products-container2">
                <div id ="product-item"> 
                <h2 class="gameTitel"> <?php echo $game ['gameTitel']; ?> </h2> 
                <img class="image" src="<?php echo $game ['gameImg']; ?>" />
                <a class="gamePrice"><?php echo $game ['gamePrice']; ?> </a> 
                <button class="order"onclick="location.href='checkout.php'"> ORDER </button>
                </div>
        </div>
<?php
} 
?>
<div class="clearfix"></div>

<?php
require_once 'static/footer.php';
?>
</body>
</html>