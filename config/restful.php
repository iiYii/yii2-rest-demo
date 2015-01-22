<?php
return [
    'class' => 'yii\rest\UrlRule',
    'controller' => 'api/employee',  // our country api rule,
    'pluralize'=>false,
    'tokens' => ['{id}' => '<id:\\w+>']
];