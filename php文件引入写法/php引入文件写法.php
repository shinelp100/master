<?php
/* @var $this yii\web\View */
echo 123;
$this->title="这是标题";
$this->registerMetaTag(['name'=>'keyword','content'=>'靠谱理财旺财谷']);
$this->registerMetaTag(['name'=>'description','content'=>'靠谱理财旺财谷,这是详细介绍']);
$this->registerMetaTag(['charset'=>'UTF-8']);

//头位置POS_HEAD = 1;
//body前面POS_BEGIN = 2,
//body后面 = 3,
//POS_READY = 4 包裹在jQuery(document).ready()中
//POS_LOAD = 5 包裹在 jQuery(window).load()中
$this->registerCssFile('/static/default/warm-spring/css/index.css',['position'=>1]);
$this->registerJsFile('/static/flexibleJs/lib.flexible.js',['position'=>5]);
$this->registerJs('alert("hello")');
$this->registerCss('margin:10px;');
?>
<?php $this->beginBlock('block-main'); ?>
<div>
    content here
</div>
<?php $this->endBlock(); ?>
