<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
           <tbody>
		   <tr><td><label for='id_input' class='control-label x85'>ID:</label><?php echo ($Rs["id"]); ?></td><td><label for='ktime_input' class='control-label x85'>开始时间:</label><?php echo ($Rs["ktime"]); ?></td></tr>
<tr><td><label for='jtime_input' class='control-label x85'>结束时间:</label><?php echo ($Rs["jtime"]); ?></td><td><label for='type_input' class='control-label x85'>去向类型:</label><?php echo ($Rs["type"]); ?></td></tr>
<tr></tr>
<tr><td><label for='uname_input' class='control-label x85'>添加人:</label><?php echo ($Rs["uname"]); ?></td><td><label for='addtime_input' class='control-label x85'>添加时间:</label><?php echo ($Rs["addtime"]); ?></td></tr>
<tr><td><label for='uuname_input' class='control-label x85'>更新人:</label><?php echo ($Rs["uuname"]); ?></td><td><label for='updatetime_input' class='control-label x85'>更新时间:</label><?php echo ($Rs["updatetime"]); ?></td></tr>
<tr></tr>
<tr><td colspan=2><label for='title_input' class='control-label x85'>去向说明:</label><div style='display: inline-block; vertical-align: middle;'><?php echo ($Rs["title"]); ?></div></td></tr>
           </tbody>
          </table>
        </div>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>