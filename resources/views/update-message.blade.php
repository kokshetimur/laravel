<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="nav nav-underline justify-content-between">
    <a id="abv" class="nav-item nav-link link-body-emphasis active mx-2" href="/">Главная</a>
    
</nav> <br>
</body>
<h1>Обновление записи.</h1>
@if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>{{$error}}</li>

      @endforeach
    </ul>
  </div>
  @endif
  
<form action="{{ route('contact-update-Submit', $data->id) }}"  method="post">
  @csrf 
  <div class="form-group">
<label for="name">Enter name</label>
<input type="text" name="name" placeholder="enter name, введити имя" id="name" class="form-control"><br>

<label for="email">Enter email</label>
<input type="text" name="email"  placeholder="enter email. введити почту" id="email" class="form-control"><br>

<label for="message"> Enter message</label>
<input type="text" name="message"  placeholder="enter message, введити сообщение" id="message" class="form-control"><br>

<button type="submit" class="btn btn-success">Обновить.</button>

    </form> <br>
</body>
</html>