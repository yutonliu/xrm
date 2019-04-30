<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Shou/shenhe/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="xid" value="<?php echo ($xid); ?>">
        <div class="pageFormContent" data-layout-h="0">
		<?php if($shenhe != '审核通过'): ?><table class="table table-condensed table-hover" width="100%">
           <tbody>
			<tr><td><label for='type_input' class='control-label x85'>审核状态:</label><select name='title'  data-toggle='selectpicker' ><option value=''>请选择</option><?php if(is_array(C("SHENHE"))): $i = 0; $__LIST__ = C("SHENHE");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><option value='<?php echo ($type); ?>' <?php if( $type == $Rs['title'] ): ?>selected<?php endif; ?> ><?php echo ($type); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></td></tr>
			<tr><td><label for='title_input' class='control-label x85'>审核意见:</label><input type='text'  name='content'  size='50'   value='<?php echo ($Rs["content"]); ?>'  ></td></tr>
<tr>
           </tbody>
          </table> <?php else: endif; ?>
		  <table class="table table-condensed table-hover" width="100%">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th>ID</th>
<th>审核状态</th>
<th>审核意见</th>
<th>审核人</th>
<th>审核时间</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo (msubstr($v["id"],0,20)); ?></td>
<td><?php echo (msubstr($v["title"],0,20)); ?></td>
<td><?php echo (msubstr($v["content"],0,80)); ?></td>
<td><?php echo (msubstr($v["uname"],0,20)); ?></td>
<td><?php echo (msubstr($v["addtime"],0,20)); ?></td>

         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
        </div>
    </form>
</div>
<?php if($shenhe != '审核通过'): ?><div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">取消</button></li>
       <li><button type="submit" class="btn-default" data-icon="save">保存</button></li>
    </ul>
</div>
 <?php else: endif; ?>