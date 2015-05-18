<?php
$cmd = "src/increment";
$input = $_POST["intText"];

$dscr = array(
    0 => array("pipe", "r"),
    1 => array("pipe", "w"),
    2 => array("pipe", "w"),
);

$process = proc_open($cmd, $dscr, $pipes);

if (is_resource($process)) {

    fwrite($pipes[0], $input);
    fclose($pipes[0]);

    while($output = fgets($pipes[1]))
    {
        echo "The output is: " . $output . "<br>";
    }
    fclose($pipes[1]);

    $return_value = proc_close($process);
}
?>