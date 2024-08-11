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
        <h1>Courses</h1>
        <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>
        <table class="table table-bordered">
        <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Total Grade </th>
        <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($courses as $course)
        <tr>
        <td>{{ $course->id }}</td>
        <td>{{ $course->name }}</td>
        <td>{{ $course->description }}</td>
        <td>{{ $course->total_grade }}</td>
        <td>
        <x-a-component type="success" locate="{{ route('courses.show', $course->id) }}">
        View
        </x-a-component>
        <x-a-component type="warning" locate="{{ route('courses.edit', $course->id) }}">
        Edit
        </x-a-component>
        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <x-btn-component type="danger">
        Delete
        </x-btn-component>
        </form>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
