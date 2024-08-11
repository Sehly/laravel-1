<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Students</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
</head>
<body>
<table class="table">
  <thead class="table-dark">
  <p class="h1">All Students Data</p>
  <a href="{{ route('students.create') }}" class="btn btn-primary">Create New Student</a>
  <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Profile</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <td>{{ $student->id}}</td>
      <td>{{ $student->name}}</td>
      <td>{{ $student->email}}</td>
      <td>{{ $student->age}}</td>
      <td>{{ $student->gender}}</td>
      <td>
      @if ($student->image)
          <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" width="50">
      @else
          No Image
      @endif
      </td>
      <td>
      <x-a-component type="success" locate="{{ route('students.view', $student->id) }}">
            View
          </x-a-component>
          <x-a-component type="warning" locate="{{ route('students.edit', $student->id) }}">
            Edit
          </x-a-component>
      <!-- <a href="{{ route('students.view', $student->id) }}" class="btn btn-success btn-sm">View</a>
      <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning btn-sm">Edit</a> -->
      <form action="{{ route('students.destroy', $student->id) }}" method="POST" style="display:inline-block;">
          @csrf
          @method('DELETE')
          <x-btn-component type="danger">
            Delete
          </x-btn-component>
          <!-- <button type="submit"  class="btn btn-danger btn-sm">Delete</button> -->
      </form>
       </td>
    </tr>
    @endforeach
  </tbody>
</table>
  </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





    <!-- <h1>Students List</h1>

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif -->

