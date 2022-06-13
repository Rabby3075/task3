<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="{{asset('css/customer/dashbord.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>

@if(Session::get('username'))
<div id="cd">
<a id="top" href="{{route('userLogout')}}">Logout</a>
<a id="top" href="{{route('userHome')}}" style="float: left;">ABC Company</a>
<br><br><br>
</div>

<ul id="ulist">
  <li id="list"><a id="hrf" href="{{route('userHome')}}">Home</a></li>
  <li id="list"><a id="hrf" href="{{route('userProfile')}}">View profile</a></li>


</ul>

<div style="margin-left:25%;padding:1px 16px;height:1000px;">

@yield('content')

</div>

<div class="footer">
	<p id ="fp">The ABC Gallery of Art, founded as a gift to the nation, serves as a center of visual art, education, and culture. Our collection of more than 150,000 paintings, sculpture, decorative arts, photographs, prints, and drawings spans the history of Western art and showcases some of the triumphs of human creativity. Across 363 days a year, the ABC Gallery offers a full spectrum of special exhibitions and public programs free of charge.</p>
    <br>
    <P id ="fp">Email : abc@gmail.com</P>
    <P id ="fp">Phone : +88012345678</P>
    <br>
	<p style="text-align: center;">© Uni4, 2022 Copyright </p>
</div>
@endif
</body>
</html>

