<html>
<body>
<h1>Projects</h1>
{{-- TODO: Implement Livewire functionality quickly create projects --}}
{{-- TODO: Create table row with collumn names --}}
<table>
        @foreach($projects as $project)
        <tr>
            @foreach($project as $property)
            <th>{{ $property }}</th>
            @endforeach
    	</tr>
        @endforeach
</table>
</body>
</html>
