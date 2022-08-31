<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:93:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\service\repair\detail.html";i:1661436820;s:86:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\layout\default.html";i:1661436820;s:83:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\meta.html";i:1661436820;s:85:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\script.html";i:1661436820;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="__CDN__/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="__CDN__/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="__CDN__/assets/js/html5shiv.js"></script>
  <script src="__CDN__/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <style type="text/css">
    #schedulepicker {
        padding-top:7px;
    }
</style>
<form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">
    <div class="form-group">
        <label for="community_code" class="control-label col-xs-12 col-sm-2"><?php echo __('Community'); ?>:</label>
        <div class="col-xs-12 col-sm-6">
            <select id="community_code" data-rule="required" class="form-control selectpicker show-tick" name="row[community_code]" data-live-search="true">
                <?php if(is_array($community) || $community instanceof \think\Collection || $community instanceof \think\Paginator): if( count($community)==0 ) : echo "" ;else: foreach($community as $key=>$vo): ?>
                <option value="<?php echo $vo['code']; ?>" <?php if(in_array(($vo['code']), is_array($row['community_code'])?$row['community_code']:explode(',',$row['community_code']))): ?>selected<?php endif; ?>><?php echo $vo['name']; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Member'); ?>:</label>
        <div class="col-xs-12 col-sm-6">
            <input type="text" class="form-control" name="member" value="<?php echo $member['name']; ?>" readonly/>
        </div>
    </div>
    <div class="form-group">
        <label for="device_name" class="control-label col-xs-12 col-sm-2"><?php echo __('DeviceName'); ?>:</label>
        <div class="col-xs-12 col-sm-6">
            <input type="text" class="form-control" id="device_name" name="row[device_name]" value="<?php echo $row['device_name']; ?>" data-rule="required" />
        </div>
    </div>

    <div class="form-group">
        <label for="desc" class="control-label col-xs-12 col-sm-2"><?php echo __('Desc'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <textarea class="form-control" id="desc" name="row[desc]" rows="3" data-rule="required"><?php echo $row['desc']; ?></textarea>
        </div>
    </div>

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Status'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <?php echo build_radios('row[status]', ['0'=>__('Pending'),'1'=>__('Handling'),'2'=>__('Solved')],$row['status']); ?>
        </div>
    </div>

    <div class="form-group hide layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="button" class="btn btn-default btn-embossed" onClick="closeLayerWin(this)"><?php echo __('Close'); ?></button>
        </div>
    </div>

</form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="__CDN__/assets/js/require.js" data-main="__CDN__/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo $site['version']; ?>"></script>
<script type="text/javascript">
    function closeLayerWin(obj) {
        if($(obj).parents(".layui-layer-footer").length) {
            $(obj).parents(".layui-layer-footer").siblings(".layui-layer-setwin").find("a.layui-layer-close").click();
        }
    }
</script>
    </body>
</html>