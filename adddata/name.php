<?php
$connect = mysqli_connect("localhost", "root", "", "test");
$number = count($_POST["name"]);
if($number > 0)
{
    for($i=0; $i<$number; $i++)
    {
        if(trim($_POST["name"][$i] != ''))
        {
            $sql = "INSERT INTO item(item_name) VALUES('".mysqli_real_escape_string($connect, $_POST["name"][$i])."')";
            mysqli_query($connect, $sql);
        }
    }
    echo "Data Inserted";
}
else
{
    echo "Please Enter Name";
}
?>