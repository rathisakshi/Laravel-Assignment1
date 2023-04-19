
<!DOCTYPE html>
<html>
<head>
    <title>Your Form Title</title>
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">
</head>
<body>
<h1> Insert Records </h1>
@if(session('status'))
    {{session('status')}}
@endif
<form method="post" action="{{ url('tasks') }}">
    @csrf
    <label for="title">Title:</label>
    <input type="text" id="title" name="Title"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="Description"></textarea><br>

    <input type="submit" value="Submit">
</form>
<div class="table-container">
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tasks as $task)
            <tr>
                <td>{{ $task->id }}</td>
                <td>{{ $task->Title }}</td>
                <td>{{ $task->Description }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>

