<?php

namespace app\controllers;


use app\models\Apartments;

class FirstController extends RestController
{
    public function actionIndex(){
        return Apartments::getApartment();

    }
}