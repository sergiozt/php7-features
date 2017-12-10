<?php
/**
 * Copyright © Vaimo Group. All rights reserved.
 * See LICENSE.txt for license details.
 */

// Pre PHP 7.1 code
try {
    // Some code...
} catch (ExceptionType1 $e) {
    // Code to handle the exception
} catch (ExceptionType2 $e) {
    // Same code to handle the exception
} catch (Exception $e) {
    // ...
}


// PHP 7.1+ code
try {
    // Some code...
} catch (ExceptionType1 | ExceptionType2 $e) {
    // Code to handle the exception
} catch (\Exception $e) {
    // ...
}