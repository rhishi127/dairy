<?php

require_once dirname(__FILE__) . '../../bootstrap.php';

use Custom\ApplicationMain;

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

try {
        if (!class_exists(ApplicationMain::class)) {
            throw new RuntimeException(
                "unable to load application"
            );
        }
    } catch (RuntimeException $e) {
        echo $e->getMessage();
        exit();
    }
    ApplicationMain::init($appConfig);
?>

