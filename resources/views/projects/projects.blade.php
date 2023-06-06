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
    @livewireStyles
{{--    <title></title>--}}
</head>
<body>
<h1>Projects</h1>
{{-- TODO: Implement Livewire form to quickly create projects --}}
{{-- TODO: Unset isOpen, Created at and updated at collumns --}}
<table>
    <tr>
        <th>Project ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>isOpen</th>
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
@livewireScripts
</body>
</html>
