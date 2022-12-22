<?php
    require_once("./connectDb.php");

    $patientId = $_POST['patient_id'];
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM patients WHERE uuid='".$patientId."' AND '".$phone."' ";
    $result = mysqli_query($conn, $sql);
    $records = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);

    if ($records == 0) {
        echo "<script type='text/javascript'>
            window.location = '/smiff/login.html'
            alert('incorrect username and password');
        </script>";
    } else {
        header("Location:/smiff/recipient-history.php");
        exit();
    }
?>
