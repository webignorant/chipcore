<?php
//加载公共模板
require("module_theme_style.php");
//替换内容
$lib->setvars("theme_style", $theme_style);
$lib->setvars("header_div", $header_div);
$lib->setvars("application_div", $application_div);
$lib->setfile($f);
$lib->replace($f);
$lib->showpage($f);
