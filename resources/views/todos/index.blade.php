<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container mt-5" style="max-width: 600px;">
    
        <h2 class="text-center mb-4">My Todo List</h2>

        <!-- LIST -->
        <ul class="list-group">
            @foreach($todos as $todo)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <span class="{{ $todo->completed ? 'text-decoration-line-through text-muted' : '' }}">
                        <a href="{{ route('todos.show', $todo->id) }}">
                            {{ $todo->title }}
                        </a>
                    </span>

                    <div class="d-flex gap-2">

                        @if(!$todo->completed)
                            <form method="POST" action="{{ route('todos.update', $todo->id) }}">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success btn-sm">Done</button>
                            </form>
                        @endif

                        <form method="POST" action="{{ route('todos.destroy', $todo->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>

                    </div>

                </li>
            @endforeach
        </ul>

    </div>

    <a href="{{ route('todos.create') }}" class="btn btn-primary mb-3">+ New Todo</a>
</body>
</html>