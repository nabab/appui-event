<?php

use bbn\X;
use bbn\Str;
/** @var $ctrl \bbn\Mvc\Controller */

$ctrl->setIcon('nf nf-oct-calendar')
  ->setUrl($ctrl->pluginUrl('appui-event').'/events')
  ->combo(_("Events"), true);
