<div class="topnav">
        <a href="./">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
        <a href="product.php">Products</a>
        
        <div class="topnav-right">
<?php
if(isset($_SESSION["consort"])){
    ?>
    <a href="processes/user_proc.php?sign_out">Sign Out</a>
    <?php
}else{
    ?>
            <a href="signup.php">Sign Up</a>
            <a href="signin.php">Sign In</a>
    <?php
}
?>
        </div>
    </div>