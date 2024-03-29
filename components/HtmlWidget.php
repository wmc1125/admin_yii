<?php
namespace app\components;

use yii\base\Widget;
use yii\helpers\Html;

class HtmlWidget extends Widget
{
    public function init()
    {
        parent::init();
        ob_start();
    }

    public function run()
    {
        $content = ob_get_clean();
        return Html::encode($content);
    }
}