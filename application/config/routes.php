<?php
//mi tarberakel ka es jnjem sra tex@ tanem en mi tarberakov (regexp-ov) anem
//et depqum id-n  karam stanam tvov esa tesnem nor anem
return [
  //account Controller
	'' => [
		'controller' => 'account',
		'action' => 'comment',
	],

  '[0-9-]+' => [
    'controller' => 'account',
    'action' => 'comment',
  ],

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