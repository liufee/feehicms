<?php
return [
    'id' => 'app-common-tests',
    'basePath' => dirname(__DIR__),
    'components' => [
        'user' => [
            'class' => 'yii\web\User',
            'identityClass' => 'backend\models\User',
        ],
        'i18n' => [
            'translations' => [//多语言包设置
                'cms*' => [
                    'class' => yii\i18n\PhpMessageSource::className(),
                    'basePath' => '@cms/frontend/messages',
                    'sourceLanguage' => 'en-US',
                    'fileMap' => [
                        'cms' => 'app.php',
                    ],
                ],
            ]
        ],
    ],
];
