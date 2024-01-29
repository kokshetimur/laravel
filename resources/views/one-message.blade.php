<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>{{$data->message}}</title>
</head>
<body>
<nav class="nav nav-underline justify-content-between">
    <a id="abv" class="nav-item nav-link link-body-emphasis active mx-2" href="/">Главная</a>
    
    <a class="nav-item nav-link link-body-emphasis" href="/contact">Контакты</a>
    <a class="nav-item nav-link link-body-emphasis" href="/contact/all">Все сообщения</a>
</nav> <br><br><br>


<div class=" alert alert-info">
<p > {{ $data-> message}} </p>
<p> {{ $data-> email }} </p>
<p><small> {{ $data->created_at}}   </small> </p>

<a href="{{route('contact-update', $data->id)}}" ><button class="btn btn-primary"> Редактировать </button></a>
<a href="{{route('contact-delete', $data->id)}}" ><button class="btn btn-danger"> Удалить </button></a>
</div>

</body>
</html>