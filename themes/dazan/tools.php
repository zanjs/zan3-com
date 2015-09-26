<?php
/*template name: Tools(工具箱)
  template url: http://www.zan3.com
*/
	get_header ();
?>
<div class="wrapper">

<style type="text/css">
.main-tools a{text-decoration:none}
.main-tools{font-size:12px}
.main-tools{padding-left:200px;}
.main-tit span{font-size:12px}
.aside{width:180px;float:left;margin-left:-200px;}
.aside-menu a{background: url("/wp-content/themes/I6/images/share.png") no-repeat scroll 7px -206px transparent;}
.aside-menu a.on{background-color:#fdfdfd;border-bottom:1px solid #ddd;color:#333;font-weight:bold;font-style:normal;position:relative;z-index:2;cursor:default}
.aside-menu{color:#999;line-height:26px;padding-bottom:5px}
.aside-menu a{color:#666;display:block;padding-left:24px;border:1px solid #ddd;border-radius:2px;height:26px;margin-bottom:5px;overflow:hidden}
.aside-menu a:hover{border-color:#ccc;background-color:#f9f9f9;color:#444;box-shadow:1px 1px 2px #eee}
.aside-menu a:hover{border-color:#ccc;color:#444;background-color:#F9F9F9}
.aside .btn{display:inline-block;height:26px;line-height:26px;padding:0 12px;font-size:12px;color:#fff;min-width:48px;text-align:center;border-radius:2px}
.aside .btn{background-color:#1E7BB3;background-image:-webkit-linear-gradient(top,#3999D2,#1E7BB3);background-image:-moz-linear-gradient(top,#3999D2,#1E7BB3);border-bottom:1px solid #02598E;box-shadow:#bbb 0 1px 2px;text-shadow:#1E7BB3 0 -1px 0}
.aside .btn:hover{opacity:.9;filter:alpha(opacity =     90);color:#fff}
.aside .btn:active{border-bottom:none;position:relative;top:1px}
.aside .btn-mini{height:20px;line-height:20px;padding:1px 8px 0;border:0}
.tools{*+width:100%;*+float:left;}
.somenum{font-size:14px;float:right}
.somenum strong{font-size:16px;color:#D42222;margin:0 4px}
.sitetip{padding-top:2px;font-size:14px;color:#444;margin-bottom:12px;}
.tarea{width:99%;height:220px;border:#d4d4d4 1px solid;margin-bottom:12px;box-shadow:0 0 4px #eee;padding:4px;font-size:12px;line-height:18px}
.tarea:focus{background:#fdfdfd;border:#ccc 1px solid}
.sbtn{padding:0 12px;height:28px;line-height:27px;display:inline-block;margin-right:6px;border:#ccc 1px solid;border-radius:2px;box-shadow:0 0 4px #eee;background-color:#f9f9f9;background-image:-webkit-linear-gradient(#F9F9F9,#F2F2F2);background-image:-moz-linear-gradient(#F9F9F9,#F2F2F2);background-image:-o-linear-gradient(#F9F9F9,#F2F2F2);background-image:-ms-linear-gradient(#F9F9F9,#F2F2F2);background-image:linear-gradient(#F9F9F9,#F2F2F2);color:#333;cursor:pointer}
.sbtn:hover,.sbtn:focus,.select:hover{border:#aaa 1px solid;color:#000}
.select{padding:4px;border:#ccc 1px solid;border-radius:2px;box-shadow:0 0 4px #eee;margin-right:6px}
.subbtn{margin-bottom:12px;width:744px}
.table{border-left:#DADADA 1px solid;border-top:#DADADA 1px solid;text-align:center;margin-bottom:12px}
.table th,.table td{border-right:#DADADA 1px solid;border-bottom:#DADADA 1px solid;padding:6px}
.table th{background:#F6F6F6}
.table tr td:nth-child(1),.table tr td:nth-child(4){background:#f9f9f9}
.table tr:hover td{background:#EFF7FD;color:#D42222}
.share{margin:5px 0 12px;}
.share-txt {width:99%}
.ad-ifram-1,.ad-ifram-2{width:756px;height:508px;margin-top:0px;border:#d4d4d4 1px solid;margin-bottom:12px;box-shadow:0 0 4px #eee;padding:4px;border-radius:2px}
.input-model{width:771px}
.input-model input{border:1px solid #D4D4D4;box-shadow:0 0 4px #EEEEEE;font-size:12px;height:23px;line-height:18px;margin-bottom:12px;padding:4px;margin-top:1px;width:307px;margin-left:2px;border-radius:2px}
.input-model input:hover{background-color:#f9f9f9;border-color:#ccc;color:#444}
</style>
<style type="text/css">
.main-tools{padding-left:200px;}
.aside{width:180px;float:left;margin-left:-200px;}
.aside-menu a{display:block;height:30px;line-height:30px;overflow:hidden;border-top:1px solid #eee;border-bottom:1px solid #eee;margin-bottom:-1px;}
.aside-menu a.on{background-color:#fdfdfd;border-bottom:1px solid #ddd;color:#333;font-weight:bold;position:relative;z-index:2;cursor:default;}
.tools{*+width:100%;*+float:left;}

.somenum{font-size:14px;float:right}
.somenum strong{font-size:16px;color:#D42222;margin:0 4px}
.sitetip{font-size:14px;color:#444;margin-bottom:12px;}
.tarea{width:99%;height:220px;border:#d4d4d4 1px solid;margin-bottom:12px;box-shadow:0 0 4px #eee;padding:4px;font-size:12px;line-height:18px}
.tarea:focus{background:#fdfdfd;border:#ccc 1px solid}
.sbtn{padding:0 12px;height:28px;line-height:27px;display:inline-block;margin-right:6px;border:#ccc 1px solid;border-radius:2px;box-shadow:0 0 4px #eee;background-color:#f9f9f9;background-image:-webkit-linear-gradient(#F9F9F9,#F2F2F2);background-image:-moz-linear-gradient(#F9F9F9,#F2F2F2);background-image:-o-linear-gradient(#F9F9F9,#F2F2F2);background-image:-ms-linear-gradient(#F9F9F9,#F2F2F2);background-image:linear-gradient(#F9F9F9,#F2F2F2);color:#333;cursor:pointer}
.sbtn:hover,.sbtn:focus,.select:hover{border:#aaa 1px solid;color:#000}
.select{padding:4px;border:#ccc 1px solid;border-radius:2px;box-shadow:0 0 4px #eee;margin-right:6px}
.subbtn{margin-bottom:12px;}

.table{border-left:#DADADA 1px solid;border-top:#DADADA 1px solid;text-align:center;margin-bottom:12px}
.table th,.table td{border-right:#DADADA 1px solid;border-bottom:#DADADA 1px solid;padding:6px}
.table th{background:#F6F6F6}
.table tr td:nth-child(1),.table tr td:nth-child(4){background:#f9f9f9}
.table tr:hover td{background:#EFF7FD;color:#D42222}

.share{margin:5px 0 12px;}
</style>
<div class="main">
	
<div class="entry">
<div class="main-tools">
			<div class="aside">
			
				<div class="aside-menu">

					<a id="codemirror" class="on" href="#hcodemirror">在线代码高亮</a> 
					<a id="csspacker" href="#csspacker">CSS压缩/格式化</a> 
					<a style="display:none" id="css3" href="#css3">CSS3样式生成器</a> 
					<a id="online-color" href="#online-color">在线配色</a> 
					<a id="color-matching" href="#color-matching">色彩搭配</a>
					<a id="htmlcodegov" href="#htmlcodegov">HTML多功能代码转换器</a>
				 <a id="js-html" href="#js-html">Javascript 转 HTML</a> 
					<a id="html-js" href="#html-js">HTML 转 Javascript</a> 
					<a id="jspacker" href="#jspacker">JS/HTML加密/压缩/格式化</a> 
					<a id="scriptencode" href="#scriptencode">Javascript加密/解密</a> 
					<a id="jscodeconfusion" href="#jscodeconfusion">Javascript代码混淆</a>
					<a style="display:none" id="regular" href="#regular">正则调试工具 </a> 
					<a id="pinyin" href="#pinyin">拼音字典查</a> <a id="md5" href="#md5">MD5加密</a> 
					<a id="htmlchar" href="#htmlchar">HTML特殊符号对照表</a> 
					<a id="webmasters" href="#webmasters">网站管理员工具</a> 
					<a href="http://www.zan3.com" style="background-color: #F8F8F8; border: 1px solid #F8DBDB" >更多工具敬请期待</a>
					   
				</div>
				<p>
					<a class="btn btn-mini" href="http://www.zan3.com" target="_blank">建议&raquo;</a>
				</p>
			</div>
<div class="tools"><h2 class="sitetip">贴入要高亮代码：<!--[if IE]>（本功能暂不支持IE浏览器）<![endif]--></h2>
<textarea class="tarea" id="code" onMouseOver="this.focus();this.select();"><h2 class="demo">贴入要高亮代码：</h2></textarea>
<div class="subbtn">
	<input class="sbtn" type="button" value="Html Mix" onClick="doHighlight('text/html');">
	<input class="sbtn" type="button" value="CSS" onClick="doHighlight('text/css');">
	<input class="sbtn" type="button" value="Javscript" onClick="doHighlight('text/javascript');">
	<input class="sbtn" type="button" value="XML" onClick="doHighlight('application/xml');">
	<input class="sbtn" type="button" value="PHP" onClick="doHighlight('application/x-httpd-php');">
</div>
				<h2 class="sitetip">复制以下代码到编辑器（Html模式）：</h2>
				<textarea class="tarea" id="getcode" style="height: 100px" onmouseover="this.focus();this.select();"></textarea>
				<h2 class="sitetip">高亮预览：</h2>
				<pre id="output" class="cm-s-default"></pre>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/codemirror.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/runmode.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/htmlmixed.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/css.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/javascript.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/xml.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/php.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/codemirror_js/clike.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/csspacker.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/htmlcodecov.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/html_js.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/base.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/jsformat.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/htmlformat.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/jspacker.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/scriptencode.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/jscodeconfusion.js"></script>
				<script src="<?php bloginfo('template_url') ?>/tools/js/pinyin.js"></script>
			</div>
		</div>			
<script type="text/javascript">
jQuery.noConflict();
jQuery(document).ready(function($) {
	//tools
	var tool_id = document.URL.split('#')[1];
	$('.aside-menu a').each(function(){
		if( $(this).attr('href').split('#')[1] == tool_id ){
			$(this).addClass('on').siblings('a').removeClass('on');
			$('.tools').load('<?php bloginfo('template_url') ?>/tools/'+ $(this).attr('id') +'.php');
		}
		$(this).click(function(){
			$(this).addClass('on').siblings('a').removeClass('on');
			$('.tools').load('<?php bloginfo('template_url') ?>/tools/'+ $(this).attr('id') +'.php');
		})
	})
})
</script>
</div>
</div>
</div>
<?php get_footer(); ?>
