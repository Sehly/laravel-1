<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
<h1 class="text-info w-50 mt-5 m-auto"> All Tracks Data</h1>
<table class="table w-75 m-auto table-bordered mt-5">
    <thead>
        <tr>
      <th scope="col">ID</th>
      <th scope="col">TrackName</th>
      <th scope="col">TrackHours</th>
      <th scope="col">StartDate</th>
      <th scope="col">View</th>
      <th scope="col">Remove</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tracks as $track)
            <tr>
              
            <td scope="row" >{{ $track['id'] }}</td>
            <td scope="row" >{{ $track['name'] }}</td>
            <td scope="row" >{{ $track['hours'] }}</td>
            <td scope="row" >{{ $track['startDate'] }}</td>
                <td>
                   
                   <a href="{{route('tracks.view',$track->id)}}"> <button class="btn btn-warning">View</button></a>
                </td>
                <td>
                   <form action="{{ route('tracks.destroy', $track->id) }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>

                </td>
            </tr>
        @endforeach



    </tbody>
</table>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>


