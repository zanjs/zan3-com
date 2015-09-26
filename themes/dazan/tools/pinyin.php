<h2 class="sitetip">贴入要转换成拼音的文字:</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea"
	id="contentPY"></textarea>
<div class="subbtn">
	<input class="sbtn" id="conv" type="button" value="查拼音"
		onclick="trans();" /> <input class="sbtn" id="copy" type="button"
		value="复制" onclick="copy('result');" /> <input class="sbtn"
		id="remove" type="button" value="清空结果" onclick="remove();" />
</div>
<h2 class="sitetip">相应的拼音:</h2>
<textarea onmouseover="this.focus();this.select();" class="tarea"
	id="result"></textarea>
