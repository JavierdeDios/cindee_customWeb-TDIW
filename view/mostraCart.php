<div id="AJAX" style="padding: 20px">
    <h2>MY CART</h2>
    <div class="row">
        <div class="col-75">
            <div class="container">
                <div class="row">
                    <div class="col-X"><h3>Item</h3></div>
                    <div class="col-X2"></div>
                    <div class="col-X center"><h3>Units</h3></div>
                    <div class="col-X center"><h3>Price</h3></div>
                    <div class="col-X"></div>
                </div>
                <hr style="border: 2px solid lightgrey;">
                <?php if (!empty($_SESSION['carro'])) { ?>
                    <!-- ITEM  -->
                    <?php require_once __DIR__ . '/../model/products.php';
                    $eur = ' €';
                    $preutot = 0;
                    foreach($_SESSION['carro'] as $x => $x_value) {
                        $data = getByID($conn, $x);
                        $preu = $data['price'] * $x_value;
                        $preutot = $preutot + $preu;
                        $nom = ucwords(str_replace("_", " ", $data['name']));?>
                        <div class="row">
                            <div class="col-X">
                                <img class="cart-img" src=<?php echo $data['image_path']; ?>>  <!-- IMG  -->
                            </div>
                            <div class="col-X2">
                                <h3><?php echo $nom; ?></h3> <!-- NOMBRE  -->
                                <?php $cat = getCategoriabyID($conn, $data['category_id']); ?>
                                <p style="font-size: 15px;"><i><?php echo $cat['name']; ?></i></p>    <!-- CAT.ITEM  -->
                            </div>
                            <div class="col-X center">
                                <div class="quantity">
                                    <a href="<?php echo "/../index.php?action=modificaCart&product_id=".$data['ID'].'&operacio=treure'; ?>"><button class="minus-btn" type="button" name="button"><i class="fa fa-minus"></i></button></a>
                                    <input type="text" name="name" value=<?php echo $x_value; ?>>
                                    <a href="<?php echo "/../index.php?action=modificaCart&product_id=".$data['ID'].'&operacio=afegir'; ?>"><button class="plus-btn" type="button" name="button"><i class="fa fa-plus"></i></button></a>
                                </div>
                            </div>
                            <div class="col-X center">
                                <p><b><?php echo $data['price'].' €'; ?></b></p>   <!-- PRICE  -->
                            </div>
                            <div class="col-X center">
                                <a href="<?php echo "/../index.php?action=esborraprod&product_id=".$data['ID']; ?>"><span style="color: dodgerblue; cursor: pointer;"><i class="fa fa-times"></i></span></a>
                            </div>
                            <br><br><br>
                        </div>
                    <?php } ?>
                <?php } else { ?>
                    <h1 style="text-align: center"><i>Your cart is empty</i></h1>
                <?php } ?>
                <hr style="border: 2px solid lightgrey;">
                <div class="row">
                    <div class="col-50">
                        <a href="/../index.php?action=empty"><input type="submit" value="Empty cart" class="btn-empty"></a>
                    </div>
                    <div class="col-50">
                        <a href="/../index.php"><input type="submit" value="Keep shopping" class="btn-keep"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-25">
            <div class="container">
                <?php $suma = 0;
                foreach($_SESSION['carro'] as $x => $x_value) {
                    $suma = $suma + $x_value;
                }
                ?>
                <h4>List <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $suma; ?></b></span></h4>
                <?php require_once __DIR__ . '/../model/products.php';
                $eur = ' €';
                $preutot = 0;
                foreach($_SESSION['carro'] as $x => $x_value) {
                    $data = getByID($conn, $x);
                    $preu = $data['price'] * $x_value;
                    $preutot = $preutot + $preu;
                    $nom = ucwords(str_replace("_", " ", $data['name']));?>
                    <p><a><?php echo $nom; ?></a> <span class="price"><?php echo $preu.$eur; ?></span></p>
                <?php } ?>
                <hr style="border: 2px solid lightgrey;">
                <p>Total <span class="price" style="color:black"><b><?php echo $preutot.$eur; ?></b></span></p>
            </div>
            <?php if (!empty($_SESSION['carro'])) { ?>
                <a href="/../index.php?action=checkout"><input type="submit" value="Checkout" class="btn-check"></a>
            <?php } else { ?>
            <input type="submit" value="Checkout" class="btn-check">
            <?php } ?>
        </div>
    </div>
</div>
