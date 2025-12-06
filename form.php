<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hostel Complaint Form</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
    body {
        background-color: #f5f5f5;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-container {
        max-width: 650px;
        margin: 40px auto;
    }
    .card {
        border-radius: 15px;
        border: none;
        background: white;
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
    .form-control, .form-select {
        padding: 5px;
        background-color: aliceblue;
        color: #253C6A;
        font-size: 1.2em;
        border-radius: 8px;
        border: 2px solid #e2e8f0;
    }
    .form-control:focus, .form-select:focus {
        border-color: #4a5568;
    }
    .form-check {
        padding: 12px;
        margin-bottom: 10px;
    }
    .form-check-input {
        width: 1.3em;
        height: 1.3em;
        margin-top: 0;
        cursor: pointer;
    }
    .form-check-input:checked {
        background-color: #253C6A;
        border-color: #253C6A;
    }
    .form-check-label {
        cursor: pointer;
        margin-left: 8px;
        font-weight: 500;
    }
    .btn-submit, .btn-reset {
        border: solid 2px #449EF4;
        color: #CCE5FB;
        background-color: #253C6A;
        padding: 14px 30px;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
    }
    .complaint-type-section {
        background: #f7fafc;
        padding: 20px;
        border-radius: 10px;
        border: 2px solid #e2e8f0;
    }
</style>
</head>
<body>
<div class="form-container">
    <div class="card shadow-lg">
        <div class="card-header text-center">
            <h3>Hostel Complaint/Feedback Form</h3>
        </div>
        <div class="card-body">
            <form action="view.php" method="post">
                <div class="mb-4">
                    <label class="form-label">
                        Student Name
                    </label>
                    <input type="text" class="form-control" name="name"  required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Room Number
                    </label>
                    <input type="text" class="form-control" name="room"  required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Date
                    </label>
                    <input type="date" class="form-control" name="date" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Complaint/Feedback Type
                    </label>
                    <div class="complaint-type-section">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Water Issue" id="water">
                            <label class="form-check-label" for="water" style="border:none; background:none;">
                                Water Issue
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Electricity Issue" id="electricity">
                            <label class="form-check-label" for="electricity" style="border:none; background:none;">
                                Electricity Issue
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Food Complaint" id="food">
                            <label class="form-check-label" for="food" style="border:none; background:none;">
                                Food Complaint
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Cleanliness" id="clean">
                            <label class="form-check-label" for="clean" style="border:none; background:none;">
                                Cleanliness
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Other" id="other">
                            <label class="form-check-label" for="other" style="border:none; background:none;">
                                Other
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Description
                    </label>
                    <textarea class="form-control" name="desc" rows="4"  required></textarea>
                </div>

                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-submit flex-fill">
                        Submit Complaint/Feedback
                    </button>
                    <button type="reset" class="btn btn-reset">
                        CLEAR
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
