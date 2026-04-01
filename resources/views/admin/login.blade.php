<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monter Admin Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .admin-login-page {
            min-height: 100vh;
            background: #0d0d0d;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 30px 20px;
        }

        .admin-login-box {
            width: 100%;
            max-width: 420px;
            background: #151515;
            border: 1px solid #2a2a2a;
            border-radius: 14px;
            padding: 35px 28px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.35);
        }

        .admin-login-box h1 {
            color: #ffffff;
            font-size: 28px;
            margin-bottom: 8px;
            text-align: center;
            letter-spacing: 1px;
        }

        .admin-login-box p {
            color: #aaaaaa;
            font-size: 14px;
            text-align: center;
            margin-bottom: 25px;
        }

        .admin-error {
            background: rgba(255, 0, 0, 0.08);
            border: 1px solid rgba(255, 0, 0, 0.2);
            color: #ff8a8a;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 18px;
            font-size: 14px;
        }

        .admin-form-group {
            margin-bottom: 18px;
        }

        .admin-form-group label {
            display: block;
            color: #ffffff;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .admin-form-group input {
            width: 100%;
            padding: 12px 14px;
            background: #0f0f0f;
            border: 1px solid #2c2c2c;
            border-radius: 8px;
            color: #ffffff;
            font-size: 14px;
            outline: none;
            box-sizing: border-box;
        }

        .admin-form-group input:focus {
            border-color: #666666;
        }

        .admin-login-btn {
            width: 100%;
            padding: 13px;
            background: #ffffff;
            color: #000000;
            border: none;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: 0.25s ease;
        }

        .admin-login-btn:hover {
            opacity: 0.9;
        }
    </style>
</head>
<body>

    <div class="admin-login-page">
        <div class="admin-login-box">
            <h1>MONTER ADMIN</h1>
            <p>Restricted access panel</p>

            @if(session('error'))
                <div class="admin-error">
                    {{ session('error') }}
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login') }}">
                @csrf

                <div class="admin-form-group">
                    <label for="email">Admin Email</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="admin-form-group">
                    <label for="password">Admin Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <button type="submit" class="admin-login-btn">Login</button>
            </form>
        </div>
    </div>

</body>
</html>