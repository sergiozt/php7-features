<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7 code
$route = isset($_GET['route']) ? $_GET['route'] : 'index';

// PHP 7+ code
$route = $_GET['route'] ?? 'index';