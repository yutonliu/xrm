<?php if (!defined('THINK_PATH')) exit();?><div class="bjui-pageContent tableContent">
    <form action="/index.php?s=/Home/Ruku/edit/navTabId/<?php echo CONTROLLER_NAME;?>" class="pageForm" data-toggle="validate">
		<input type="hidden" name="id" value="<?php echo ($id); ?>">
        <div class="pageFormContent" data-layout-h="0">
           <table class="table table-condensed table-hover" width="100%">
		  <tbody>
		   <Tr><td style="text-align:Center"><h3><?php echo (C("WEB_COMPANY_NAME")); ?>入库单</h3></td></tr>
		   <tr><td style="text-align:Center">单号：<input type='text'  name='bianhao' data-rule='required;' size='20'   value='<?php echo ($Rs["bianhao"]); ?>'  > &nbsp;&nbsp;&nbsp;&nbsp;来源:<input type='text'  name='type' data-rule='required;' size='20'   value='<?php echo ($Rs["type"]); ?>'  > &nbsp;&nbsp;&nbsp;&nbsp;入库时间:<input type='text' data-toggle='datepicker' name='shijian'  data-rule='required;' size='20' data-min-date="%y-%M-%d"  value='<?php echo (substr($Rs["shijian"],0,10)); ?>'  ></td></tr>
          </tbody>
		  </table>
		   <table class="table table-bordered table-hover table-striped table-top"   data-toggle="tabledit">
                <thead>
                    <tr>
					    <?php if($stype == 1 ): ?><th title="序号" ><input type="text"  size="5" value="#index#"  placeholder="序号"></th>
                        <th title="产品编号"><input type="text" name="index[#index#].name"  type="text"  value="" size="10" data-toggle="lookup" data-url='/index.php?s=/Home/public/chuku/navTabId/<?php echo CONTROLLER_NAME;?>' data-group="index[#index#]" ></th>
                        <th title="产品名称"><input type="text" name="index[#index#].fenlei"  type="text"  value="" size="10"  ></th>
                        <th title="产品分类"><input type="text" name="index[#index#].leixing"  type="text"  value="" size="10" ></th>
						<th title="产品规格"><input type="text" name="index[#index#].bianhao" size="10" value=""></th>
						<th title="计量单位"><input type="text" name="index[#index#].danwei" size="10" value=""></th>
						<th title="数量"><input type="text" name="shuliang[#index#].shuliang" size="10" id="num#index#" value="0" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></th>
						<th title="备注"><input type="text" name="index[#index#].beizhu" size="10"  value="" ><input type="hidden" name="index[#index#].mid"  size="10" value="" ></th>
						<th title="" data-addtool="true" width="50">
                            <a href="/index.php?s=/Home/public/delok" class="btn btn-red row-del" data-confirm-msg="确定要删除该行信息吗？">删</a>
                        </th>
						<?php else: ?> 
                        <th title="ID" ><input type="text"  size="5" name="mid[#index#].mid" value="" readonly  placeholder="ID"></th>
                        <th title="产品编号"><input type="text" name="xbianhao[#index#]" id="index[#index#].bianhao"  type="text"  value="" size="10" data-toggle="lookup" data-url='/index.php?s=/Home/Basic/chanpin/navTabId/<?php echo CONTROLLER_NAME;?>' data-group="index[#index#]" ></th>
                        <th title="产品名称"><input type="text" name="xtitle[#index#]" id="index[#index#].title" type="text"  value="" size="10"  ></th>
                        <th title="产品分类"><input type="text" name="xfenlei[#index#]" id="index[#index#].fenlei" type="text"  value="" size="10" ></th>
						<th title="产品规格"><input type="text" name="xtype[#index#]"  id="index[#index#].type" size="10" value=""></th>
						<th title="计量单位"><input type="text" name="xdanwei[#index#]"  id="index[#index#].danwei" size="10" value=""></th>
						<th title="数量"><input type="text" name="xshuliang[#index#]" size="10" id="num#index#" value="0" onkeyup="this.value=this.value.replace(/\D/g,'')" onafterpaste="this.value=this.value.replace(/\D/g,'')"></th>
						<th title="备注"><input type="text" name="xbeizhu[#index#]" size="10"  value="" ><input type="hidden" name="xcid[#index#]" id="cid[#index#].cid"  size="10" value="" ></th>
						<th title="" data-addtool="true" width="50">
                            <a href="/index.php?s=/Home/public/delok" class="btn btn-red row-del" data-confirm-msg="确定要删除该行信息吗？">删</a>
                        </th><?php endif; ?>
                    </tr>
                </thead>
                <tbody>
                     <?php $list = M('rukus')->where(array("xid"=>$Rs['id']))->select(); ?>
					<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><tr>
		   <td><?php echo ($v["id"]); ?></td>
<td><?php echo ($v["bianhao"]); ?></td>
<td><?php echo ($v["title"]); ?></td>
<td><?php echo ($v["fenlei"]); ?></td>
<td><?php echo ($v["type"]); ?></td>
<td><?php echo ($v["danwei"]); ?></td>
<td><?php echo ($v["shuliang"]); ?></td>
<td><?php echo ($v["beizhu"]); ?></td>
<td>--</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
			<table class="table table-condensed table-hover" width="100%">
            <tbody>
<tr><td style="text-align:Center">审核人:<input type='text'  name='shenheren'  size='20'  readonly  value='<?php echo ($Rs["shenheren"]); ?>'  >  经办人:<input type='text'  name='jingban'  size='20' readonly  value='<?php echo (session('truename')); ?>'  ></td></tr>
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