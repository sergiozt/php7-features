<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

session_save_path('/var/tmp');
session_start(['lazy_write' => false]);
//session_start(['lazy_write' => true]);

$_SESSION['test_key'] = 'test_data';
session_write_close();

$test = 'test string';


