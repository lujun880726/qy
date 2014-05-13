<div id="centers">
    <div class="c_content">
        <BR />
        <p><span style="font-size: 2.2rem;"><?php echo $row['goods_name']; ?></span></p>

        <p><img src="<?php echo $row['goods_img'] ?>" height="100" width="100"  title="<?php echo $row['goods_name']; ?>" /></p>

        <p><span style="float: right;"><?php echo date('m-d H:s', $row['utime']); ?></span></p>

        <?php echo $row['goods_content']; ?>
    </div>

</div>