<?php
use app\components\TextWidget;
use app\components\HtmlWidget;
?>
<?= TextWidget::widget(['message' => 'Good morning']) ?>


<?php HtmlWidget::begin(); ?>
    content that may contain <tag>'s
<?php HtmlWidget::end(); ?>



