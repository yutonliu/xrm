<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Renwu/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='juname_input' class='control-label x85'>接收人:</label><input type='text' id='juname' name='juname'  size='20' data-toggle='lookup' data-url='/index.php?s=/Home/basic/user/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["juname"]); ?>'  ></td></tr>
<tr><td><label for='jztime_input' class='control-label x85'>截止时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='jztime' name='jztime'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["jztime"]); ?>'  ></td></tr>
<tr><td><label for='mingcheng_input' class='control-label x85'>关联合同:</label><input type='text' id='mingcheng' name='mingcheng'  size='20' data-toggle='lookup' data-url='/index.php?s=/Home/basic/hetong/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["mingcheng"]); ?>'  ></td><td><label for='biaoti_input' class='control-label x85'>任务标题:</label><input type='text' id='biaoti' name='biaoti' data-rule='required;' size='20'   value='<?php echo ($Rs["biaoti"]); ?>'  ></td></tr>
<tr><td colspan=2><input type='hidden' id='juid' name='juid'  size='0'   value='<?php echo ($Rs["juid"]); ?>'  ></td></tr></tr>
<tr><td colspan=2><input type='hidden' id='hid' name='hid'  size='0'   value='<?php echo ($Rs["hid"]); ?>'  ></td></tr></tr>
<tr><td colspan=2><label for='content_input' class='control-label x85'>任务内容:</label><div style='display: inline-block; vertical-align: middle;'><textarea name='content'   data-toggle='kindeditor' data-minheight='150' data-items='fontname, fontsize, |, forecolor, hilitecolor, bold, italic, underline, removeformat, |, justifyleft, justifycenter, justifyright, insertorderedlist, insertunorderedlist, |, emoticons, image, link'><?php echo ($Rs["content"]); ?></textarea></div></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='/index.php?s=/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ><a href='/index.php?s=/Home/Public/uploads/attid/<?php echo ($attid); ?>/'   class='btn btn-green btn-sm' data-toggle='dialog' data-width='550' data-height='300' data-id='dialog-normal' data-mask='true' >已上传文件管理</a></div></td></tr>
           </tbody>
          </table>
        </div>
    </form>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
       <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>