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
<table class="table">
  <tbody>


    <tr>
      <th scope="col">ID</th>
      <td scope="row" >{{ $track['id'] }}</td>
    </tr>  
      <th scope="col">TrackName</th>
      <td scope="row" >{{ $track['name'] }}</td>
    </tr>  
      <th scope="col">TrackHours</th>
      <td scope="row" >{{ $track['hours'] }}</td>
    </tr>
    <th scope="col">StartDate</th>
    <td scope="row" >{{ $track['startDate'] }}</td>
    </tr>
      <td scope="row" >
      <a href="{{route('tracks.index')}}"><button class="btn btn-warning">Back</button></a>
      </td>

    </tr>
  </tbody>
</table>    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>
</html>