<?php

use bbn\X;
use bbn\Str;
/** @var bbn\Mvc\Controller $ctrl */

$ctrl->setIcon('nf nf-oct-calendar')
  ->setUrl($ctrl->pluginUrl('appui-event').'/events')
  ->combo(_("Events"), true);
