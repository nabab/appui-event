<?php
/**
 * What is my purpose?
 *
 **/

use bbn\X;
use bbn\Str;
/** @var $model \bbn\Mvc\Model*/

if ($model->hasData('action', true)) {
  $res    = ['success' => false];
  $ev     = new bbn\Appui\Event($model->db);
  $action = $model->data['action'];
  unset($model->data['action']);

  switch ($action) {
    case 'delete':
      if ($model->hasData('id', true)) {
        $res['success'] = $ev->delete($model->data['id']);
      }

      break;

    case 'insert':
      if ($model->hasData(['start', 'id_type'], true)
          && ($id_event = $ev->insert($model->data))
      ) {
        $res['success'] = true;
        $res['data'] = $ev->get($id_event);
      }

      break;

    case 'update':
      if ($model->hasData(['start', 'id_type', 'id'], true)) {
        $res['success'] = $ev->edit($model->data['id'], $model->data);
      }

      break;
  }

  return $res;
}

