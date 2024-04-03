<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('blog')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #a7ebe7;
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 45px;
            background-color: #81d1b7;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(160, 176, 205, 0.1);
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
</head>
<body>

<div class="container">
    @yield('content')
</div>

</body>
</html>
