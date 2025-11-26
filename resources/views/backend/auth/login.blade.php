<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-box {
            width: 350px;
            padding: 25px;
            background: white;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.15);
        }

        .login-box h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 14px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            color: white;
            font-size: 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background: #0069d9;
        }

        .error {
            color: red;
            text-align: center;
            margin-bottom: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

<div class="login-box">

    <h2>Đăng nhập</h2>

  

    <form method="post" action="{{route('auth.login')}}">
        @csrf

        <div class="form-group">
            <label>Email:</label>
            <input type="email" name="email" 
                   placeholder="Nhập email" value="{{ old('email') }}">
            @if ($errors->has('email'))
            <span class="error-message"> * {{
               $errors ->first('email')    
            }}</span>

            @endif
        </div>
        <div class="form-group">
            <label>Mật khẩu:</label>
            <input type="password" name="password" placeholder="Nhập mật khẩu">
            @if ($errors->has('password'))
            <span class="error-message"> * {{
               $errors ->first('password')    
            }}</span>
            @endif
        </div>
        <button type="submit">Đăng nhập</button>
    </form>

</div>

</body>
</html>
