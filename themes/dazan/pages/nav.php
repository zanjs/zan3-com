<?php
/*
template name: 导航
description: template for www.zan3.com seven theme
*/
get_header();
?>
<style>
.pagesider-menu{font-size: 12px;}
.sitetip{margin-top: 0;padding: 0 0 5px;line-height: 15px;}
.subbtn{margin-bottom: 20px;}
#navs{color: #aaa;}
#navs h2{font-size: 20px;font-weight: normal;color: #F15A23;}
#navs .items li{padding: 7px 0;border-bottom: solid 1px #f2f2f2;}
#navs .items a{font-size: 14px;}
#navs .items li:hover{background-color: #f7f7f7;border-bottom: 1px solid #eee;border-top: 1px solid #eee;margin: -1px -20px 0;padding: 7px 20px;}
#navs .items li:hover a{color: #F15A23;}
#navs .items li:hover a:hover{text-decoration: underline;}
#navs .items{width: 20%;float: left;}
#navs .item{padding: 10px 20px;}
#navs .item.active{background-color: #FCF8E3;}
#navs .items:nth-child(2n){background-color: #fdfdfd;}
#navs .items:nth-child(2n) .item{border-left: 1px solid #eee;border-right: 1px solid #eee;}

.navs-speed{position: fixed;right: 10px;bottom: 10px;background-color: #555;color: #eee;}
.navs-speed li{padding: 5px 15px 4px;border-bottom: 1px solid #616161;cursor: pointer;}
.navs-speed li.active{background-color: #428BD1;color: #fff;border-bottom-color: #555;padding-top: 6px;margin-top: -1px;position: relative;}

@media (max-width:979px){
#navs .items{width: 25%;}
}
@media (max-width:767px){
#navs .items{width: 50%;}
}
</style>
<div class="pagewrapper clearfix">

<header class="pageheader clearfix">
<h1 class="pull-left">
<a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</h1>
<div class="pull-right">
</div>
</header>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
</section>
</section>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/nav.js"></script>
<?php get_footer(); ?>