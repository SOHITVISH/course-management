<!DOCTYPE html>
<html>
<head>
    <title>Courses</title>
</head>
<body>
    <h1>All Courses</h1>
    <ul>
        @foreach ($courses as $course)
            <li>
                <a href="/courses/{{ $course->id }}">{{ $course->title }}</a> - {{ $course->price }}
            </li>
        @endforeach
    </ul>
</body>
</html>
