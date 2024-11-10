<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var bbn\Mvc\Model $model */

$ev = new bbn\Appui\Event($model->db);
$cfg = $ev->getClassCfg();
$grid = new bbn\Appui\Grid($model->db, $model->data, [
  'table' => $cfg['table'],
  'fields' => $cfg['fields']
]);

return $grid->getDataTable();
