<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Huibaos/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
		   <tr><td><label for='type_input' class='control-label x85'>汇报类型:</label><?php echo ($Rs['type']); ?></td></tr>
<tr><td><label for='title_input' class='control-label x85'>标题:</label><?php echo ($Rs["title"]); ?></td></tr>
<tr><td><label for='juname_input' class='control-label x85'>汇报给:</label><?php echo ($Rs["juname"]); ?></td></tr>
<tr><td colspan=2><label for='content_input' class='control-label x85'>汇报内容:</label><div style='display: inline-block; vertical-align: middle;'><?php echo (html_out($Rs["content"])); ?></div></td></tr></tr>
<tr><td colspan=2><label for='attid_input' class='control-label x85'>上传附件:</label><div style='display: inline-block; vertical-align: middle;'><IFRAME   src='/index.php?s=/Home/Public/attfile/attid/<?php echo ($attid); ?>/'  frameBorder=0 width='100%' height='30' scrolling=no ></IFRAME><input type='hidden' id='attid' name='attid'  value='<?php echo ($attid); ?>'  ><a href='/index.php?s=/Home/Public/uploads/attid/<?php echo ($attid); ?>/'   class='btn btn-green btn-sm' data-toggle='dialog' data-width='550' data-height='300' data-id='dialog-normal' data-mask='true' >已上传文件管理</a></div></td></tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>批注详情:</label><textarea name='beizhu'  cols='65' rows='5' ></textarea><input type="hidden" name="beizhu1" value="<?php echo ($Rs["beizhu"]); ?>"/></td></tr>
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