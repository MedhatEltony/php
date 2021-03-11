<?php
$PROVIDER = array(
    2661,
    2662,
    3030,
    3004,
    1200,
    800,
    200
);
$whereProv = "";
$whereProv .= "select * from patient  where  PatNum IN(";
for ($i = 0; $i < count($PROVIDER); $i++) {
    if ($i > 0) {
        $whereProv .= ",";
    }
    $whereProv .= $PROVIDER[$i];
}
echo $whereProv .= ") ";
