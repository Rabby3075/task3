<html>
    <head>
        <title>ABC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    </head>
    <body>
        <br><br>
        <div class="container">
    <h2>User Edit</h2>
<form action="{{route('userEdit')}}" class="form-group" method="post">
    <!-- Cross Site Request Forgery-->
    {{csrf_field()}}

    <div class="col-md-4 form-group">
        <span>Name</span>
        <input type="text" name="name" value="{{$customer->name}}" class="form-control">
        @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Dob</span>
        <input type="date" name="dob" value="{{$customer->dob}}"class="form-control">
        @error('Dob')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Phone</span>
        <input type="tel" name="phone" value="{{$customer->phone}}" class="form-control">
        @error('phone')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div>
    <div class="col-md-4 form-group">
        <span>Email</span>
        <input type="email" name="email" value="{{$customer->email}}" class="form-control">
        @error('email')
            <span class="text-danger">{{$message}}</span>
        @enderror
    </div><br>
    <input type="submit" class="btn btn-success" value="Update" >     
    <a class="btn btn-success" href="{{route('userList')}}">back</a>             
</form>
</div>
    </body>
</html>
