<?php
namespace eggnukes\moment;

class MomentAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/moment/min';
    public $js = [
        'moment.min.js'
    ];
}
