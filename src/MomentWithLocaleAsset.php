<?php
namespace eggnukes\moment;

use Yii;

class MomentWithLocaleAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/moment/locale';
    public $depends = [
        'eggnukes\moment\MomentAsset',
    ];
    
    private $locale;

    public function init() {
        parent::init();
        $locale = strtolower(Yii::$app->language);
        $localization_exists = file_exists(Yii::getAlias($this->sourcePath . "/$locale.js"));
        if (!$localization_exists && strlen($locale) > 2) {
            $locale = substr($locale, 0, 2);
            $localization_exists = file_exists(Yii::getAlias($this->sourcePath . "/$locale.js"));
        }
        if ($localization_exists) {
            $this->locale = $locale;
            $this->js[] = "$locale.js";
        }
    }
    
    public function registerAssetFiles($view) {
        if ($this->locale) {
            if (!isset($view->js[$view::POS_READY])) {
                $view->js[$view::POS_READY] = [];
            }
            array_unshift($view->js[$view::POS_READY], "moment.locale('{$this->locale}');");
        }
        parent::registerAssetFiles($view);
    }
}
