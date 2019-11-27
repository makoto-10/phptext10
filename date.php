<?php
$week_day_array = array('日','月','火','水','木','金','土');
$today_week_day = date('w');
$week_day = $week_day_array[$today_week_day];

echo $week_day.'曜日';
?>