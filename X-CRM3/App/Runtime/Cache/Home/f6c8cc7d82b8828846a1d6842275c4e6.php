<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
    <form id="pagerForm" data-toggle="ajaxsearch" action="/index.php?s=/Home/Basic/user" method="post">
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
        <div class="bjui-searchBar">
		<label>筛选:</label>
            <select name="filter" data-toggle="selectpicker">
			<option value="">全部</option>
			    <?php if(is_array($filters)): foreach($filters as $key=>$v): ?><option value="<?php echo ($v["title"]); ?>"  <?php if($v["title"] == $_REQUEST['filter'] ): ?>selected<?php else: echo ($_REQUEST['filter']); endif; ?> ><?php echo ($v["title"]); ?></option><?php endforeach; endif; ?>
            </select>&nbsp;
             <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
            <a class="btn btn-orange" href="javascript:;" data-toggle="reloadsearch" data-clear-query="true" data-icon="undo">清空查询</a>&nbsp;
            <div class="pull-right">
                <button type="button" class="btn-blue" data-toggle="lookupback" data-lookupid="ids" data-warn="请至少选择一项" data-icon="check-square-o">选中</button>
            </div>
        </div>
    </form>
</div>
<div class="bjui-pageContent tableContent">
    <table data-toggle="tablefixed" data-width="100%" data-layout-h="0">
        <thead>
            <tr>
                <th data-order-field="id">No.</th>
				<th data-order-field="username">账号</th>
                <th data-order-field="truename">姓名</th>
                <th data-order-field="depname">部门</th>
                <th data-order-field="depname">职位</th>
                <th width="28"><input type="checkbox" class="checkboxCtrl" data-group="ids" data-toggle="icheck"></th>
                <th width="74">操作</th>
            </tr>
        </thead>
        <tbody>
		  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
             <td><?php echo ($v["id"]); ?></td>
			 <td><?php echo ($v["username"]); ?></td>
             <td><?php echo ($v["truename"]); ?></td>
		     <td><?php echo ($v["depname"]); ?> </td>
		     <td><?php echo ($v["posname"]); ?></td>
                <td><input type="checkbox" name="ids" data-toggle="icheck" value="{juid:'<?php echo ($v["id"]); ?>', juname:'<?php echo ($v["truename"]); ?>'}"></td>
                <td>
                    <a href="javascript:;" data-toggle="lookupback" data-args="{juid:'<?php echo ($v["id"]); ?>', juname:'<?php echo ($v["truename"]); ?>'}" class="btn btn-blue" title="选择本项" data-icon="check">选择</a>
                </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
    <div class="bjui-footBar">
        <div class="pages">
            <span>共 <?php echo ($totalCount); ?> 条  每页 <?php echo ($numPerPage); ?> 条</span>
        </div>
	    <div class="pagination-box" data-toggle="pagination" data-total="<?php echo ($totalCount); ?>" data-page-size="<?php echo ($numPerPage); ?>" data-page-current="<?php echo ($currentPage); ?>">
        </div>
    </div>
</div>