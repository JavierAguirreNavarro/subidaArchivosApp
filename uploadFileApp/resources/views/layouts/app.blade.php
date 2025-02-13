<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload File App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1;
        }
        .navbar {
            background-color:rgb(0, 0, 0);
        }
        .navbar-brand {
            color: #fff !important;
        }
        .card {
            background: rgba(255, 255, 255, 0.8);
            border: none;
        }
        .card-header {
            background: rgba(0, 123, 255, 0.8);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="{{ route('subir.index') }}">Upload File App</a>
    </nav>
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>