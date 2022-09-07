<div id="AJAX">
    <div style="padding: 20px">
        <h2>SHOPPING HISTORY</h2>
        <?php require_once __DIR__ . '/../model/comanda.php';
        $comandes = getComandesByUserID($conn, $_SESSION['user_id']);
        foreach ($comandes as $comanda): ?>
            <button class="collapsible"><?php echo 'Order ID: '.$comanda['ID'].' Date: '.$comanda['data']; ?></button>
            <div class="content">
                <?php $items = getItemsByComandaID($conn, $comanda['ID']);
                foreach ($items as $item): ?>
                    <p><?php echo 'Item ID: '.$item['product_id'].' Name: '.ucwords(str_replace("_", " ", $item['product_name'])).' x '.$item['quantity']; ?></p>
                <?php endforeach; ?>
                <br>
                <p><?php echo 'Total: '.$comanda['total_price'].' €'; ?></p>
            </div>
        <?php endforeach; ?>

    </div>
</div>

<script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.maxHeight){
                content.style.maxHeight = null;
            } else {
                content.style.maxHeight = content.scrollHeight + "px";
            }
        });
    }
</script>

