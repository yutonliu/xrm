<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php?s=/Home/Dwtxl" method="post">
	
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
	 
        <div class="bjui-searchBar">
            <label>关键词：</label><input type="text" value="<?php echo ($_REQUEST['keys']); ?>" name="keys" class="form-control" size="15" />
			<label>部门:</label>
            <select name="depname" data-toggle="selectpicker">
			<option value="">全部</option>
			    <?php if(is_array($dlist)): foreach($dlist as $key=>$v): ?><option value="<?php echo ($v["depname"]); ?>"  <?php if($v["depname"] == $_REQUEST['depname'] ): ?>selected<?php else: echo ($_REQUEST['depname']); endif; ?> ><?php echo ($v["depname"]); ?></option><?php endforeach; endif; ?>
            </select>&nbsp;
			<label>职位:</label>
            <select name="posname" data-toggle="selectpicker">
			<option value="">全部</option>
			    <?php if(is_array($plist)): foreach($plist as $key=>$v): ?><option value="<?php echo ($v["posname"]); ?>"  <?php if($v["posname"] == $_REQUEST['posname'] ): ?>selected<?php else: echo ($_REQUEST['posname']); endif; ?> ><?php echo ($v["posname"]); ?></option><?php endforeach; endif; ?>
            </select>&nbsp;
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
              <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
        <thead>
            <tr>
            <th width="30" height="30"></th>
            <th>编号</th>
            <th>真实姓名</th>
		    <th>所在部门</th>
	    	<th>担任职位</th>
		    <th>固定电话</th>
            <th>移动电话</th>
            <th>电子邮箱</th>
			<th>QQ</th>
            <th>内线/短号</th>
            </tr>
        </thead>
        <tbody>

          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td></td>
		   <td><?php echo ($v["id"]); ?></td>
           <td><?php echo ($v["truename"]); ?></td>
		   <td><?php echo ($v["depname"]); ?> </td>
		   <td><?php echo ($v["posname"]); ?></td>
		   <td><?php echo ($v["tel"]); ?></td>
           <td><?php echo ($v["phone"]); ?></td>
           <td><?php echo ($v["email"]); ?></td>
		   <td><?php echo ($v["qq"]); ?></td>
           <td><?php echo ($v["neixian"]); ?></td>
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