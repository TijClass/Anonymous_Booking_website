<!-- Success alert -->
<?php if(isset($_SESSION['name'])){?>
    <div style="padding:10px 15px; background-color:green;color:#fff;border-radius:5px;margin-bottom:16px;">
    Welcome back <?php echo $_SESSION['name']; ?>, you have access to this page. Enjoy!"
    </div>
<?php } ?>
<!-- // echo "from view <br>"; -->