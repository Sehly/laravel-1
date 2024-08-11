<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4 text-center">Student Details</h1>
        <div class="card">
            <div class="card-body">
        <h5 class="card-title">{{ $student->name }}</h5>
        <p class="card-text"><strong>Email:</strong> {{ $student->email }}</p>
        <p class="card-text"><strong>Age:</strong> {{ $student->age }}</p>
        <p class="card-text"><strong>Gender:</strong> {{ $student->gender }}</p>
        @if ($student->image)
            <p><img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" style="width: 150px;"></p>
        @endif
        <!-- <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Edit</a> -->
        <x-a-component type="warning" locate="{{ route('students.edit', $student->id) }}">
            Edit
          </x-a-component>
        <form action="{{ route('students.destroy', $student->id) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        <!-- <a href="{{ route('students.index') }}" class="btn btn-secondary"><button>Back to List</button></a> -->
        <x-a-component type="success" locate="{{ route('students.index') }}">
                Back to List
          </x-a-component>   
    </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
