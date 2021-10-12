<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="POST" action="{{route('movies.store')}}"></form>
    @csrf
    <label for="title">Title</label>
    <input type="text" name='title' id='title'>
    <label for="overview">overview</label>
    <textarea name="overview" id="overview" cols="30" rows="10"></textarea>
    <button type='submit'>Invia</button>
</body>
</html>