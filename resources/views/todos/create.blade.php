<!DOCTYPE html>
<html>
<head>
    <title>Create App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

        <div class="container mt-5" style="max-width: 600px;">
            <h2 class="mb-4">Create Todo</h2>

            <form method="POST" action="/todos">
                @csrf

                <input type="text" name="title" class="form-control mb-3" placeholder="Enter todo">

                <button class="btn btn-primary">Save</button>
            </form>

            <a href="/todos" class="btn btn-link mt-3">Back</a>
        </div>
  
</body>
</html>

