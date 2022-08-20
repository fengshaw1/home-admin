<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:101:"C:\Users\frank\Desktop\estate-init\estate-init\public/../application/admin\view\dashboard\repair.html";i:1587707196;}*/ ?>

<ul class="nav nav-stacked">
    <?php if(is_array($repair) || $repair instanceof \think\Collection || $repair instanceof \think\Paginator): if( count($repair)==0 ) : echo "" ;else: foreach($repair as $key=>$vo): ?>
    <li>
        <a href="javascript:void(0);" src="service/repair/detail/ids/<?php echo $vo['id']; ?>" style="color:<?php echo $vo['color']; ?>;">
            <span class="text"><?php echo $vo['device_name']; ?> （<?php echo $vo['member']['name']; ?>）</span>
            <span class="text" style="float:right;"><?php echo $vo['statusText']; ?></span>
            <span class="text" style="float:right;margin-right:20px;"><?php echo date("Y-m-d H:i:s",$vo['create_time']); ?></span>
        </a>
    </li>
    <?php endforeach; endif; else: echo "" ;endif; if(empty($repair) || (($repair instanceof \think\Collection || $repair instanceof \think\Paginator ) && $repair->isEmpty())): ?>
        <li>暂无记录</li>
    <?php endif; ?>
</ul>