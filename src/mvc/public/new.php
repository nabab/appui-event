<?php

use bbn\X;
use bbn\Str;
/** @var bbn\Mvc\Controller $ctrl */

if (empty($ctrl->post)) {
  $ctrl->combo(_("New event"), true);
}
else {
  $ctrl->action();
}
