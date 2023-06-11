<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
<head>
{{--    <title></title>--}}
</head>
<body>
<h1>Projects</h1>
<form method="POST" action="/projects">
    @csrf
    <input type="text" name="input_title" id="input_title" class="@error('input_title') required @enderror">
    
    @error('input_title')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <input type="text" name="input_description" id="input_description" class="@error('input_description') required @enderror">

    @error('input_description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Create</button>
</form>
{{-- TODO: Unset isOpen, Created at and updated at collumns --}}
<table>
    <tr>
        <th>Project ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
    @foreach($projects as $project)
        @php($id_row = $project->id)
        <tr>
            @foreach($project as $property)
                <td>{{ $property }}</td>
            @endforeach
            <td>
                <button><a href="{{ route('project', $id_row) }}">Edit</a></button>
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
