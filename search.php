<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .search-container {
            text-align: center;
            margin: 100px auto;
        }
        .search-box {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .search-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="search-container">
        <h2>Search Page</h2>
        <form action="search.php" method="GET">
            <input type="text" name="query" class="search-box" placeholder="Enter your search query" required>
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>
</body>
</html>
