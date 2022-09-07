<div class="row-cat">

    <div class="col-cat25">
        <div class=<?php echo $categoryname; ?>>
            <h2><?php echo $categoryname; ?></h2>
            <p style="opacity:0.6"><?php echo $idcat['description'] ?></p>
        </div>
    </div>

    <div class="col-cat75">
        <div class="row-cat">
            <?php $i = 1; ?>
            <?php foreach ($items as $item): ?>
                <?php $namenoespacios = ucwords(str_replace("_", " ", $item['name'])); ?>
                <?php $hr = "/../index.php?action=categories&item="; ?>
                <?php $iname = $item['name']; ?>
                <div class="col-item">
                    <div class=<?php echo $divimg.$categoryname.$i; ?>>
                        <a style="cursor:pointer" value="<?php echo $item['name'];?>" id="detallItem<?php echo $item['name'];?>"><img class="item" src=<?php echo $item['image_path']; ?> alt=<?php echo $item['name']; ?>></a>
                        <p><?php echo $namenoespacios; ?></p>
                        <hr style="height:2px;border-width:0;color:gray;background-color:grey">
                        <p style="float:right"><?php echo $item['price'].' €'; ?></p>
                    </div>
                    <?php $i = $i + 1; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>
