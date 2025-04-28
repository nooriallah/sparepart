<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VINCHECKER Search</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #181818;
            color: white;
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
        }

        .search-container {
            text-align: center;
            width: 100%;
            max-width: 500px;
        }

        .search-box {
            width: 100%;
            padding: 10px;
            font-size: 18px;
            border-radius: 25px;
            border: 1px solid #ccc;
        }

        .search-button {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 25px;
            border: none;
            background-color: #007bff;
            color: white;
        }

        .search-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="search-container">
        <form action="" method="post">
            <h1 class="mb-5">Find your Ideal spare part</h1>
            <input type="text" class="search-box" placeholder="Enter VIN number...">
            <button class="search-button btn">Search</button>
        </form>
    </div>
</body>

</html>
