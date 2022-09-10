<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var $model \bbn\Mvc\Model*/

if ($model->hasData('start')) {
  
}
else {
  $event = new bbn\Appui\Event($model->db);
  $types = $event->getOptions('types');
  return [
    'types' => $types
  ];
}
