<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hostel Complaint Form</title>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
    body {
        background-color: #f5f5f5;
        min-height: 100vh;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .form-container {
        max-width: 650px;
        margin: 40px auto;
        animation: fadeIn 0.6s ease-in;
    }
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(20px); }
        to { opacity: 1; transform: translateY(0); }
    }
    .card {
        border-radius: 15px;
        border: none;
        overflow: hidden;
        background: white;
    }
    .card-header {
        background-color: #2d3748;
        padding: 30px;
        border: none;
    }
    .card-header h3 {
        margin: 0;
        font-weight: 700;
        font-size: 1.8rem;
    }
    .card-header p {
        margin: 5px 0 0 0;
        opacity: 0.9;
        font-size: 0.95rem;
    }
    .card-body {
        padding: 40px;
    }
    .form-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 8px;
    }
    .form-control, .form-select {
        border-radius: 8px;
        border: 2px solid #e2e8f0;
        padding: 12px 16px;
        transition: all 0.3s ease;
    }
    .form-control:focus, .form-select:focus {
        border-color: #4a5568;
        box-shadow: 0 0 0 3px rgba(74, 85, 104, 0.1);
    }
    .form-check {
        padding: 12px;
        margin-bottom: 10px;
        border-radius: 8px;
        transition: all 0.2s ease;
    }
    .form-check:hover {
        background-color: #f7fafc;
    }
    .form-check-input {
        width: 1.3em;
        height: 1.3em;
        margin-top: 0;
        cursor: pointer;
    }
    .form-check-input:checked {
        background-color: #2d3748;
        border-color: #2d3748;
    }
    .form-check-label {
        cursor: pointer;
        margin-left: 8px;
        font-weight: 500;
    }
    .btn-submit {
        background-color: #2d3748;
        border: none;
        padding: 14px 30px;
        font-weight: 600;
        font-size: 1.1rem;
        border-radius: 8px;
        transition: all 0.3s ease;
    }
    .btn-submit:hover {
        background-color: #1a202c;
        transform: translateY(-2px);
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
        <div class="card-header text-white text-center">
            <h3>Hostel Complaint/Feedback Form</h3>
            
        </div>
        <div class="card-body">
            <form action="view.php" method="post">
                <div class="mb-4">
                    <label class="form-label">
                        Student Name
                    </label>
                    <input type="text" class="form-control" name="name" placeholder="Enter your full name" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Room Number
                    </label>
                    <input type="text" class="form-control" name="room" placeholder="e.g., 101, A-205" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Date
                    </label>
                    <input type="date" class="form-control" name="date" required>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Complaint Type
                    </label>
                    <div class="complaint-type-section">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Water Issue" id="water">
                            <label class="form-check-label" for="water">
                                Water Issue
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Electricity Issue" id="electricity">
                            <label class="form-check-label" for="electricity">
                                Electricity Issue
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Food Complaint" id="food">
                            <label class="form-check-label" for="food">
                                Food Complaint
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Cleanliness" id="clean">
                            <label class="form-check-label" for="clean">
                                Cleanliness
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="ctype[]" value="Other" id="other">
                            <label class="form-check-label" for="other">
                                Other
                            </label>
                        </div>
                    </div>
                </div>

                <div class="mb-4">
                    <label class="form-label">
                        Description
                    </label>
                    <textarea class="form-control" name="desc" rows="4" placeholder="Please provide details about your complaint..." required></textarea>
                </div>

                <button type="submit" class="btn btn-submit text-white w-100">
                    Submit Complaint
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
