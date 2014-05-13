<style type="text/css">
    #nav{
        width:200px;
    }

    /* 取消列表样式，内外补间为零 */
    #nav ul{
        list-style:none;
        margin:0;
        padding:0;
    }

    /* 竖排：控制导航高度*/
    #nav li{
        height:30px;
        line-height:30px;  /* 文字垂直居中 指定行高为li高度 自动垂直居中 */
    }

    /* 将a标签区块化就可以指定高度 */
    #nav a{
        display:block;
        height:100%;
        text-decoration:none;   /* 取消a标签下划线 */
        text-align:center;      /* 文字水平居中显示 */
        background-color:#000;
        color:#fff;
    }

    /* 鼠标放上效果 */
    #nav a:hover{
        background-color:#eee;
        color:#000;
    }
    .hd-fl { width:298px; height:220px; margin: 2px; float:left;}
</style>
<div id="centers">

    <div class="goods_left">
        <div id="nav">
            <ul>
                <?php foreach ($typelist as $key => $val) { ?>
                    <li ><a <?php if ($key == $type) echo 'style="background-color: #EEEEEE;color: #000000;"' ?> href="/goods/index/<?php echo $key; ?>_<?php echo $page; ?>.html"><?php echo $val; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="goods_right">
        <div style=" height: 440px;">
            <?php if ($list) : ?>
                <?php foreach ($list as $valg) : ?>
                    <div class="hd-fl" >
                        <a href="/goods/view/<?php echo $valg['id'] ?>.html">
                            <img src="<?php echo $valg['goods_img'] ?>" height="100" width="100"  title="<?php echo $valg['goods_name']; ?>" />
                        </a>
                        <p><span><a href="/goods/view/<?php echo $valg['id'] ?>.html"><?php echo sysSubStr($valg['goods_name'], 20); ?>...</a></span></p>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <div>
            <?php echo (pageHtml('/goods/index/' . $type . '_', $page, $cnt)); ?>
        </div>
    </div>
    <div class="clear">&nbsp;</div>
</div>