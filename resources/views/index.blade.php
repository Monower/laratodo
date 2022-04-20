<h2>Todo app with laravel</h2>

<form action="add" method="post">
    {{ csrf_field() }}
    Task: <input type="text" name="task" placeholder="enter task"> <button type="submit">add task</button>
</form>

<h2>All Tasks</h2>
<table border="1">
    <tr>
        <td>ID</td>
        <td>Task</td>
        <td>Operation</td>
    </tr>
    @foreach ($tasks as $task)
        <tr>
            <td>{{$task->id}}</td>
            <td>{{$task->tasks}}</td>
            <td><a href="edit/{{$task->id}}">Edit</a> <a href="del/{{$task->id}}">Delete</a></td>
        </tr>
    @endforeach
</table>