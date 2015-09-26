<?php
echo <<<EOT
<h2 class="sitetip">贴入Javascript加密/解密代码：</h2>
<textarea onmouseover="this.focus();this.select();" style="height:450px;" id="content" name="content" class="tarea"></textarea>
<div class="subbtn">
<input type="button" onclick="if(this.value=='JS加密'){document.getElementById('content').value='<script>'+jsencode(this)+'</script>';this.value='JS解密';}else{jsdecode(this);this.value='JS加密';}" value="JS加密" class="sbtn">
<input type="button" onclick="test();" value="测试" class="sbtn">
</div>
EOT;
?>

