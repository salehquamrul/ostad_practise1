<?php

$tuitionFee = 100000;

$commission = ($tuitionFee >= 20000) ? ($tuitionFee * .25) : (($tuitionFee >= 10000 && $tuitionFee < 20000) ? ($tuitionFee * .20) : (($tuitionFee >= 7000 && $tuitionFee < 10000) ? ($tuitionFee * .15) : ("Invalid Data.")));

echo "The commission is {$commission}."

?>
