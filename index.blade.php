<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>List</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ url('add') }}" class="btn btn-outline-primary">Add</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderless text-center">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>IMG</th>
                                <th>Firstname</th>
                                <th>Email</th>
                                <th>Gender</th>
                                <th>Hobbies</th>
                                <th>City</th>
                                <th colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $value)
                                    <tr>
                                        <td>{{ $value->id ?? '' }}</td>
                                        <td><img src="upload_img/{{ $value->img ?? '' }}" width="50px" height="50px" alt=""></td>
                                        <td>{{ $value->name ?? '' }}</td>
                                        <td>{{ $value->email ?? '' }}</td>
                                        <td>{{ $value->gender ?? '' }}</td>
                                        <td>{{ $value->hobbies ?? '' }}</td>
                                        <td>{{ $value->city ?? '' }}</td>
                                        <td><a href="{{ url('/edit').'/'.$value->id ?? '' }}" class="btn btn-outline-success">Edit</a></td>
                                        <td><a href="{{ url('delete').'/'.$value->id ?? '' }}" class="btn btn-outline-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>