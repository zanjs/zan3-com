<h2 class="sitetip">贴入要转换的HTML代码：</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea"
	id="content"></textarea>
<div class="subbtn">
	<input type="button" onclick="javascript();" value="转为Javascript"
		class="sbtn"> <input type="button" onclick="php();" value="转为PHP"
		class="sbtn"> <input type="button" onclick="jsp();" value="转为JSP"
		class="sbtn"> <input type="button" onclick="asp();" value="转为ASP"
		class="sbtn"> <input type="button" onclick="perl();" value="转为Perl"
		class="sbtn"> <input type="button" onclick="sws();" value="转为Sws"
		class="sbtn"> <input type="button" onclick="vbnet();" value="转为Vb.net"
		class="sbtn">
</div>
<h2 class="sitetip">转换结果：</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea"
	id="result"></textarea>
<div class="subbtn">
	<!--    <input type="button" onclick="htmlCov();" value="开始转换" id="conv" class="sbtn">-->
	<input type="button" onclick="copy('result')" value="复制" id="copy"
		class="sbtn"> <input type="button" onclick="remove();" value="清空结果"
		id="remove" class="sbtn"> <input type="button" onclick="saveCode();"
		value="保存为文件" id="save" class="sbtn">
</div>
