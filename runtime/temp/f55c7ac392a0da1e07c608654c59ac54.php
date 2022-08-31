<?php if (!defined('THINK_PATH')) exit(); /*a:7:{s:87:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\dashboard\index.html";i:1661436820;s:86:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\layout\default.html";i:1661436820;s:83:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\meta.html";i:1661436820;s:85:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\dashboard\one.html";i:1661436820;s:95:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\dashboard\common_search.html";i:1661436820;s:85:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\dashboard\two.html";i:1661436820;s:85:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\common\script.html";i:1661436820;}*/ ?>
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
    .sm-st {
        background:#fff;
        padding:20px;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin-bottom:20px;
        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
    }
    .sm-st-icon {
        width:60px;
        height:60px;
        display:inline-block;
        line-height:60px;
        text-align:center;
        font-size:30px;
        background:#eee;
        -webkit-border-radius:5px;
        -moz-border-radius:5px;
        border-radius:5px;
        float:left;
        margin-right:10px;
        color:#fff;
    }
    .sm-st-info {
        font-size:12px;
        padding-top:2px;
    }
    .sm-st-info span {
        display:block;
        font-size:24px;
        font-weight:600;
    }
    .orange {
        background:#fa8564 !important;
    }
    .tar {
        background:#45cf95 !important;
    }
    .sm-st .green {
        background:#86ba41 !important;
    }
    .pink {
        background:#AC75F0 !important;
    }
    .yellow-b {
        background: #fdd752 !important;
    }
    .stat-elem {

        background-color: #fff;
        padding: 18px;
        border-radius: 40px;

    }

    .stat-info {
        text-align: center;
        background-color:#fff;
        border-radius: 5px;
        margin-top: -5px;
        padding: 8px;
        -webkit-box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        box-shadow: 0 1px 0px rgba(0,0,0,0.05);
        font-style: italic;
    }

    .stat-icon {
        text-align: center;
        margin-bottom: 5px;
    }

    .st-red {
        background-color: #F05050;
    }
    .st-green {
        background-color: #27C24C;
    }
    .st-violet {
        background-color: #7266ba;
    }
    .st-blue {
        background-color: #23b7e5;
    }

    .stats .stat-icon {
        color: #28bb9c;
        display: inline-block;
        font-size: 26px;
        text-align: center;
        vertical-align: middle;
        width: 50px;
        float:left;
    }

    .stat {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: inline-block;
        margin-right: 10px; }
    .stat .value {
        font-size: 20px;
        line-height: 24px;
        overflow: hidden;
        text-overflow: ellipsis;
        font-weight: 500; }
    .stat .name {
        overflow: hidden;
        text-overflow: ellipsis; }
    .stat.lg .value {
        font-size: 26px;
        line-height: 28px; }
    .stat.lg .name {
        font-size: 16px; }
    .stat-col .progress {height:2px;}
    .stat-col .progress-bar {line-height:2px;height:2px;}

    .item {
        padding:30px 0;
    }
</style>
<div class="panel panel-default panel-intro">
    <div class="panel-heading">
        <?php echo build_heading(null, false); ?>
        <ul class="nav nav-tabs">
            <li class="active"><a href="#one" data-toggle="tab"><?php echo __('Dashboard'); ?></a></li>
            <li><a href="#two" data-toggle="tab"><?php echo __('Custom'); ?></a></li>
        </ul>
    </div>
    <div class="panel-body">
        <div id="myTabContent" class="tab-content">
            <div class="tab-pane fade active in" id="one">
    
<div class="commonsearch-table" style="margin-top:10px;">
    <form class="form-horizontal form-commonsearch nice-validator n-default" role="form" action="" novalidate="novalidate">
        <fieldset>
            <div class="row">
                <div class="form-group col-xs-12 col-sm-6 col-md-4 col-lg-3">
                    <label for="community_code" class="control-label col-xs-2 col-sm-3"><?php echo __('Community'); ?></label>
                    <div class="col-xs-10 col-sm-9">
                        <select id="community_code" class="form-control selectpicker show-tick" name="query[community_code]" data-live-search="true">
                            <?php if(is_array($community) || $community instanceof \think\Collection || $community instanceof \think\Paginator): if( count($community)==0 ) : echo "" ;else: foreach($community as $key=>$vo): ?>
                            <option value="<?php echo $vo['code']; ?>"><?php echo $vo['name']; ?></option>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                        </select>
                    </div>
                </div>
            </div>
        </fieldset>
    </form>
</div>
<hr style="margin-top:3px;margin-bottom:3px;"/>

    <div class="row">
        <div class="col-sm-3 col-xs-6">
            <div class="sm-st clearfix">
                <span class="sm-st-icon st-red"><i class="fa fa-building"></i></span>
                <div class="sm-st-info">
                    <span id="total_building"><?php echo $totaluser; ?></span>
                    <?php echo __('Total building'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">
            <div class="sm-st clearfix">
                <span class="sm-st-icon st-violet"><i class="fa fa-home"></i></span>
                <div class="sm-st-info">
                    <span id="total_house"><?php echo $totalviews; ?></span>
                    <?php echo __('Total house'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">
            <div class="sm-st clearfix">
                <span class="sm-st-icon st-blue"><i class="fa fa-male"></i></span>
                <div class="sm-st-info">
                    <span id="total_member"><?php echo $totalorder; ?></span>
                    <?php echo __('Total member'); ?>
                </div>
            </div>
        </div>
        <div class="col-sm-3 col-xs-6">
            <div class="sm-st clearfix">
                <span class="sm-st-icon st-green"><i class="fa fa-user"></i></span>
                <div class="sm-st-info">
                    <span id="total_lease"><?php echo $totalorderamount; ?></span>
                    <?php echo __('Total lease'); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="box box-info">
                <div class="box-header"><h3 class="box-title"><?php echo __('Expenses statistics'); ?></h3></div>
                <div class="box-body">
                    <div id="echart" style="height:350px;width:100%;"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top:15px;">

        <div class="col-lg-12">
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel bg-blue">
                <div class="panel-body">
                    <div class="panel-title">
                        <span class="label label-success pull-right"></span>
                        <h4><i class="fa fa-film"></i> <?php echo __('Parking space count'); ?></h4>
                    </div>
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="no-margins" id="total_parking_space">1234</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Total parking space'); ?></small></div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="no-margins" id="parking_space_percent">6754</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Parking space percent'); ?></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel bg-aqua-gradient">
                <div class="panel-body">
                    <div class="ibox-title">
                        <span class="label label-info pull-right"></span>
                        <h4><i class="fa fa-truck"></i> <?php echo __('Vehicle count'); ?></h4>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="no-margins" id="total_vehicle">1043</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Total vehicle'); ?></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-6 col-md-3">
            <div class="panel bg-purple-gradient">
                <div class="panel-body">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right"></span>
                        <h4><i class="fa fa-heart"></i> <?php echo __('Pet count'); ?></h4>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="no-margins" id="total_pet">1043</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Total pet'); ?></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-6 col-md-3">
            <div class="panel bg-green-gradient">
                <div class="panel-body">
                    <div class="ibox-title">
                        <span class="label label-primary pull-right"></span>
                        <h4><i class="fa fa-wrench"></i> <?php echo __('Repair count'); ?></h4>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-6">
                                <h1 class="no-margins" id="total_repair_pending">5302</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Pending'); ?></small></div>
                            </div>
                            <div class="col-md-6">
                                <h1 class="no-margins" id="total_repair_processing">8205</h1>
                                <div class="font-bold text-navy"><small style="color:#FFFFFF;"><?php echo __('Processing'); ?></small></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Recent activity'); ?></h3>
                    <div class="box-tools pull-right">
                        <a href="service/activity" class="btn btn-box-tool"><?php echo __('More'); ?></a>
                    </div>
                </div>
                <div class="box-body" id="latest_activity">

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title"><?php echo __('Recent repair'); ?></h3>
                    <div class="box-tools pull-right">
                        <a href="service/repair" class="btn btn-box-tool"><?php echo __('More'); ?></a>
                    </div>
                </div>
                <div class="box-body" id="latest_repair">

                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6">
            <div class="box box-info">
                <div class="box-header"><h3 class="box-title"><?php echo __('Server info'); ?></h3></div>
                <div class="box-body">
                    <table class="table table-striped">
                        <tbody>
                        <tr>
                            <td width="120px"><?php echo __('PHP version'); ?></td>
                            <td><?php echo PHP_VERSION; ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Sapi name'); ?></td>
                            <td><?php echo php_sapi_name(); ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Debug mode'); ?></td>
                            <td><?php echo \think\Config::get('app_debug')?__('Yes'):__('No'); ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Software'); ?></td>
                            <td><?php echo \think\Request::instance()->server('SERVER_SOFTWARE'); ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Upload mode'); ?></td>
                            <td><?php echo $uploadmode; ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Upload url'); ?></td>
                            <td><?php echo $config['upload']['uploadurl']; ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Timezone'); ?></td>
                            <td><?php echo date_default_timezone_get(); ?></td>
                        </tr>
                        <tr>
                            <td width="120px"><?php echo __('Language'); ?></td>
                            <td><?php echo $config['language']; ?></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
            <div class="tab-pane fade" id="two">
    <div class="row">
        <div class="col-xs-12">
            <?php echo __('Custom zone'); ?>
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