<?php

$output = fopen('php://output', 'w');
ob_start();

echo "regular echo\n";
fwrite(STDOUT, "writing to stdout directly\n");
fwrite($output, "writing to php://output directly\n");

$ob_contents = ob_get_clean();
print "ob_contents: $ob_contents\n";

