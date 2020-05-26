<?php
namespace eggnukes\moment;

class MomentTimezoneAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/moment-timezone/builds';
    public $js = [
        YII_DEBUG ? 'moment-timezone-with-data.js' : 'moment-timezone-with-data.min.js'
    ];
    public $depends = [
        'eggnukes\moment\MomentWithLocaleAsset',
    ];
}
