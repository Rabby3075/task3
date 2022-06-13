@extends('customer.dash')
@section('content')

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                <img class="rounded-circle mt-5" width="150px" src="{{asset('/storage/images/')}}/{{Session::get('image')}}">
                <!--<img class="rounded-circle mt-5" width="150px" src="{{asset('/storage/images/profile.jpg')}}">-->

                <span> </span>
            </div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>

                <form action="{{route('editProfile')}}" method="post" >
                            {{csrf_field()}}

                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">

                                     <ul>
                                         @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                         @endforeach
                                     </ul>
                                </div>
                         @endif
                         @if (\Session::has('failed'))
                         <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {!! \Session::get('failed') !!}
                        </div>
                        @endif

                        @if (\Session::has('success'))
                         <div class="alert alert-success alert-dismissible">
                        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        {!! \Session::get('success') !!}
                        </div>
                        @endif

                    <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control" placeholder="Name" name="name" id = "name" value="{{Session::get('name')}}"></div>
                    <div class="col-md-12"><label class="labels">Date</label><input type="date" class="form-control" name="dob" id = "dob" value="{{Session::get('dob')}}"></div>
                    <div class="col-md-12"><label class="labels">Phone</label><input type="tel" class="form-control" name="phone" id = "phone" placeholder="Phone number" value="{{Session::get('phone')}}"></div>
                    <div class="col-md-12"><label class="labels">Username</label><input type="text" class="form-control" name="username" id = "username" placeholder="Username" value="{{Session::get('username')}}"></div>
                    <div class="col-md-12"><label class="labels">Email</label><input type="email" class="form-control" name="email" id = "email" placeholder="something@gmail.com" value="{{Session::get('email')}}"></div>
                <div class="mt-5 text-center">
                    <input class="btn btn-primary profile-button" type="submit" value = "Update Profile">
                </div>
            </div>
        </div>

    </div>
</div>
</div>
</div>

@endsection
