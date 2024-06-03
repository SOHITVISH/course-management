<!DOCTYPE html>
<html>
<head>
    <title>{{ $course->title }}</title>
</head>
<body>
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    <p>{{ $course->price }}</p>
    <a href="/courses">Back to Courses</a>
</body>
</html>
