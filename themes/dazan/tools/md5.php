<?php 
	$arr = $_POST; //若以$.get()方式发送数据，则要改成$_GET.或者干脆:$_REQUEST
	if($arr['do_md5'] == substr(md5('do_md5'),8,16)){
		$md5 = trim($arr['name']);
		if ($md5 != '') {
			echo "<div class='input-model'";
			echo "<h2 class='sitetip'>加密结果:</h2>";
			echo "32位小写：<input type='text' id='md5-1' value=".md5($md5)." onmouseover='this.focus();this.select();' Readonly>";
			echo "&nbsp;32位大写：<input type='text' value=".strtoupper(md5($md5))." onmouseover='this.focus();this.select();' Readonly><br/>";
			echo "16位小写：<input type='text' value=".strtolower(substr(md5($md5),8,16))." onmouseover='this.focus();this.select();' Readonly>";
			echo "&nbsp;16位大写：<input type='text' value=".strtoupper(substr(md5($md5),8,16))." onmouseover='this.focus();this.select();' Readonly>";
			echo "</div>";
			die;
		} else {
			echo "<h2 class='sitetip' style='color:red'>请输入要加密的字符串</span>";die;
		}
	}
?>
<h2 class="sitetip">请输入需要加密的字符串:</h2>
<form name=fmCalcu id=fmCalcu action="" method=post>
<textarea onmouseover="this.focus();this.select();" class="tarea"
	id="oresult" name="md5-oresult"></textarea>
<input type="hidden" name="do_md5" id="do_md5" value="<?php echo substr(md5('do_md5'),8,16);?>"/>
<div class="subbtn">
	<input type="button" value="加密" class="sbtn" id="md5">
</div>
</form>
<div class="input-model">
</div>
<script type="text/javascript" src="/wp-content/themes/D-5/js/JQuery/jquery-1.7.2.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $(".sbtn").click(function(){
     $.post("/wp-content/themes/D-5/tools/md5.php",//异步处理动态页面
     {name:$("#oresult").val(),
      do_md5:$("#do_md5").val()},//获取类名为"oresult"文本的值
     function(data){//data为反回值，function进行反回值处理
           $(".input-model").html(data);//获得得反回值后，将其填入到类名为"input-model"的文本框中
    		// $("#content").text(data)
      });

    })
})
//支持IE和火狐
function Copy(ID){
       var clipBoardContent="";
       clipBoardContent=document.getElementById(ID).value;
       if(window.clipboardData){
              window.clipboardData.clearData();
              window.clipboardData.setData("Text", clipBoardContent);
       }else if(navigator.userAgent.indexOf("Opera") != -1){
              window.location = clipBoardContent;
       }else if (window.netscape){
              try{
                     netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");
              }catch (e){
                     alert("您的当前浏览器设置已关闭此功能！请按以下步骤开启此功能！\n新开一个浏览器，在浏览器地址栏输入'about:config'并回车。\n然后找到'signed.applets.codebase_principal_support'项，双击后设置为'true'。\n声明：本功能不会危极您计算机或数据的安全！");
              }
              var clip = Components.classes['@mozilla.org/widget/clipboard;1'].createInstance(Components.interfaces.nsIClipboard);
              if (!clip) return;
              var trans = Components.classes['@mozilla.org/widget/transferable;1'].createInstance(Components.interfaces.nsITransferable);
              if (!trans) return;
              trans.addDataFlavor('text/unicode');
              var str = new Object();
              var len = new Object();
              var str = Components.classes["@mozilla.org/supports-string;1"].createInstance(Components.interfaces.nsISupportsString);
              var copytext = clipBoardContent;
              str.data = copytext;
              trans.setTransferData("text/unicode",str,copytext.length*2);
              var clipid = Components.interfaces.nsIClipboard;
              if (!clip) return false;
              clip.setData(trans,null,clipid.kGlobalClipboard);
       }
       alert("已成功复制！");
       return true;
}
</script>

