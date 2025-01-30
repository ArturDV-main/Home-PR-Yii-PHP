<?php

namespace app\models;

use yii\base\Model;

/**
 * EntryForm is the model behind the entry.
 */
class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}