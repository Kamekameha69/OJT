<?php

require_once("db.php");

if (isset($_POST['add_book'])) {

    $institute_id = mysqli_real_escape_string($conn, $_POST['institute_id']);
    $program_id = mysqli_real_escape_string($conn, $_POST['program_id']);
    $course_code = mysqli_real_escape_string($conn, $_POST['course_code']);
    $call_no = mysqli_real_escape_string($conn, $_POST['call_no']);
    $author = mysqli_real_escape_string($conn, $_POST['author']);
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $edition = mysqli_real_escape_string($conn, $_POST['edition']);
    $acc_no = mysqli_real_escape_string($conn, $_POST['acc_no']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);
    $volume = mysqli_real_escape_string($conn, $_POST['volume']);

    $query = "INSERT INTO book (institute_id, program_id, course_code, call_no, author, title, edition, acc_no, year, volume) 
              VALUES ('$institute_id', '$program_id', '$course_code', '$call_no', '$author', '$title', '$edition', '$acc_no', '$year', '$volume')";

    $result = mysqli_query($conn, $query);

    if ($result) {
        header("Location: ../dashboard/collection_dashboard.php");
        exit();
    } else {
        echo "Failed to add book. Error: " . mysqli_error($conn);
    }
}

$conn->close();

?>