<?php
require_once 'static/header.php';
?>

<div id="cart">
    <a href="checkout.php">
    <img src="images/shopcar.png" alt="winkelmand" width="75" height="50">
</a>
</div>

<div class = "Category">Contact</div>

<div id="centerC">
<div id="form-container">
        <form>
            <fieldset id="fieldset-left">
                <p>First name:</p>
                <input type="text" name="firstname">
                <p>Last name:</p>
                <input type="text" name="lastname">
                <p>Email:</p>
                <input type="text" name="Email">
                <p>Country:</p>
                <select id="country" name="country">
                <option value="Nederland">Nederland</option>
                <option value="canada">Canada</option>
                <option value="usa">USA</option>
    </select>
            </fieldset>
            <fieldset id="fieldset-right">
                <p>Message:</p>
                <textarea id = "textarea" name="message" rows="14" cols="50"></textarea>
                <br>
                <input type="submit" value="Submit">
            </fieldset>
        </form>
        <div class="clearfix"></div>
    </div>

</div> 

<?php
require_once 'static/footer.php';
?>
</div>
</body>
</html>