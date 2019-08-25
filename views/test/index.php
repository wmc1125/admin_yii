<?php
use yii\helpers\Html;
$title = '副标题';
$this->registerMetaTag(['name' => 'keywords', 'content' => 'yii, framework, php']);
$this->registerMetaTag(['name' => 'title', 'content' => 'yii']);

$this->registerLinkTag([
    'title' => 'Live News for Yii',
    'rel' => 'alternate',
    'type' => 'application/rss+xml',
    'href' => 'http://www.yiiframework.com/rss.xml/',
]);



?>
<?= $this->head() ?>




<?php $this->beginContent('@app/views/layouts/test.php'); ?>

...child layout content here...

<?php $this->endContent(); ?>


<!--使用数据块-->

<?php if (isset($this->blocks['block1'])): ?>
    <?= $this->blocks['block1'] ?>
<?php else: ?>
    ... default content for block1 ...
<?php endif; ?>


<?php if (isset($this->blocks['block2'])): ?>
    <?= $this->blocks['block2'] ?>
<?php else: ?>
    ... default content for block2 ...
<?php endif; ?>


<?php if (isset($this->blocks['block3'])): ?>
    <?= $this->blocks['block3'] ?>
<?php else: ?>
    ... default content for block3 ...
<?php endif; ?>



































