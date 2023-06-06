<html>
<head>
    @livewireStyles
</head>
<body>
<h1>Projects</h1>
{{-- TODO: Implement Livewire form to quickly create projects --}}
<table>
    <tr>
        <th>Project ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Open</th>
        <th>Created at</th>
        <th>Updated at</th>
    </tr>
    @foreach($projects as $project)
    <tr>
        @foreach($project as $property)
        <td>{{ $property }}</td>
        @endforeach
            <td >    @livewire('edit-button') </td>
    </tr>
    @endforeach
</table>
@livewireScripts
</body>
</html>
