<?php

include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';

include_once 'app/User.inc.php';
include_once 'app/Entry.inc.php';
include_once 'app/Comment.inc.php';

include_once 'app/RepoUser.inc.php';
include_once 'app/RepoEntry.inc.php';
include_once 'app/RepoComment.inc.php';

echo $entry -> getTitle();
echo "<br>";
echo $entry -> getText();
