Moment.js Assets for Yii2
=========================
[Moment.js](https://momentjs.com/) and [Moment Timezone](https://momentjs.com/timezone/) assets for Yii2.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist eggnukes/yii2-moment "*"
```

or add

```
"eggnukes/yii2-moment": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Register the needed asset in your view file:

```php
\eggnukes\moment\MomentAsset::register($this);
```

```php
\eggnukes\moment\MomentWithLocaleAsset::register($this);
```

```php
\eggnukes\moment\MomentTimezoneAsset::register($this);
```

MomentTimezoneAsset depends on MomentWithLocaleAsset by default.