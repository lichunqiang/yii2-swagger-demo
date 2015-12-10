<?php

namespace app\components;

class Setup implements \yii\base\BootstrapInterface
{
    public function bootstrap($app)
    {
        $app->getUrlManager()->addRules([
            [
                'class' => 'yii\web\UrlRule',
                'pattern' => 'site/<action:\w+>',
                'route' => 'site/<action>'
            ]
        ]);
    }
}
