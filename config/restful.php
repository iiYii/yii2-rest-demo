<?php
return [
    'PUT,PATCH /users/<id>' => '/user/update',
    'DELETE /users/<id>' => '/user/delete',
    'GET,HEAD /users/<id>' => '/user/view',
    'POST /users' => '/user/create',
    'GET,HEAD /users' => '/user/index',

 	'PUT,PATCH <module>/users/<id>' => '<module>/user/update',
    'DELETE <module>/users/<id>' => '<module>/user/delete',
    'GET,HEAD <module>/users/<id>' => '<module>/user/view',
    'POST <module>/users' => '<module>/user/create',
    'GET,HEAD <module>/users' => '<module>/user/index',
];