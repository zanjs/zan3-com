<?php get_header(); ?>
<!-- one bt one slider -->
<div class="wrape homeone">
	<!-- <div class="fallback"><img src="images/home_page_1_fallback.jpg" alt="" /></div> -->
	<div style="overflow: hidden;" class="oneByOne1"><div style="left: -1920px;" id="obo_slider">  				
		<div style="display: none; left: 0px;" class="oneByOne_item">
			<a style="display: none;" class="animate0" href="http://www.zan3.com/"><img src="http://www.zan3.com/static/jQuery/home1_slide_1.png" class="wp1_3 slide1_bot" alt="www.zan3.com , ChinaCoder关注前端开发、关注中国IT从业者"></a>		            
			<span style="display: none;" class="txt1 animate1">创意生活！创意生活！如您所想！与众不同！</span>			
			<span style="display: none;" class="txt2 animate2">无设计，不生活<br>好的设计令人心旷神怡</span>												
			<span style="display: none;" class="txt3 short animate3">我们擅长新颖、简练的视觉设计表现手法，并整合创新战略，品牌建设，为客户提供创新的解决方案，以帮助提高品牌知名度和提升消费者体验的客户。
</span>												
			<span style="display: none;" class="txt4 txt4up animate4"><a href="http://www.zan3.com/" onclick="javascript:window.open('http://www.zan3.com/');" class="btn_l">联系我们</a></span>
		</div>
		<div style="display: none; left: 960px;" class="oneByOne_item">                                 	
			<a style="display: none;" class="animate0" href="http://www.zan3.com/"><img src="http://www.zan3.com/static/jQuery/home7_slide_2.png" class="wp1_3 wp1_left slide2_bot" alt="www.zan3.com , ChinaCoder关注前端开发、关注中国IT从业者"></a>			            
			<span style="display: none;" class="txt1 blue txt_right2 animate1">这是一个以国际4A标准来打造的团队</span>			
			<span class="txt2 blue txt_right2 animate2" style="width: 380px; display: none;">一次合作，终身朋友</span>												
			<span class="txt2 blue txt_right2 animate3" style="width: 350px; display: none;">一对一量身定制</span>												
			<span style="display: none;" class="txt4 txt_right2 txt4up animate4"><a href="http://www.zan3.com/" onclick="javascript:window.open('http://www.zan3.com/');" class="btn_l">联系我们</a></span>												
		</div>	
		<div style="display: block; left: 1920px;" class="oneByOne_item">
			<a class="animate0 fadeInUp" href="http://www.zan3.com/"><img src="http://www.zan3.com/static/jQuery/home7_slide_3.png" class="wp1_3 slide2_bot" alt="www.zan3.com , ChinaCoder关注前端开发、关注中国IT从业者">	</a>	            
			<span class="txt1 animate1 fadeInUp">我们依然活着，因为我们一直在挑战</span>			
			<span class="txt2 animate2 fadeInUp">整合创意来诠释品牌的高<br>贵气质，前所未有的高端<br>
			享受</span>												
			<span class="txt3 animate3 fadeInUp">创意是思维意识的表现，设计创意表现的结果，创意生活，从本站开始。</span>												
			<span class="txt4 animate4 fadeInUp" style="margin-top: 15px;"><a target="_blank" href="http://www.zan3.com/;" class="btn_l">+企业QQ为好友</a></span>
		</div>                                                                                              
		<div style="display: none; left: 2880px;" class="oneByOne_item">                                 	
			<a href="http://www.zan3.com/"><img src="http://www.zan3.com/static/jQuery/home7_slide_4.png" class="wp1_3 slide3_bot" alt="www.zan3.com , ChinaCoder关注前端开发、关注中国IT从业者">	</a>		            
			<span class="txt1 blue">细节决定成败！服务决定价值！ </span>			
			<span class="txt2 blue">我们的宗旨！</span>												
			<span class="txt3 short">多年来，本站传播广结良友，和客户朋友们建立了忠实而坚定的亲密伙伴关系。本站始终坚守着“信、合、赢、上”的核心经营理念，得到了客户的广泛认可。
</span>												
			<span class="txt4 txt4up"><a href="http://www.zan3.com/" onclick="javascript:window.open('http://www.zan3.com/');" class="btn_l">联系我们</a></span>
		</div>
	</div><div class="buttonArea"><div style="cursor: pointer; display: block; opacity: 0;" class="buttonCon"><a class="theButton" rel="0">1</a><a class="theButton" rel="1">2</a><a class="theButton active" rel="2">3</a><a class="theButton" rel="3">4</a></div></div><div style="display: block; cursor: pointer; opacity: 0;" class="arrowButton"><div class="prevArrow"></div><div class="nextArrow"></div></div></div>    
</div>
<!-- /one bt one slider -->



<script type="text/javascript" src="http://www.zan3.com/static/jQuery/jquery-runbanner.js"></script> 
<script type="text/javascript">
$(function(){
    $('#obo_slider').runbanner({
		className: 'oneByOne1', 	             
		easeType: 'random',  //动画参数
		/*
		"rollIn", "fadeIn", "fadeInUp", "fadeInDown", "fadeInLeft", "fadeInRight", "fadeInRight", "bounceIn", "bounceInDown", "bounceInUp", "bounceInLeft",        "bounceInRight", "rotateIn", "rotateInDownLeft", "rotateInDownRight", "rotateInUpLeft", "rotateInUpRight" (18种动画类型可调用)
		*/
		slideShow: true  //为false时不会自动播放
	});  
})

</script>
<div class="content-wrap">
	<div class="content">
		<?php while (have_posts()) : the_post(); ?>
		<header class="article-header">
			<h1 class="article-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			<div class="meta">
				<span class="muted"><i class="icon-user icon12"></i> <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ) ?>"><?php echo get_the_author() ?></a></span>
				<time class="muted"><i class="ico icon-time icon12"></i> <?php the_time('Y-m-d');?></time>
				<span class="muted"><i class="ico icon-eye-open icon12"></i> <?php deel_views('浏览'); ?></span>
				<?php if ( comments_open() ) echo '<span class="muted"><i class="icon-comment icon12"></i> <a href="'.get_comments_link().'">'.get_comments_number('去', '1', '%').'评论</a></span>'; ?>
				<?php edit_post_link('[编辑]'); ?>
			</div>
		</header>
		<article class="article-content">
			<?php the_content(); ?>
		</article>
		<?php comments_template('', true); ?>
		<?php endwhile;  ?>
	</div>
</div>

<?php get_sidebar(); get_footer(); ?>