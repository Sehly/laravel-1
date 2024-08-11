<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Course Details</h1>
        <div class="card">
        <div class="card-header">
        <h2>{{ $course->name }}</h2>
        </div>
        <div class="card-body">
        <p><strong>Description: </strong>{{ $course->description }}</p>
        <p><strong>Total Grade : </strong>{{ $course->total_grade }}</p>
        </div>
        </div>
        <x-a-component type="success" locate="{{ route('courses.index') }}">
    Back to List
</x-a-component>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
