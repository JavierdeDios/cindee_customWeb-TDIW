<!DOCTYPE html>
<html>
<?php include __DIR__ . "/../controller/head.php"; ?>

<?php require_once __DIR__ . '/../model/connectaDB.php';
$conn = connectaBD();
require_once __DIR__ . '/../model/categories.php';
$categories = getCategories($conn);
require __DIR__ . '/../view/mostraNavBar.php'; ?>

<div id="AJAX">
    <div class="layout">
        <div class="header">
            <a href="http://tdiw-m4.deic-docencia.uab.cat/index.php" target="_self"> <img class="logo" src="./media/utility/home_logo.png" alt="CINDEE_FLORY"></a>
        </div>

        <div class="us">
            <h2 style="font-size: 30px;">WHAT IS CINDEE FLORY?</h2>
            <p style="font-size: 20px;">Cindee Flory was born from an idea, an idea in which nowadays we still believe, the quality of a product is directly related
                to its' origins. <br> By origins we aren't talking about what part of the world each ingredient belongs to or how exotic it is, we are talking about
                the methods <br> that were used to produce each ingredient of our products.<br>
                Obviously this philosophy also includes having top quality products to satisfy our clients, each day we continue to improve and
                develop <br> our brand always following our principles.</p>
            <?php if ($_SESSION['user_id'] == 0) { ?>
                <p style="font-size: 20px;">Feel free to create an account with us, or login if you already have one:</p>
            <?php } ?>
        </div>

        <div class="home-photo">
            <img src="./media/utility/eco_home.png" class="eco-photo" alt="ecofriendly_animalcrueltyfree_company">
        </div>
        <?php if ($_SESSION['user_id'] == 0) { ?>
            <div class="rgst">
                <a id="register" ><button class="rgst-btn" style="width:auto;">REGISTER</button></a>
            </div>

            <div class="login">
                <a id="lgn" ><button class="login-btn" style="width:auto;">LOGIN</button></a>
            </div>
        <?php } else { ?>
            <h2 style="padding: 20px; color: #4a8522">THANK YOU FOR JOINING US!</h2>
        <?php } ?>
    </div>
</div>
</html>
