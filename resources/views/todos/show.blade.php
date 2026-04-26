<!DOCTYPE html>
<html>
<head>
    <title>Show todo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div class="container mt-5">
        <h2>{{ $todo->title }}</h2>

        <p>Status: 
            @if($todo->completed)
                Completed
            @else
                Not Completed
            @endif
        </p>

        <a href="/todos" class="btn btn-link">Back</a>
    </div>
</body>
</html>