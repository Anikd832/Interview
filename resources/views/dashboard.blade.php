<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            display: flex;
            gap: 15px;
        }
        nav a {
            color: white;
            text-decoration: none;
            padding: 5px 10px;
        }
        nav a:hover {
            background-color: #45a049;
            border-radius: 5px;
        }
        main {
            padding: 20px;
        }
        footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        .profile-dropdown {
            position: relative;
            display: inline-block;
        }
        .profile-dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: white;
            box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }
        .profile-dropdown-content a {
            color: black;
            text-decoration: none;
            display: block;
            padding: 10px 20px;
        }
        .profile-dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .profile-dropdown:hover .profile-dropdown-content {
            display: block;
        }
    </style>
</head>
<body>

<header>
    <div>
        <h1>My Dashboard</h1>
    </div>
    <div>
        <div class="profile-dropdown">
            <button style="background: none; border: none; color: white; cursor: pointer;">
                Profile ({{ auth()->user()->name ?? 'Guest' }}) ▼
            </button>
            <div class="profile-dropdown-content">
                <a href="{{ route('register') }}" style="background: none; border: none; color: black; width: 100%; text-align: left; padding: 10px 20px; cursor: pointer;">User Create</a>
                <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                    @csrf
                    <button type="submit" style="background: none; border: none; color: black; width: 100%; text-align: left; padding: 10px 20px; cursor: pointer;">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </div>
</header>

<main>
    <h2>Welcome to the Dashboard</h2>
    <p>This is your dashboard. Use the navigation bar above to explore.</p>
</main>

<footer>
    <p>&copy; 2024 My Application</p>
</footer>

</body>
</html>
