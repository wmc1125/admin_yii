<?php

namespace app\models;
use yii\base\Model;
class EntryForm extends Model
{
    public $name;
    public $email;
    public function rules()
    {
        return [
            [['name','email'],'required'],//必须
            ['email','email']//email验证
        ];
    }
}






