<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
    <h1>Create Student</h1>

    <form action="/students" method="POST">
        @include('student._form')
        <button type="submit">Create Student</button>
    </form>

    <br>
    <a href="/students">Back to Students</a>
</body>
</html>
