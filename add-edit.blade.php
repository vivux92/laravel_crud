<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title>Add-edit</title>
</head>
<style>
    .error {
        color: red;
    }
</style>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Add-Edit</h3>
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="" class="btn btn-outline-primary">List</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/save') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $data->id ?? ''}}">
                            <div class="form-group">
                                <input type="file" class="form-control-file border" name="img">
                                @error('img')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Name</label>
                                <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ $data->name ?? ''}}">
                                @error('name')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Email address:</label>
                                <input type="email" class="form-control" placeholder="Enter email" name="email" value="{{ $data->email ?? ''}}">
                                @error('email')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password:</label>
                                <input type="password" class="form-control" placeholder="Enter password" name="password" value="{{ $data->password ?? ''}}">
                                @error('password')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="div">
                                Gender :
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" value="male" @if (($data->gender??'')!='female') {{ 'checked' }}@endif >Male
                                </label>
                                </div>
                                <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="gender" @if (($data->gender??'')=='female') {{ 'checked' }}@endif value="female">Female
                                </label>
                            </div>
                            <br>
                            @error('gender')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            <div class="DIV">
                                Hobbies :
                            </div>
                            @php
                                $hobbies=explode(',',($data->hobbies??''));
                            @endphp
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Cricket" @if (in_array('Cricket',$hobbies)) {{ "checked" }} @endif name="hobbies[]">Cricket
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="BGMI" @if (in_array('BGMI',$hobbies)) {{ "checked" }} @endif name="hobbies[]">BGMI
                                </label>
                            </div>   
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input type="checkbox" class="form-check-input" value="Reding" @if (in_array('Reding',$hobbies)) {{ "checked" }} @endif name="hobbies[]">Reding
                                </label>
                            </div>
                            <br>
                            @error('hobbies')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            <div class="form-group">
                                <label for="sel1">Select City:</label>
                                <select class="form-control" name="city">
                                    <option value="">select</option>
                                    <option @if (($data->city??'')=='Halvad') {{ 'selected' }}@endif value="Halvad">Halvad</option>
                                    <option value="Morbi" @if (($data->city??'')=='Morbi') {{ 'selected' }}@endif>Morbi</option>
                                    <option value="Surendranagar" @if (($data->city??'')=='Surendranagar') {{ 'selected' }}@endif>Surendranagar</option>
                                    <option value="Ahemdabad" @if (($data->city??'')=='Ahemdabad') {{ 'selected' }}@endif>Ahemdabad</option>
                                </select>
                                @error('city')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="reset" class="btn btn-warning">Reset</button>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>