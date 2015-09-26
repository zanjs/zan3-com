<h2 class="sitetip">贴入Javascript/HTML代码：</h2>
<textarea onmouseover="this.focus();this.select();"
	style="height: 450px;" id="content" name="content" class="tarea"></textarea>
<div class="subbtn">
	<select id="tabsize" name="tabsize" class="select">
		<option selected="selected" value="1">制表符缩进</option>
		<option value="2">2个空格缩进</option>
		<option value="4">4个空格缩进</option>
		<option value="8">8个空格缩进</option>
	</select> <input type="button" id="beautify"
		onclick="return do_js_beautify()" value="格式化" class="sbtn"> <input
		type="button" onclick="pack_js(0)" value="普通压缩" class="sbtn"> <input
		type="button" onclick="pack_js(1)" value="加密压缩" class="sbtn"> <input
		type="button" onclick="Empty();" value="清空" class="sbtn">
</div>
