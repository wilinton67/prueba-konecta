<?php

$config = 'config/main.php';

include 'core/Init.php';

$init = Init::start($config)->run();
