<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Institute Form</title>
    <link rel="icon" href="../asset/logo.png" type="image/png" sizes="64x64">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-6">
            <h2 class="mb-4 text-center">Add Institute</h2>
            <form action="../config/function.php" method="post">
                <div class="mb-3">
                    <label for="institute_name" class="form-label fw-bold">Institute:</label>
                    <input type="text" class="form-control" id="institute_name" name="institute_name" placeholder="Enter Institute" required>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" name="add_institute">Submit</button>
                </div>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>