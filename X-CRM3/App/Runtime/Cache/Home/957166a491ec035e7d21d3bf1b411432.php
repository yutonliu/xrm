<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Quxiang/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='ktime_input' class='control-label x85'>开始时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='ktime' name='ktime'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["ktime"]); ?>'  ></td><td><label for='jtime_input' class='control-label x85'>结束时间:</label><input type='text' data-toggle='datepicker' data-pattern='yyyy-MM-dd HH:mm:ss' id='jtime' name='jtime'  data-rule='required;datetime' size='20'   value='<?php echo ($Rs["jtime"]); ?>'  ></td></tr>
<tr><td><label for='type_input' class='control-label x85'>去向类型:</label><select name='type'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("QUXIANG_TYPE"))): $i = 0; $__LIST__ = C("QUXIANG_TYPE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($type); ?>' <?php if( $type == $Rs['type'] ): ?>selected<?php endif; ?> ><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select></td></tr>
<tr></tr>
<tr><td colspan=2><label for='title_input' class='control-label x85'>去向说明:</label><textarea name='title'  cols='60' rows='5' ><?php echo ($Rs["title"]); ?></textarea></td></tr>
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