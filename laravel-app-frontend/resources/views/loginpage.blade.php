<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="stylee.css">
</head>
<body>
  <div class="container">
    <div class="imgcontainer">
      <img src="images.png" alt="Avatar" class="avatar">
    </div>
    <form action="{{ url('loginuser')}}" method="post">
      @csrf
      <input name="email" type="text" placeholder="Username" >
      <input name="password" type="password" placeholder="Password">
            <button type="submit">Login</button>
      </div>
    </form>
    @if (Session::has ('message'))
    <p style="color: red; text-align:center">{{ Session::get ('message')}}</p>
    @endif
  </div>
</body>
</html>