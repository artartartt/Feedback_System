<?php
//mi tarberakel ka es jnjem sra tex@ tanem en mi tarberakov (regexp-ov) anem
//et depqum id-n  karam stanam tvov esa tesnem nor anem
return [
  //main Controller
	'' => [
		'controller' => 'main',
		'action' => 'index',
	],

  '[0-9-]+' => [
    'controller' => 'main',
    'action' => 'index',
  ],

  //account controller
	'account/comment' => [
		'controller' => 'account',
		'action' => 'comment',
	],
	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
  'account/admin' => [
    'controller' => 'account',
    'action' => 'admin',
  ],
  'account/admin/[0-9-]+' => [
    'controller' => 'account',
    'action' => 'admin',
  ],



];