<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php?s=/Home/Renwu" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="12" />
				<label>截止时间：</label><input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time1']); ?>' name='time1' class='form-control' size='12' />-<input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time2']); ?>' name='time2' class='form-control' size='12' />&nbsp;<label>处理结果：</label><select name='jieguo' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($jieguolist)): foreach($jieguolist as $key=>$v): ?><option value='<?php echo ($v["jieguo"]); ?>'  <?php if($v["jieguo"] == $_REQUEST['jieguo']): ?>selected<?php else: echo ($_REQUEST['jieguo']); endif; ?> ><?php echo ($v["jieguo"]); ?></option><?php endforeach; endif; ?></select>&nbsp;
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <?php if(display(CONTROLLER_NAME.'/del')){ ?><span style="float:right;" ><a href="/index.php?s=/Home/Renwu/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span> <?php } ?>
			  <?php if(display(CONTROLLER_NAME.'/outxls')){ ?><span style="float:right;margin-right:5px;"><a href="/index.php?s=/Home/Renwu/outxls" class="btn btn-blue" data-toggle="doexport" data-confirm-msg="确定要导出吗？" data-icon="arrow-up">导出</a></span><?php } ?>
			  <?php if(display(CONTROLLER_NAME.'/add')){ ?><span style="float:right;margin-right:5px;"><a href="/index.php?s=/Home/Renwu/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span><?php } ?>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="10" height="30"></th>
            <th data-order-direction='desc' data-order-field='id'>ID</th>
<th>接收人</th>
<th data-order-direction='desc' data-order-field='jztime'>截止时间</th>
<th>关联合同</th>
<th>任务标题</th>
<th data-order-direction='desc' data-order-field='jieguo'>处理结果</th>
<th>添加人</th>
<th data-order-direction='desc' data-order-field='addtime'>添加时间</th>
<th data-order-direction='desc' data-order-field='updatetime'>更新时间</th>

			<?php if(display(CONTROLLER_NAME.'/view')){ ?><th width="40">详细</th><?php } ?>
		    <?php if(display(CONTROLLER_NAME.'/lock')){ ?><th>状态</th><?php } ?>
		    <?php if(display(CONTROLLER_NAME.'/edit')){ ?><th>编辑</th><?php } ?>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
<td><?php echo (msubstr($v["juname"],0,20)); ?></td>
<td><?php echo (substr($v["jztime"],0,10)); ?></td>
<td><?php echo (msubstr($v["mingcheng"],0,20)); ?></td>
<td><?php echo (msubstr($v["biaoti"],0,20)); ?></td>
<td><?php echo ($v["jieguo"]); ?></td>
<td><?php echo (msubstr($v["uname"],0,20)); ?></td>
<td><?php echo (substr($v["addtime"],0,10)); ?></td>
<td><?php echo (substr($v["updatetime"],0,10)); ?></td>

		   <?php if(display(CONTROLLER_NAME.'/view')){ ?><td><a href="/index.php?s=/Home/Renwu/view/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"  data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >详细</a></td><?php } ?>
		   <?php if(display(CONTROLLER_NAME.'/lock')){ ?><td><a href="/index.php?s=/Home/Renwu/lock/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td><?php } ?>
		   <?php if(display(CONTROLLER_NAME.'/edit')){ ?><td> <a href="/index.php?s=/Home/Renwu/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="900" data-height="500" data-id="dialog-mask" data-mask="true" >编辑</a></td><?php } ?>
		   </td>
         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
</div>
<div class="bjui-pageFooter">
        <div class="pages">
            <span>共 <?php echo ($totalCount); ?> 条  每页 <?php echo ($numPerPage); ?> 条</span>
        </div>
	    <div class="pagination-box" data-toggle="pagination" data-total="<?php echo ($totalCount); ?>" data-page-size="<?php echo ($numPerPage); ?>" data-page-current="<?php echo ($currentPage); ?>">
        </div>
</div>