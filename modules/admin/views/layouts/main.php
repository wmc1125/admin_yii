<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <title>易后台管理系统v1.0.0</title>
    <link rel="icon" href="favicon.ico" type="image/ico">
    <meta name="keywords" content="易后台管理系统">
    <meta name="description" content="易后台管理系统">
    <?php if (isset($this->blocks['header'])): ?>
        <?= $this->blocks['header']; ?>
    <?php endif; ?>

</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php if (isset($this->blocks['footer'])): ?>
    <?= $this->blocks['footer']; ?>
<?php endif; ?>

<?php $this->endPage() ?>
