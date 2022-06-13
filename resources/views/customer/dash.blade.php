<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard</title>
<link rel="stylesheet" href="{{asset('css/customer/dashbord.css')}}">
</head>
<body>

@if(Session::get('username'))
<div id="cd">
<a id="top" href="#">Logout</a>
<a id="top" href="#" style="float: left;">ABC Company</a>
<br><br><br>
</div>

<ul id="ulist">
  <li id="list"><a id="hrf" href="{{route('userHome')}}">Home</a></li>
  <li id="list"><a id="hrf" href="#">View profile</a></li>
  <li id="list"><a id="hrf" href="#">Edit Profile</a></li>
  <li id="list"><a id="hrf" href="{{route('userLogout')}}">Logout</a></li>
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

