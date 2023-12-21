<?php

namespace app\models;

use yii\db\ActiveRecord;

class Apartments extends ActiveRecord
{
    public static function tableName(){
        return 'apartments';
    }

    public static function getApartment(){
        print_r(self::find()->all());
    }

}