<?php
namespace eggnukes\moment;

class MomentAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/moment';
    public $js = [
        YII_DEBUG ? 'dist/moment.js' : 'min/moment.min.js'
    ];
}
