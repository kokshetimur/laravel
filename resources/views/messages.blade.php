<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Все сообщения</title>
</head>
<body>
<nav class="nav nav-underline justify-content-between">
    <a id="abv" class="nav-item nav-link link-body-emphasis active mx-2" href="/">Главная</a>
    <a class="nav-item nav-link link-body-emphasis mx-2" href="/about">Про нас</a>
    <a class="nav-item nav-link link-body-emphasis" href="/contact">Контакты</a>
    <a class="nav-item nav-link link-body-emphasis" href="/contact/all">Все сообщения</a>
</nav> <br><br><br>
@foreach($data as $el)
<div class=" alert alert-info">
<h3> {{ $el-> name }} </h3>
<p> {{ $el-> email }} </p>
<p><small> {{ $el->created_at}}   </small> </p>
<a href="{{route('one', $el->id) }}"><button class="btn btn-warning"> Детальнее  </button></a>
</div>
@endforeach
</body>
</html>