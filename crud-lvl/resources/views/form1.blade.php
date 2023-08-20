<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/formSubmit" method="post">
        {{@csrf_field()}}
        <input type="text" name="name" placeholder="name"><br>
        @error('name')
        {{$message}}
        @enderror
        <input type="email" name="email" placeholder="email"><br>
        @error('email')
        {{$message}}
        @enderror
        <input type="number" name="phone" placeholder="phone"><br>
        @error('phone')
        {{$message}}
        @enderror
        <button type="submit">SUBMIT</button>
    </form>
</body>
</html>