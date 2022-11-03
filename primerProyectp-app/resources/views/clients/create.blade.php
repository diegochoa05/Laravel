<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="http://127.0.0.1:8000/clients">

        @csrf
        <label>
            Name:
        </label>
        <input type="text" placeholder="Maria" name="name">
        <label>
            Email:
        </label>
        <input type="text" placeholder="maria@gmail.com" name="email">
        <label>
            Phone number:
        </label>
        <input type="text" placeholder="6121333482" name="phone_number">

        <button type="submit">
            Save
        </button>
    </form>
</body>
</html>