<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"C:\Users\frank\Desktop\home-admin\public/../application/admin\view\dashboard\activity.html";i:1661436820;}*/ ?>

<ul class="nav nav-stacked">
    <?php if(is_array($activity) || $activity instanceof \think\Collection || $activity instanceof \think\Paginator): if( count($activity)==0 ) : echo "" ;else: foreach($activity as $key=>$vo): ?>
    <li>
        <a href="javascript:void(0);" src="service/activity/detail/ids/<?php echo $vo['id']; ?>">
            <span class="text"><?php echo $vo['title']; ?></span>
            <span class="text" style="float:right;"><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></span>
        </a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; if(empty($activity) || (($activity instanceof \think\Collection || $activity instanceof \think\Paginator ) && $activity->isEmpty())): ?>
    <li>暂无记录</li>
    <?php endif; ?>
</ul>