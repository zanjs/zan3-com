</section>
<footer class="footer">
    <div class="footer-inner">
        <div class="copyright pull-left">
            赞生博文博客: 个人博客技术文章分享|程序生涯，美好人生！让我们改变生活吧！  |  <a href="http://www.zan3.com/sitemap.html" title="站点地图">站点地图</a>  |   <a href="http://www.zan3.com/sitemap_baidu.xml" title="站点XML">站点XML</a>  |<a rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn/">京ICP备13000002号</a>  |  本站使用 <a rel="nofollow" target="_blank" href="http://t.cn/8FosCqO">阿里云主机</a>
        </div>
        <div class="trackcode pull-right">
            <?php if( dopt('d_track_b') ) echo dopt('d_track'); ?>
        </div>
    </div>
</footer>
<?php 
wp_footer(); 
global $dHasShare; 
if($dHasShare == true){ 
    echo '<script id="bdshare_js" data="type=tools&amp;uid='.(dopt('d_bdshare')?dopt('d_bdshare'):13688).'" ></script><script id="bdshell_js"></script><script>document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();</script>';
} 
if( dopt('d_footcode_b') ) echo dopt('d_footcode'); 
?>
<?
//宠物加载
?>
    <div id="spig" class="spig">
    <div id="message">加载中……</div>
    <div id="mumu" class="mumu"></div>
    </div>
</body>
</html>