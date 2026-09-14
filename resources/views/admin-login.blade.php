<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Laboratory</title>
    <style>
        *{box-sizing:border-box} body{margin:0;min-height:100vh;display:grid;place-items:center;padding:24px;font-family:Inter,Arial,sans-serif;background:radial-gradient(circle at top left,#138b7e 0,transparent 31%),#07192d;color:#fff}.card{width:min(100%,430px);padding:38px;background:#fff;color:#14273c;border-radius:18px;box-shadow:0 24px 70px rgba(0,0,0,.28)}.mark{width:46px;height:46px;display:grid;place-items:center;border-radius:12px;background:#102b49;color:#1bbba6;font-size:22px;margin-bottom:20px}.mark:after{content:"◇"}h1{margin:0 0 8px;font-size:26px}p{margin:0 0 28px;color:#68798a;font-size:14px;line-height:1.55}label{display:block;margin:15px 0 7px;font-weight:700;font-size:13px}input{width:100%;border:1px solid #dce5ed;border-radius:9px;padding:12px 13px;font:inherit;outline:none}input:focus{border-color:#19bda6;box-shadow:0 0 0 3px rgba(25,189,166,.12)}.remember{display:flex;align-items:center;gap:8px;margin:16px 0 22px;color:#68798a;font-size:13px}.remember input{width:auto}.button{width:100%;border:0;border-radius:9px;padding:13px;background:#0b8979;color:#fff;font-weight:800;cursor:pointer}.error{padding:10px 12px;border-radius:8px;background:#fff0f0;color:#b64242;font-size:13px;margin-bottom:15px}
    </style>
</head>
<body><main class="card"><div class="mark"></div><h1>Admin portal</h1><p>Sign in to manage laboratory content, services, appointments, and contact messages.</p>@if($errors->any())<div class="error">{{ $errors->first() }}</div>@endif<form method="POST" action="{{ route('admin.login.submit') }}">@csrf<label for="email">Email address</label><input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus><label for="password">Password</label><input id="password" type="password" name="password" required><label class="remember"><input type="checkbox" name="remember"> Keep me signed in</label><button class="button" type="submit">Sign in to admin</button></form></main></body>
</html>
