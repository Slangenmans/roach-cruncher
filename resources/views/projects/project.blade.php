<html>
<body>
<p>Hello, this is project <u>{{ $title = DB::table('projects')->find($id)->title }}</u>!</p>
</body>
</html>
