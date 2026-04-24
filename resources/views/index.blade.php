<!DOCTYPE html>
<html>
<head>
    <title>Todo App</title>
</head>
<body>

    <h1>My Todo List</h1>

    <!-- Todo Form -->
    <form method="POST" action="/todos">
        @csrf
        <input type="text" name="title" placeholder="Enter todo">
        <button type="submit">Add</button>
    </form>

    <hr>

    <!-- Todo List -->
    <ul>
        @foreach($todos as $todo)
            <li>
                {{ $todo->title }}

                @if($todo->completed)
                    <strong>(Done)</strong>
                @endif
            </li>
        @endforeach
    </ul>

</body>
</html>