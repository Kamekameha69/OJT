<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library Collection Analysis Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            height: 100vh;
            flex-direction: column;
        }
        .navbar {
            background-color: #343a40;
        }
        .navbar-brand img {
            height: 40px;
        }
        .content-wrapper {
            display: flex;
            flex: 1;
        }
        .sidebar {
            width: 250px;
            background-color: #333;
            color: white;
            padding: 20px;
        }
        .sidebar h1, .sidebar h2 {
            margin: 0 0 15px;
        }
        .dropdown, .books-list {
            margin-bottom: 20px;
        }
        .dropdown select, .books-list ul {
            width: 100%;
        }
        .books-list ul {
            list-style-type: none;
            padding: 0;
        }
        .books-list li {
            padding: 8px 0;
        }
        .main-content {
            flex: 1;
            background-color: #f4f4f4;
            padding: 20px;
        }
        .card {
            background-color: white;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="logo.png" alt="Logo"> <!-- Replace with your logo path -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="content-wrapper">
        <div class="sidebar">
            <h1>Library Dashboard</h1>

            <div class="dropdown">
                <h2>Year Levels</h2>
                <select>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                    <option>3rd Year</option>
                    <option>4th Year</option>
                </select>
            </div>

            <div class="books-list">
                <h2>Books</h2>
                <ul>
                    <li>Book Title 1</li>
                    <li>Book Title 2</li>
                    <li>Book Title 3</li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <h2>Collection Analysis</h2>

            <?php
            $total_books = 1234;
            $books_borrowed = 456;
            $books_available = $total_books - $books_borrowed;
            ?>

            <div class="card">
                <h3>Total Books</h3>
                <p><?php echo $total_books; ?></p>
            </div>

            <div class="card">
                <h3>Books Borrowed</h3>
                <p><?php echo $books_borrowed; ?></p>
            </div>

            <div class="card">
                <h3>Books Available</h3>
                <p><?php echo $books_available; ?></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
