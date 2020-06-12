<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <div>
      <a href="{{url('/')}}">soccerblog</a>
    </div>
  </header>
  <div>
    @yield('content')
  </div>
</body>
</html>