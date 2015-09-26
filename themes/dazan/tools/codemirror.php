<h2 class="sitetip">
	贴入要高亮代码：
	<!--[if IE]>（本功能暂不支持IE浏览器）<![endif]-->
</h2>
<textarea class="tarea" id="code" onmouseover="this.focus();this.select();"><h2 class="demo">贴入要高亮代码：</h2></textarea>
<div class="subbtn">
	<input class="sbtn" type="button" value="Html Mix"
		onclick="doHighlight('text/html');"> <input class="sbtn" type="button"
		value="CSS" onclick="doHighlight('text/css');"> <input class="sbtn"
		type="button" value="Javscript"
		onclick="doHighlight('text/javascript');"> <input class="sbtn"
		type="button" value="XML" onclick="doHighlight('application/xml');"> <input
		class="sbtn" type="button" value="PHP"
		onclick="doHighlight('application/x-httpd-php');">
</div>

<h2 class="sitetip">复制以下代码到编辑器（Html模式）：</h2>

<textarea class="tarea" id="getcode" style="height: 100px"
	onmouseover="this.focus();this.select();"></textarea>

<h2 class="sitetip">高亮预览：</h2>
<pre id="output" class="cm-s-default"></pre>