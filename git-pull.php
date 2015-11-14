<?php
$output = shell_exec('git pull origin master');
echo "<pre>$output</pre>";
shell_exec('sudo php codecept.phar run --html');
