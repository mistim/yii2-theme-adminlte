yii2-theme-admin
================

This package contains an:

- [AssetBundle](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) for Yii Framework 2.0
which registers the resources of [AdminLTE 2](https://github.com/almasaeed2010/AdminLTE/) 
and [Font-Awesome 4](https://github.com/FortAwesome/Font-Awesome)
- [Widgets](http://www.yiiframework.com/doc-2.0/guide-structure-widgets.html) 
which use [GUI AdminLTE 2](https://almsaeedstudio.com/preview)
- example [views](http://www.yiiframework.com/doc-2.0/guide-structure-views.html)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Run:

    php composer.phar require mistim/yii2-adminlte-asset "dev-master"
    
or add require to **composer.json**:

    "mistim/yii2-adminlte-asset": "dev-master"
    
Configuration
-------------

Add the following code to the [application configuration](www.yiiframework.com/doc-2.0/guide-structure-applications.html#application-configurations)

    'components' => [
        'view' => [
             'theme' => [
                 'pathMap' => [
                    '@app/views' => '@vendor/mistim/yii2-adminlte-asset/views'
                 ],
             ],
        ],
    ],
    
Set layout in you main controller:

    public $layout = '@vendor/mistim/yii2-theme-adminlte/src/views/layouts/main';

// TODO
...