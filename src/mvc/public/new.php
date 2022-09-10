<?php

use bbn\X;
use bbn\Str;
/** @var $ctrl \bbn\Mvc\Controller */

if (empty($ctrl->post)) {
  $ctrl->combo(_("New event"), true);
}
else {
  $ctrl->action();
}
