@php
    $subject = $subject ?? '';
    $body = $body ?? '';
    $user = $user ?? null;
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        /* Add your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #3f51b5;
            color: #ffffff;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        .content {
            padding: 20px;
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>{{ $subject }}</h1>
        </div>
        <div class="content">
            <p>{!! $body !!}</p>
            <p>User: {{ $user->name }}</p>
            <p>Email: {{ $user->email }}</p>
         <p>date: {{ $user->created_at }}</p> 
        </div>

    </div>
</body>
</html>
