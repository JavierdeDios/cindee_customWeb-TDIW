<div id="home" class="navbar">
    <a href="/../index.php">HOME</a>
    <?php if ($_SESSION['user_id'] != 0) { ?>
        <div class="sidedrop">
            <button class="sidebtn"><i class="fa fa-shopping-cart"></i></button>
            <div id="ajax-cart" class="sidedrop-content" style="right:0">
                <div id="cart-content">
                    <?php require __DIR__ . '/../view/mostraCarroNavVar.php';?>
                </div>
                <br><br>
                <hr>
                <a id="cart">MY CART</a>
            </div>
        </div>
    <?php }
    if ($_SESSION['user_id'] == 0) { ?>
        <a id="login" class="right">PROFILE     <i class="fa fa-user icon"></i></a>
    <?php } else { ?>
        <a id="profile" class="right"><?php echo strtoupper($_SESSION['user_name']); ?>     <i class="fa fa-user icon"></i></a>
    <?php } ?>

    <div class="dropdown">
        <button class="dropbtn">PRODUCTS       <i class="fa fa-caret-down"></i></button>
        <div class="dropdown-content">
            <?php foreach ($categories as $category):
                $nom = $category['name'];
                $nom = htmlentities($nom, ENT_QUOTES | ENT_HTML5, 'UTF-8');?>
                <a value="<?php echo $nom;?>" id="nav<?php echo $nom;?>">    <?php echo $nom;?>     </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>