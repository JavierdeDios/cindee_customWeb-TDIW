<div class="prdct-desc">
    <div class="prdct-row">
        <div class="desc-column">
            <h1 class="xlarge-font"><b><?php echo ucwords(str_replace("_", " ", $nitem['name'])); ?></b></h1>
            <?php $preu = $nitem['price']; ?>
            <h1 class="large-font" style="color:MediumSeaGreen;"><b><?php echo $preu.' €'; ?></b></h1>
            <p style="font-size: 20px;"> <?php echo $nitem['description']; ?></p>
            <br>
            <h3 style="margin= 0px">List of ingredients:</h3>
            <p style="font-size: 15px; "><?php echo $nitem['ingredients']; ?></p>
            <br>

            <?php if ($_SESSION['user_id'] == 0) { ?>
            <button onclick="popButton()" class="buybtn"> BUY </button>
            <div id="snackbar">You must be logged in to add items to the cart</div>
            <?php } else { ?>
            <button onclick="popButton()" class="buybtn" type="submit" id="add-cart" value=<?php echo $nitem['ID']; ?>>BUY</button>
            <div id="snackbar">Item added to your cart</div>
            <?php } ?>

            <br><br><br><br><br>
            <a href="/../index.php" class="backbtn">Back</a>
        </div>
        <div class="prdctimg-colmun">
            <img class="prdct-img" src=<?php echo $nitem['image_path']; ?>>
        </div>
    </div>
</div>