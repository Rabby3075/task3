@extends('customer.dash')
@section('content')

<h1>
   Welcome, {{Session::get('name')}}
</h1>
@endsection
