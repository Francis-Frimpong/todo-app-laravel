<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5" style="max-width: 600px;">
    
        <h2 class="text-center mb-4">My Todo List</h2>

        <!-- FORM -->
        <form method="POST" action="/todos" class="d-flex gap-2 mb-4">
            @csrf

            <input type="text" name="title" class="form-control" placeholder="Enter todo">

            <button class="btn btn-primary">Add</button>
        </form>

        <!-- LIST -->
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <span class="{{ $todo->completed ? 'text-decoration-line-through text-muted' : '' }}">
                        {{ $todo->title }}
                    </span>

                    <div class="d-flex gap-2">

                        @if(!$todo->completed)
                            <form method="POST" action="/todos/{{ $todo->id }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success btn-sm">Done</button>
                            </form>
                        @endif

                        <form method="POST" action="/todos/{{ $todo->id }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </div>

                </li>
            @endforeach
        </ul>

    </div>
</body>
</html>