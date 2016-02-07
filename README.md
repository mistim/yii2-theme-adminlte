yii2-theme-admin
================

This package contains an:

- [AssetBundle for Yii Framework 2.0](http://www.yiiframework.com/doc-2.0/guide-structure-assets.html) 
which registers the resources of AdminLTE 2 and Font-Awesome 4
- [Widgets](http://www.yiiframework.com/doc-2.0/guide-structure-widgets.html) which use GUI AdminLTE 2

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

// TODO
...