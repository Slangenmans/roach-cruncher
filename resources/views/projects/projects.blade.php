<html>
<body>
<h1>Projects</h1>
{{-- TODO: Implement Livewire functionality quickly create projects --}}
{{-- TODO: Link to project page --}}
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
    </tr>
    @endforeach
</table>
</body>
</html>
