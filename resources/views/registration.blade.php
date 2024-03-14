<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
</head>
<body>
    <form action="register" method="POST">
        @csrf
        @error('name')
            <div>{{ $message }}</div>
        @enderror
        <input type="text" name="name" placeholder="name" value="{{old('name')}}"><br><br>
        @error('email')
            <div>{{ $message }}</div>
        @enderror
        <input type="email" name="email" placeholder="email" value="{{old('email')}}"><br><br>
        @error('password')
            <div>{{ $message }}</div>   
        @enderror
        <input type="password" name="password" placeholder="password"><br><br>
        @error('password_confirmation')
            <div>{{ $message }}</div>
        @enderror
        <input type="password" name="password_confirmation" placeholder="confirm password">
        <button type="submit">register</button>
    </form>
</body>
</html>