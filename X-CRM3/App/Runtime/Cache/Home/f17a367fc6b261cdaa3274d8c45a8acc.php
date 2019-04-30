<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageHeader">
<form id="pagerForm" data-toggle="ajaxsearch" action="/index.php?s=/Home/Tjhetong" method="get">
	<input type="hidden" name="pageSize" value="<?php echo ($numPerPage); ?>">
    <input type="hidden" name="pageCurrent" value="<?php echo ((isset($_REQUEST['pageNum']) && ($_REQUEST['pageNum'] !== ""))?($_REQUEST['pageNum']):1); ?>">
        <div class="bjui-searchBar">
			<label>时间：</label><input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time1']); ?>' name='time1' class='form-control' size='12' />-<input type='text' data-toggle='datepicker' value='<?php echo ($_REQUEST['time2']); ?>' name='time2' class='form-control' size='12' />
			&nbsp;<label>业务员：</label><select name='jingban' data-toggle='selectpicker'><option value=''>全部</option><?php if(is_array($jingbanlist)): foreach($jingbanlist as $key=>$v): ?><option value='<?php echo ($v["jingban"]); ?>'  <?php if($v["jingban"] == $_REQUEST['jingban']): ?>selected<?php else: echo ($_REQUEST['jingban']); endif; ?> ><?php echo ($v["jingban"]); ?></option><?php endforeach; endif; ?></select>&nbsp;
             <button type="submit"  class="btn-default" data-icon="search">查询</button>
             <a class="btn btn-orange" href="javascript:;" onclick="$(this).navtab('reloadForm', true);" data-icon="undo">清空查询</a>
			 <?php if(display(CONTROLLER_NAME.'/dayin')){ ?><span style="float:right;margin-right:5px;"><a href="<?php echo U('tjhetong/dayin',array('time1'=>$_REQUEST['time1'],'time2'=>$_REQUEST['time2'],'jingban'=>$_REQUEST['jingban']));?>" target="_blank" class="btn btn-blue" data-icon="print">打印</a></span><?php } ?>
		</div> 
</form>
    
</div>
<div class="bjui-pageContent tableContent">
     <table data-toggle="tablefixed" data-width="100%" data-layout-h="0" data-nowrap="true">
            <thead>
<tr>
<th rowspan="2">统计时间</th>
<th rowspan="2">合同总金额</th>
<th rowspan="2">已回款</th>
<th rowspan="2">待回款</th>
<th rowspan="2">已开票</th>
<th rowspan="2">已付款/支出</th>
<th colspan="2" align="center">统计</th>
</tr>
<tr>
<th>实际收款</th>
<th>实际付款</th>
</tr>
            </thead>
            <tbody>
<?php if(isset($_REQUEST['jingban']) && $_REQUEST['jingban'] != ''){ $jingban=" and jingban='".$_REQUEST['jingban']."'"; } if(isset($_REQUEST['time1']) && $_REQUEST['time1'] != ''&&isset($_REQUEST['time2']) && $_REQUEST['time2'] != ''){ $nian=substr($_REQUEST['time1'],0,4); }else{ $nian=date("Y",time()); } if(isset($_REQUEST['time1']) && $_REQUEST['time1'] != ''&&isset($_REQUEST['time2']) && $_REQUEST['time2'] != ''){ ?>
<!---////////////搜索///////--->
<tr>
<td><?php echo ($_REQUEST['time1']); ?>-<?php echo ($_REQUEST['time2']); ?> <?php echo ($_REQUEST['jingban']); ?></td>
<td><?php echo M('hetong')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('jine'); ?></td>
<td><?php echo M('hetong')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('yishou'); ?></td>
<td><?php echo M('hetong')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('weishou'); ?></td>
<td><?php echo M('hetong')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('kaipiao'); ?></td>
<td><?php echo M('hetong')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('yifu'); ?></td>
<td><?php echo M('shou')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('jine'); ?></td>
<td><?php echo M('fukuan')->where("addtime > '".$_REQUEST['time1']." 00:00:00' and addtime < '".$_REQUEST['time2']." 59:59:59'".$jingban)->sum('jine'); ?></td>
</tr>
<Tr><Td colspan="8" height="50"></td></tr>
<!---////////////搜索///////--->
<?php } for ($i=1;$i<13;$i+=1){ ?>
<tr>
<td><?php echo ($nian); ?>年<?php echo ($i); ?>月</td>
<td><?php if($i<10){ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('jine'); }else{ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('jine'); } ?></td>
<td><?php if($i<10){ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('yishou'); }else{ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('yishou'); } ?></td>
<td><?php if($i<10){ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('weishou'); }else{ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('weishou'); } ?></td>
<td><?php if($i<10){ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('kaipiao'); }else{ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('kaipiao'); } ?></td>
<td><?php if($i<10){ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('yifu'); }else{ echo M('hetong')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('yifu'); } ?></td>
<td><?php if($i<10){ echo M('shou')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('jine'); }else{ echo M('shou')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('jine'); } ?></td>
<td><?php if($i<10){ echo M('fukuan')->where("addtime like '%".$nian."-%' and addtime like '%0".$i."-%'".$jingban)->sum('jine'); }else{ echo M('fukuan')->where("addtime like '%".$nian."-%' and addtime like '%".$i."-%'".$jingban)->sum('jine'); } ?></td>
         </tr> 
<?php } ?>
            </tbody>
        </table>
</div>
<div class="bjui-pageFooter">
    <ul>
       <li><button type="button" class="btn-close" data-icon="close">关闭</button></li>
    </ul>
</div>