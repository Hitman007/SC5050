<?php
$output = shell_exec('git pull origin master');
echo "<pre>$output</pre>";
shell_exec('php codecept.phar run --html');
