<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
        <div class="pageFormContent" data-layout-h="0">
          <table class="table table-bordered table-striped table-hover">
        <thead>
            <tr>
                <th>No.</th>
				<th>上传人</th>
                <th>文件描述</th>
                <th>时间</th>
                <th width="74">操作</th>
            </tr>
        </thead>
        <tbody>
		  <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
             <td><?php echo ($v["id"]); ?></td>
			 <td><?php echo (truename($v['uid'])); ?></td>
             <td><a href='/<?php echo ($v['folder']); echo ($v['filename']); ?>' target=_blank><?php echo ($v['filedesc']); ?></a></td>
		     <td><?php echo ($v["addtime"]); ?> </td>
             <td>
                <a href="/index.php?s=/Home/Public/filelock/id/<?php echo ($v['id']); ?>/navTabId/<?php echo CONTROLLER_NAME;?>" data-toggle="doajax" data-confirm-msg="确定要操作吗？"><?php if($v["status"] == 1 ): ?><img src="/Public/images/ok.gif" border="0"/><?php else: ?><img src="/Public/images/locked.gif" border="0"/><?php endif; ?></a>
             </td>
            </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </tbody>
    </table>
	</div>
</div>
<div class="bjui-pageFooter">
    <ul>
      <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>