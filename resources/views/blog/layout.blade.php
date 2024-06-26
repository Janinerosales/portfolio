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
        
        }
        .container {
            max-width: 960px;
            margin: 20px auto;
            padding: 45px;
            background-color: #aec0f3;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(160, 176, 205, 0.1);
        }
        h1, h2, h3 {
            margin-top: 0;
        }
        .container {
            width: 100%;
            overflow-x: auto;
        }

        .table {
            width: 100%;
            table-layout: auto;
        }

        .table th, .table td {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .action-buttons {
            white-space: nowrap;
        }

        .table img {
            width: 50px;
            height: 50px;
        }
        tr:hover {
            background-color: #797373;
        }
    </style>
</head>
<body>
</html>
