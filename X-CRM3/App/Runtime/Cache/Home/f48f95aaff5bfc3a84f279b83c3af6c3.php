<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Wdtxl/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='title_input' class='control-label x85'>姓名:</label><input type='text' id='title' name='title' data-rule='required;' size='20'   value='<?php echo ($Rs["title"]); ?>'  ></td><td><label for='sex_input' class='control-label x85'>性别:</label><?php if(is_array(C("BASE_SEX"))): $i = 0; $__LIST__ = C("BASE_SEX");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$sex): $mod = ($i % 2 );++$i;?><input type='radio'  name='sex' data-toggle='icheck'  data-label='<?php echo ($sex); ?>' value='<?php echo ($sex); ?>' <?php if( $sex == $Rs['sex'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
<tr><td><label for='danwei_input' class='control-label x85'>单位:</label><input type='text' id='danwei' name='danwei'  size='20'   value='<?php echo ($Rs["danwei"]); ?>'  ></td><td><label for='zhiwei_input' class='control-label x85'>职位:</label><input type='text' id='zhiwei' name='zhiwei'  size='20'   value='<?php echo ($Rs["zhiwei"]); ?>'  ></td></tr>
<tr><td><label for='dianhua_input' class='control-label x85'>联系电话:</label><input type='text' id='dianhua' name='dianhua' data-rule='required;' size='20'   value='<?php echo ($Rs["dianhua"]); ?>'  ></td><td><label for='email_input' class='control-label x85'>电子邮箱:</label><input type='text' id='email' name='email'  size='20'   value='<?php echo ($Rs["email"]); ?>'  ></td></tr>
<tr><td><label for='qq_input' class='control-label x85'>QQ:</label><input type='text' id='qq' name='qq'  size='20'   value='<?php echo ($Rs["qq"]); ?>'  ></td><td><label for='leixing_input' class='control-label x85'>类型:</label><?php if(is_array(C("TXL_LEIXING"))): $i = 0; $__LIST__ = C("TXL_LEIXING");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$leixing): $mod = ($i % 2 );++$i;?><input type='radio'  name='leixing' data-toggle='icheck'  data-label='<?php echo ($leixing); ?>' value='<?php echo ($leixing); ?>' <?php if( $leixing == $Rs['leixing'] ): ?>checked data-rule='checked'<?php endif; ?> ><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
<tr><td><label for='type_input' class='control-label x85'>分类:</label><input type='text' id='type' name='type'  size='20' data-toggle='lookup' data-url='/index.php?s=/Home/basic/txltype/navTabId/<?php echo CONTROLLER_NAME;?>'  value='<?php echo ($Rs["type"]); ?>'  ></td></tr>
<tr></tr>
<tr><td colspan=2><label for='beizhu_input' class='control-label x85'>备注:</label><textarea name='beizhu'  cols='65' rows='5' ><?php echo ($Rs["beizhu"]); ?></textarea></td></tr>
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