<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>View All Complaints</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .container {
        max-width: 900px;
        margin: 40px auto;
    }
    .card {
        border-radius: 15px;
        border: none;
        background: white;
        margin-bottom: 20px;
    }
    .card-header {
        background-color: #253C6A;
        padding: 30px;
        border: solid 1px #449EF4;
        color: #CCE5FB;
        font-size: 1.5em;
    }
    .card-body {
        padding: 40px;
    }
    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
        color: #2d3748;
    }
    .form-control {
        padding: 5px;
        background-color: aliceblue;
        color: #253C6A;
        font-size: 1.2em;
        border-radius: 8px;
        border: 2px solid #e2e8f0;
    }
    .form-control:focus {
        border-color: #4a5568;
    }
    .btn-search {
        border: solid 2px #449EF4;
        color: #CCE5FB;
        background-color: #253C6A;
        padding: 14px 30px;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
    }
    .complaint-card {
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 10px;
        padding: 20px;
        margin-bottom: 15px;
    }
    .complaint-header {
        border-bottom: 2px solid #253C6A;
        padding-bottom: 10px;
        margin-bottom: 15px;
    }
    .complaint-label {
        font-weight: 600;
        color: #718096;
        font-size: 0.9rem;
        margin-bottom: 5px;
    }
    .complaint-value {
        color: #2d3748;
        font-size: 1rem;
        margin-bottom: 15px;
    }
    .no-complaints {
        text-align: center;
        padding: 40px;
        color: #718096;
        font-size: 1.2rem;
    }
    .btn-back {
        border: solid 2px #449EF4;
        color: #CCE5FB;
        background-color: #253C6A;
        padding: 10px 20px;
        font-weight: 600;
        border-radius: 8px;
    }
</style>
</head>
<body>
<div class="container">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>View All Complaints</h3>
        </div>
        <div class="card-body">
            <form method="get" action="">
                <div class="mb-4">
                    <label class="form-label">Enter Room Number</label>
                    <input type="text" class="form-control" name="room"  required>
                </div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-search flex-fill">Search Complaints</button>
                    <a href="form.php" class="btn btn-back">Back to Form</a>
                </div>
            </form>
        </div>
    </div>

    <?php
    if(isset($_GET['room']) && !empty($_GET['room'])) {
        // Connect to database
        $conn = mysqli_connect("localhost","root","","hostel_db");
        if(!$conn){
            die("Database connection failed: ".mysqli_connect_error());
        }

        $room = mysqli_real_escape_string($conn, $_GET['room']);
        $query = "SELECT * FROM complaints WHERE room = '$room' ORDER BY id DESC";
        $result = mysqli_query($conn, $query);

        if(mysqli_num_rows($result) > 0) {
            echo '<div class="mt-4">';
            echo '<h4 style="color: #253C6A; margin-bottom: 20px;">Complaints for Room: ' . htmlspecialchars($room) . '</h4>';
            
            while($row = mysqli_fetch_assoc($result)) {
                echo '<div class="complaint-card">';
                echo '<div class="complaint-header">';
                echo '<strong style="color: #253C6A; font-size: 1.1rem;">Complaint #' . $row['id'] . '</strong>';
                echo '</div>';
                
                echo '<div class="complaint-label">Student Name</div>';
                echo '<div class="complaint-value">' . htmlspecialchars($row['name']) . '</div>';
                
                echo '<div class="complaint-label">Date</div>';
                echo '<div class="complaint-value">' . htmlspecialchars($row['date']) . '</div>';
                
                echo '<div class="complaint-label">Complaint Type</div>';
                echo '<div class="complaint-value">' . htmlspecialchars($row['ctype']) . '</div>';
                
                echo '<div class="complaint-label">Description</div>';
                echo '<div class="complaint-value">' . nl2br(htmlspecialchars($row['description'])) . '</div>';
                
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<div class="no-complaints">';
            echo '<p>No complaints found for room: <strong>' . htmlspecialchars($room) . '</strong></p>';
            echo '</div>';
        }

        mysqli_close($conn);
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
