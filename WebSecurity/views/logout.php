<?php

include_once 'app/SessionControl.inc.php';
include_once 'app/Redirect.inc.php';
include_once 'app/Config.inc.php';

SessionControl :: sessionClose();
Redirect :: redirection(server);
