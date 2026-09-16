<!DOCTYPE html>
<html>
<head>
    <title>Dashboard User</title>
</head>
<body style="font-family:Arial; background:#f5f5f5;">

    <div style="width:600px; margin:80px auto; padding:30px; background:white; border:1px solid #ddd; border-radius:8px;">
        <h1>Dashboard User</h1>

        <p>Selamat datang, <b>{{ Auth::user()->name }}</b></p>
        <p>Role: {{ Auth::user()->role }}</p>

        <form action="/logout" method="POST">
            @csrf
            <button type="submit" style="padding:8px 15px; background:#dc2626; color:white; border:0; border-radius:5px;">
                Logout
            </button>
        </form>
    </div>

</body>
</html>
```
