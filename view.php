<?php
// Show errors
error_reporting(E_ALL);
ini_set('display_errors',1);

// Connect to database
$conn = mysqli_connect("localhost","root","","hostel_db");
if(!$conn){
    die("Database connection failed: ".mysqli_connect_error());
}

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $name = $_POST['name'] ?? '';
    $room = $_POST['room'] ?? '';
    $date = $_POST['date'] ?? '';
    $desc = $_POST['desc'] ?? '';
    $ctype = isset($_POST['ctype']) ? implode(", ", $_POST['ctype']) : "";

    $query = "INSERT INTO complaints(name, room, date, ctype, description) 
              VALUES ('$name','$room','$date','$ctype','$desc')";
    mysqli_query($conn, $query);
} else {
    header("Location: form.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Complaint Submitted</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .success-container {
        max-width: 650px;
        margin: 40px auto;
    }
    .card {
        border-radius: 15px;
        border: none;
        background: white;
    }
    .card-header {
        background-color: #064369ff;
        padding: 30px;
        border: solid 1px #064369ff;
        color: #CCE5FB;
        font-size: 1.5em;
    }
    .card-body {
        padding: 40px;
    }
    .info-item {
        padding: 10px 0;
        margin-bottom: 15px;
        border-bottom: 1px solid #e2e8f0;
    }
    .info-item:last-of-type {
        border-bottom: none;
    }
    .info-item label {
        font-weight: 600;
        margin-bottom: 5px;
        font-size: 0.9rem;
        color: #718096;
    }
    .info-item .value {
        color: #2d3748;
        font-size: 1rem;
    }
    .btn-back {
        border: solid 2px #054077ff;
        color: #CCE5FB;
        background-color: #064369ff;
        padding: 14px 30px;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
    }
</style>
</head>
<body>
<div class="success-container">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>Complaint/Feedback Submitted Successfully!</h3>
        </div>
        <div class="card-body">
            <div class="info-item">
                <label>
                    Student Name
                </label>
                <div class="value"><?php echo htmlspecialchars($name); ?></div>
            </div>

            <div class="info-item">
                <label>
                    Room Number
                </label>
                <div class="value"><?php echo htmlspecialchars($room); ?></div>
            </div>

            <div class="info-item">
                <label>
                    Date
                </label>
                <div class="value"><?php echo htmlspecialchars($date); ?></div>
            </div>

            <div class="info-item">
                <label>
                    Complaint Type
                </label>
                <div class="value"><?php echo htmlspecialchars($ctype); ?></div>
            </div>

            <div class="info-item">
                <label>
                    Description
                </label>
                <div class="value"><?php echo nl2br(htmlspecialchars($desc)); ?></div>
            </div>

            <div class="text-center mt-4">
                <a href="form.php" class="btn btn-back w-100">
                    Submit Another Complaint/Feedback
                </a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
