<?php

//including the database connection file
    include("config.php");
    //connect_db();
//getting id of the data from url
    $id = $_GET['id'];
/*
//deleting the row from table // actually not deleting it just unlinking from the result
    $result = mysqli_query($conn,"delete from test WHERE id='$id'");
	//close_db();
//redirecting to the display page (listdata.php in our case)*/
    

    //fetch data from test table
    $sql = "SELECT heading,summertext,datetime FROM test where id='".$id."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $heading=$row["heading"];
            $summertext=$row["summertext"];
            $datetime=$row["datetime"];
        }
    }
    /* this is a TEST
    echo $id."<br>";
    echo $heading."<br>";
    echo $summertext."<br>";
    echo $datetime."<br>"; */

    //insert data into delete table   
    $sql1 = "INSERT INTO deletetable (id,heading,summertext,datetime)
    VALUES ('".$id."','".$heading."', '".$summertext."','".$datetime."')";
    //delete from test
    $sql2 = "DELETE FROM test WHERE id='".$id."'";
    if (mysqli_query($conn, $sql1) && mysqli_query($conn, $sql2))
    {
        mysqli_close($conn);
        header("Location:listdata.php");
    }
    if(!mysqli_query($conn, $sql1))
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
    if(!mysqli_query($conn, $sql2))
    {
        echo "Error deleting record: " . mysqli_error($conn);
    }
?>

