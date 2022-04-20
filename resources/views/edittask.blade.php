<h2>Edit Task</h2>

<form action="/editdata" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{$task->id}}">
    Task: <input type="text" name="task" value="{{$task->tasks}}"> <button type="submit">edit task</button>
</form>