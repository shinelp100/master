<?php
/* @var $this yii\web\View */
$this->title="旺财钱包收益";
//$this->registerMetaTag(['name'=>'keyword','content'=>'靠谱理财旺财谷']);
//$this->registerMetaTag(['name'=>'description','content'=>'靠谱理财旺财谷,这是详细介绍']);

//头位置POS_HEAD = 1;
//body前面POS_BEGIN = 2,
//body后面 = 3,
//POS_READY = 4 包裹在jQuery(document).ready()中
//POS_LOAD = 5 包裹在 jQuery(window).load()中
$this->registerCssFile('/static/default/common/css/base.css?v=1.2',['position'=>1]);
$this->registerCssFile('/static/default/common/css/comfont.css',['position'=>1]);
$this->registerCssFile('/static/default/wallet/css/income.css',['position'=>1]);
$this->registerJsFile('/static/flexibleJs/lib.flexible.js',['position'=>1]);
?>
<?php $this->beginBlock('block-main'); ?>
<div>
    <section class="flex-content">
        <div class="header">

        </div>
    </section>
</div>
<?php $this->endBlock(); ?>
