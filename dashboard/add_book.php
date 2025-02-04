<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
        <div class="col-8">
            <h2 class="mb-4 text-center">Add Book Form</h2>
            <form>
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="institute" class="form-label">Institute:</label>
                        <input type="text" class="form-control" id="institute" placeholder="Enter Institute">
                    </div>
                    <div class="col-md-6">
                        <label for="program" class="form-label">Program:</label>
                        <input type="text" class="form-control" id="program" placeholder="Enter Program">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="courseCode" class="form-label">Course Code:</label>
                        <input type="text" class="form-control" id="courseCode" placeholder="Enter Course Code">
                    </div>
                    <div class="col-md-6">
                        <label for="callNo" class="form-label">Call No.:</label>
                        <input type="text" class="form-control" id="callNo" placeholder="Enter Call No.">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Author:</label>
                    <input type="text" class="form-control" id="author" placeholder="Enter Author Name">
                </div>

                <div class="mb-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" class="form-control" id="title" placeholder="Enter Title">
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="edition" class="form-label">Edition:</label>
                        <input type="text" class="form-control" id="edition" placeholder="Enter Edition">
                    </div>
                    <div class="col-md-6">
                        <label for="accNo" class="form-label">Acc No.:</label>
                        <input type="text" class="form-control" id="accNo" placeholder="Enter Acc No.">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="year" class="form-label">Year:</label>
                        <input type="number" class="form-control" id="year" placeholder="Enter Year">
                    </div>
                    <div class="col-md-6">
                        <label for="volume" class="form-label">Volume:</label>
                        <input type="text" class="form-control" id="volume" placeholder="Enter Volume">
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
