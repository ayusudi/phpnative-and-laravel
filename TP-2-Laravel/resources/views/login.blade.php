<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP 2 Login</title>
</head>
<body>
  <form action="{{ url('login') }}" method="POST">
    @csrf
    <h1>Login User Karyawan</h1>
    <div>
      <label for="email">Email</label>
      <input type="email" name="email" id="email">
    </div>
    <br>
    <div>
      <label for="password">Password</label>
      <input type="password" name="password" id="password">
    </div>
    <br>
    <input type="submit" value="Submit">
  </form>
</body>
</html>