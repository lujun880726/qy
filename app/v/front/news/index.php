<div id="centers">
    <div class="c_liset">
        <div style="padding:5px 0 5px 8px">
            行业动态
        </div>
        <?php
        if ($listNews) {
            foreach ($listNews as $valN) {
                echo "  <p><a href='/news/view/" . $valN['id'] . ".html'>" . sysSubStr($valN['title'], 80) . "...<span style='float: right; padding:0 7px;'>" . date('m-d', $valN['ctime']) . "</span></a></p>";
            }
        } else {
            echo "<p>还没有数据</p>";
        }
        ?>
        <BR>
        <?php echo (pageHtml('/news/index/', $page, $cnt)); ?>
    </div>
</div>