<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
use bbn\Appui\Event;

/** @var bbn\Mvc\Model $model */

/** @var Event $ev */
$ev = new Event($model->db);
$types = $ev->getOptionsTextValueRef('types');
return [
  'root' => $model->pluginUrl('appui-event') .'/',
  'types' => $types
];
