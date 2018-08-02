<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    'modules' => [
        'redactor' => [
            'class' => 'yii\redactor\RedactorModule',
            'uploadDir' => './assets/uploadfolder',
            'uploadUrl' => './assets/uploadfolder',
            'imageAllowExtensions'=>['jpg','png','gif']
        ],
    ],
];
