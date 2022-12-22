<?php
    require_once("./connectDb.php");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bloodGroup = $_POST['blood_group'];
    $genotype = $_POST['genotype'];

    $sql = "INSERT INTO patients (fullname, email, phone, blood_type, genotype) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
        echo "SQL statement failed ". mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "sssss",
            $fullname,
            $email,
            $phone,
            $bloodGroup,
            $genotype
        );
        mysqli_stmt_execute($stmt);

        header("location: /smiff/register.php?message=success");
        exit();
    }
?>