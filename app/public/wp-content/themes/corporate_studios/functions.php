<?php
//add_action( 'init', 'createnewfile' );
function createnewfile()
{
    $myfile = fopen(dirname(__FILE__)."/page-podcast-production.php", "w") or die("Unable to open file!");
    $txt = "test\n";
    fwrite($myfile, $txt);
    $txt = "test\n";
    fwrite($myfile, $txt);
    fclose($myfile);

}
?>