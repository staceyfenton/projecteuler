<?php

$current_id = (isset($_GET['p']) && file_exists('./projects' . DIRECTORY_SEPARATOR . $_GET['p'] . '.php')) ? $_GET['p'] : 1;

require_once './projects' . DIRECTORY_SEPARATOR . $current_id . '.php';