<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">
        <h1 class="mb-4">Create New Student</h1>

        <form action="{{ route('students.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="age">Age:</label>
            <input type="number" id="age" name="age" class="form-control" required>
            </div>
            <div class="form-group">
            <label for="gender">Gender:</label>
            <select id="gender" name="gender" class="form-control" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            </select>
            </div>
            <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <div class="form-group">
            <!-- <button type="submit" class="btn btn-primary">Save</button> -->
            <x-btn-component type="primary">
                Save
            </x-btn-component>
            </div>
            <div class="form-group">
    <x-a-component type="success" locate="{{ route('students.index') }}">
    Back to List
</x-a-component>
            </div>
        </form>
    </div>
          
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>