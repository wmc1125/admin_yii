<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
$this->title = '城市';
$title = '副标题';
?>
    <h1><?= Html::encode($this->title) ?></h1>
<h2><?= Html::encode($title) ?></h2>
    The controller ID is: <?= $this->context->id ?>
    <ul>
        <?php foreach ($countries as $country): ?>
            <li>
                <?= Html::encode("{$country->name} ({$country->code})") ?>:
                <?= $country->population ?>
            </li>
        <?php endforeach; ?>
    </ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>

<?= yii\widgets\Breadcrumbs::widget([
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]) ?>






































