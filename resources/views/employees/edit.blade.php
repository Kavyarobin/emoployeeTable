<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark">

    <!-- Links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="/">Employees</a>
      </li>
    </ul>

  </nav>

  @if($message = Session::get('success'))
    <div class="alert alert-success alert-block">
      <strong>{{ $message }}</strong>
    </div>
  @endif
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-sm-6">
        <div class="card mt-3 p-3">
          <form method="POST" action="/employees/store" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Enter Your Name" value="{{ old('name') }}" />
              @if($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Gender</label>
              <select class="form-control" name="gender">
                <option>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
              </select>
              @if($errors->has('gender'))
                <span class="text-danger">{{ $errors->first('gender') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Date of Birth</label>
              <input type="date" name="dob" class="form-control" value="{{ old('dob') }}" />
              @if($errors->has('dob'))
                <span class="text-danger">{{ $errors->first('dob') }}</span>
              @endif
            </div>

            <div class="form-group">
              <textarea class="form-control" name="address" cols="30" rows="4" placeholder="Enter Your address">{{ old('address') }}</textarea>
              @if($errors->has('address'))
                <span class="text-danger">{{ $errors->first('address') }}</span>
              @endif
            </div>

            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Enter Your Email" value="{{ old('email') }}" />
              @if($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="form-group">
              <input type="text" name="phone" class="form-control" placeholder="Enter Phone Number" value="{{ old('phone') }}" />
              @if($errors->has('phone'))
                <span class="text-danger">{{ $errors->first('phone') }}</span>
              @endif
            </div>

            <div class="form-group">
              <select name="department_id" id="department_id" class="form-control">
                <option value="select department">Select Department</option>
                @foreach($departments as $department)
                  <option value="{{ $department->id }}">{{ $department->name }}</option>
                @endforeach
              </select>
            </div>

            <div class="form-group">
              <select name="designation_id" id="designation_id" class="form-control">
                <option value="">Select Designation</option>
              </select>
            </div>

            <div class="form-group">
              <label>Date of Join</label>
              <input type="date" name="doj" class="form-control" value="{{ old('doj') }}" />
              @if($errors->has('doj'))
                <span class="text-danger">{{ $errors->first('doj') }}</span>
              @endif
            </div>

            <div class="form-group">
              <label>Image</label>
              <input type="file" name="image" class="form-control"/>
              @if($errors->has('image'))
                <span class="text-danger">{{ $errors->first('image') }}</span>
              @endif
            </div>

            <button type="submit" class="btn btn-success">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  
</body>

</html>