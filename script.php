<?php
$output = shell_exec("git pull --all");
echo '<pre>';
echo $output;
echo '<pre>';

echo (shell_exec("git status"));
echo '<pre>';
echo "GITHUB PEDROu";
