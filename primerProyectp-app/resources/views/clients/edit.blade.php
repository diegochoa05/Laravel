<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action=" {{ url('clients/') }}">

        @csrf
        @method('PUT')
        <label>
            Name:
        </label>
        <input type="text" placeholder="Maria" name="name" value="{{$client->name}}">
        <label>
            Email:
        </label>
        <input type="text" placeholder="maria@gmail.com" name="email" value="{{$client->email}}">
        <label>
            Phone number:
        </label>
        <input type="text" placeholder="6121333482" name="phone_number" value="{{$client->phone_number}}">

        <input type="hidden" name="id" value="{{$client->id}}">

        <button type="submit">
            Update
        </button>
    </form>
</body>
</html>