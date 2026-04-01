<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Monter Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        .admin-dashboard-page {
            min-height: 100vh;
            background: #0d0d0d;
            color: #ffffff;
            padding: 40px 20px;
        }

        .admin-dashboard-container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .admin-dashboard-top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }

        .admin-dashboard-top h1 {
            margin: 0;
            font-size: 32px;
            letter-spacing: 1px;
        }

        .admin-logout-btn {
            background: #ffffff;
            color: #000000;
            border: none;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
        }

        .admin-dashboard-card {
            background: #151515;
            border: 1px solid #2a2a2a;
            border-radius: 14px;
            padding: 25px;
        }

        .admin-dashboard-card h2 {
            margin-top: 0;
            margin-bottom: 10px;
        }

        .admin-dashboard-card p {
            color: #bbbbbb;
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="admin-dashboard-page">
        <div class="admin-dashboard-container">
            <div class="admin-dashboard-top">
                <h1>MONTER ADMIN</h1>

                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button type="submit" class="admin-logout-btn">Logout</button>
                </form>
            </div>

            <div class="admin-dashboard-card">
                <h2>Welcome</h2>
                <p>You are logged into the Monter admin panel.</p>
            </div>
        </div>
    </div>

</body>
</html>