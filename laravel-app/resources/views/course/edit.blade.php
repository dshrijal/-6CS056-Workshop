<!DOCTYPE html>
<html>
<head>
    <title>Edit Course</title>
</head>
<body>
    <h1>Edit Course</h1>

    <form action="/courses/{{ $course->id }}" method="POST">
        @method('PUT')
        @include('course._form')
        <button type="submit">Update Course</button>
    </form>

    <br>
    <a href="/courses">Back to Courses</a>
</body>
</html>
