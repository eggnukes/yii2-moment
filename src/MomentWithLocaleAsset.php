<?php
namespace eggnukes\moment;

class MomentWithLocaleAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/moment/locale';
    public $depends = [
        'eggnukes\moment\MomentAsset',
    ];
    
    public function registerAssetFiles($view) {
        $locale = strtolower(Yii::$app->language);
        if (file_exists(Yii::getAlias($this->sourcePath . "/$locale.js"))) {
            $this->js[] = "$locale.js";
        } elseif (strlen($locale) > 2) {
            $locale = substr($locale, 0, 2);
            if (file_exists(Yii::getAlias($this->sourcePath . "/$locale.js"))) {
                $this->js[] = "$locale.js";
            }
        }
        parent::registerAssetFiles($view);
    }
}
