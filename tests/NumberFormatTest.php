<?php

require '../vendor/autoload.php';

use \hxyou\numberFormat;

$number = '102400010';
echo numberFormat\NumberFormat::byte_format($number);