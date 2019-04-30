<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php?s=/Home/Config" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
		    <label>筛选:</label>
            <select name="filter" data-toggle="selectpicker">
			<option value="">全部</option>
			    <?php if(is_array(C("CONFIG_CLASS"))): $i = 0; $__LIST__ = C("CONFIG_CLASS");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i;?><option value="<?php echo ($class); ?>"  <?php if($class == $_REQUEST['filter'] ): ?>selected<?php endif; ?> ><?php echo ($class); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
            </select>&nbsp;
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			  <?php if(display(CONTROLLER_NAME.'/del')){ ?><span style="float:right;" ><a href="/index.php?s=/Home/Config/del/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-red" data-toggle="doajax" data-confirm-msg="确定要清理吗？" data-icon="remove">清理</a></span><?php } ?>
			  <?php if(display(CONTROLLER_NAME.'/add')){ ?><span style="float:right;margin-right:5px;"><a href="/index.php?s=/Home/Config/add/navTabId/<?php echo CONTROLLER_NAME;?>" class="btn btn-green" data-toggle="dialog" data-width="600" data-height="450" data-id="dialog-mask" data-mask="true" data-icon="plus">新增</a></span><?php } ?>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
            <th>编号</th>
			<th>分类</th>
			<th>名称</th>
            <th>标题</th>
		    <th>类型</th>
		    <th data-order-direction="desc" data-order-field="sort">排序</th>
			<th data-order-direction="desc" data-order-field="addtime">新增时间</th>
			<th data-order-direction="desc" data-order-field="updatetime">修改时间</th>
		    <?php if(display(CONTROLLER_NAME.'/lock')){ ?><th>状态</th><?php } ?>
		    <?php if(display(CONTROLLER_NAME.'/edit')){ ?><th>编辑</th><?php } ?>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
		   <td> <?php if(is_array(C("CONFIG_CLASS"))): $i = 0; $__LIST__ = C("CONFIG_CLASS");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$class): $mod = ($i % 2 );++$i; if($class == $v['fenlei'] ): echo ($class); endif; endforeach; endif; else: echo "" ;endif; ?> </td>
           <td><?php echo ($v["name"]); ?></td>
           <td><?php echo ($v["title"]); ?></td>
		   <td> <?php if(is_array(C("CONFIG_TYPE_LIST"))): $i = 0; $__LIST__ = C("CONFIG_TYPE_LIST");if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i; if($key == $v['type'] ): echo ($type); endif; endforeach; endif; else: echo "" ;endif; ?> </td>
		   <td><?php echo ($v["sort"]); ?></td>
		   <td><?php echo ($v["addtime"]); ?></td>
           <td><?php echo ($v["updatetime"]); ?></td>
		   <?php if(display(CONTROLLER_NAME.'/lock')){ ?><td><a href="/index.php?s=/Home/Config/lock/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a></td><?php } ?>
		   <?php if(display(CONTROLLER_NAME.'/edit')){ ?><td> <a href="/index.php?s=/Home/Config/edit/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>"   class="btn btn-green btn-sm" data-toggle="dialog" data-width="600" data-height="450" data-id="dialog-mask" data-mask="true" >编辑</a></td><?php } ?>
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