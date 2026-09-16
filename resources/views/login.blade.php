<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body style="font-family: Arial; background:#f5f5f5;">

    <div style="width:350px; margin:100px auto; padding:25px; background:white; border:1px solid #ddd; border-radius:8px;">
        <h1>Login</h1>

        @if ($errors->any())
            <p style="color:red;">{{ $errors->first() }}</p>
        @endif

        <form action="/login" method="POST">
            @csrf

            <label>Name</label><br>
            <input type="text" name="name" style="width:100%; padding:8px; margin:5px 0 15px;"><br>

            <label>Password</label><br>
            <input type="password" name="password" style="width:100%; padding:8px; margin:5px 0 15px;"><br>

            <button type="submit" style="padding:9px 20px; background:#2563eb; color:white; border:0; border-radius:5px;">
                Login
            </button>
        </form>
    </div>

</body>
</html>
```
