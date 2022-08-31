<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:88:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\auth\admin\index.html";i:1661436820;s:86:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\layout\default.html";i:1661436820;s:83:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\meta.html";i:1661436820;s:96:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\auth\admin\common_search.html";i:1661436820;s:85:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\script.html";i:1661436820;}*/ ?>
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
                                <div class="panel panel-default panel-intro">
    <?php echo build_heading(); ?>

    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
                <div class="widget-body no-padding">
                    
<div class="commonsearch-table">
    <form class="form-horizontal form-commonsearch nice-validator n-default" role="form" action="" novalidate="novalidate">
        <fieldset>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <label for="community_code" class="control-label col-xs-4"><?php echo __('Community'); ?></label>
                    <div class="col-xs-12 col-sm-8">
                        <select id="community_code" class="form-control selectpicker show-tick" name="query[community_code]" data-live-search="true">
                            <option value="" <?php if(in_array(($query['community_code']), explode(',',""))): ?>selected<?php endif; ?>>全部</option>
                            <?php if(is_array($community) || $community instanceof \think\Collection || $community instanceof \think\Paginator): if( count($community)==0 ) : echo "" ;else: foreach($community as $key=>$vo): ?>
                            <option value="<?php echo $vo['code']; ?>"><?php echo $vo['name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="col-sm-8 col-xs-offset-4">
                        <button type="button" class="btn btn-primary" id="common_search">查询</button>
                        <button type="reset" class="btn btn-default">重置</button>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>

                    <div id="toolbar" class="toolbar">
                        <?php echo build_toolbar('refresh,add,delete'); ?>
                    </div>
                    <table id="table" class="table table-striped table-bordered table-hover" 
                           data-operate-edit="<?php echo $auth->check('auth/admin/edit'); ?>" 
                           data-operate-del="<?php echo $auth->check('auth/admin/del'); ?>" 
                           width="100%">
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>
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