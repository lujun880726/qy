<div id="centers">
    <div class="c_liset">
        <div style="padding:5px 0 5px 8px">
            招贤纳士
        </div>
        <?php
        if ($listNews) {
            foreach ($listNews as $valN) {
                echo "  <p><a href='/job/view/" . $valN['id'] . ".html'>" . $valN['title'] . "<span style='float: right; padding:0 7px;'>" . date('m-d', $valN['ctime']) . "</span></a></p>";
            }
        } else {
            echo "<p>还没有数据</p>";
        }
        ?>
        <BR>
        <?php echo (pageHtml('/job/index/', $page, $cnt)); ?>
    </div>
</div>