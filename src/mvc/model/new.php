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
if ($model->hasData(['id_type', 'start', 'name']) && Str::isDateSql($model->data['start'])) {
  $data = [
    'start'     => $model->data['start'],
    'name'      => $model->data['name'],
    'id_type'   => $model->data['id_type'],
    'end'       => $model->hasData('end') && Str::isDateSql($model->data['end']) ? $model->data['end'] : null,
    'id_parent' => $model->data['id_parent'] ?? null,
    'recurring' => $model->data['recurring'] ?? null,
    'cfg'       => $model->data['cfg'] ?? null
  ];
  if ($model->hasData('id', true)) {
    $model->data['res']['success'] = $ev->edit($model->data['id'], $data);
  }
  else {
    $model->data['res']['success'] = $ev->insert($data);
  }
  
  return $model->data['res'];
}
else {
  $types = $ev->getOptionsTextValue('types');
  return [
    'types' => $types
  ];
}
