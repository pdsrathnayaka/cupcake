<?php

    $con = mysqli_connect("localhost","root","");

    if (!$con)
    {
        echo 'not connected to sever';
    }

    if (!mysqli_select_db($con,'tutorial'))
    {
        echo 'Database not selctied';
    }

    $Name = $_POST['name'];
    $Email = $_POST['email'];
    $Phone = $_POST['phone'];
    $Message = $_POST['message'];

    $sql = "INSERT INTO contact (Name,Email,Phone,Message) VALUES ('$Name','$Email','$Phone','$Message')";

    if (!mysqli_query($con,$sql))
    {
        echo 'Not Inserted';
    }
    else
    {
        echo 'Inserted';
    }

    header("refresh:2; url=form.html");

?>
