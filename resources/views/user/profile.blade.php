<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .top-header {
        background-color: #007bff;
        color: #fff;
        padding: 10px 0;
    }

    .navbar {
        display: flex;
        justify-content: center;
    }

    .container {
        width: 80%;
        margin: 0 auto;
    }

    .menu {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
    }

    .menu li {
        margin-right: 20px;
    }

    .menu li:last-child {
        margin-right: 0;
    }

    .menu li a {
        color: #fff;
        text-decoration: none;
        padding: 10px;
        transition: background-color 0.3s;
    }

    .menu li a:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }

    .body-content {
        padding: 20px 0;
        background-color: #f0f0f0;
    }

    .container .body-content {
        text-align: center;
    }

    /* Adjusting form styles */
    .profile-form {
        text-align: left;
    }

    .profile-form .form-group {
        margin-bottom: 20px;
    }

    .profile-form label {
        display: block;
        margin-bottom: 5px;
    }

    .profile-form input {
        width: calc(100% - 12px);
        padding: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .profile-form button {
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .profile-form button:hover {
        background-color: #0056b3;
    }

    div.error {
        color: red;
        font-weight: 600;
        margin-top: 6px;
    }

    .alert {
        padding: 15px;
        margin-top: 20px;
        background-color: #d4edda;
        border: 1px solid #0dc337;
        color: #155724;
        border-radius: 5px;
        position: relative;
    }

    .alert-error {
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        color: #721c24;
    }

    delete-button {
            background-color: #dc3545;
            border: none;
            color: white;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .delete-button:hover {
            background-color: #c82333;
        }
    </style>
</head>

<body>

    <header class="top-header">
        <nav class="navbar">
            <div class="container">
                <ul class="menu">
                    <li><a href="#">Profile</a></li>
                    @isset($user)
                        <li><a href="#">{{ $user->name }}</a></li>
                    @endisset
                </ul>
            </div>
        </nav>
    </header>

    <div class="body-content">
        <div class="container">
            <div class="alert" id="success-alert">
                Success Alert
            </div>

            <h2>Profile</h2>
            <form class="profile-form" method="post" action="{{route('user.profile')}}">
                @csrf <!-- Don't forget to add CSRF token -->
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" value="{{$user->name}}">
                </div>

                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" id="phone" name="phone" value="{{$user->phone}}">
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address" value="{{$user->address}}">
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" value="{{$user->email}}">
                </div>

                <div class="form-group">
                    <button type="submit">Save Changes</button>
                </div>
                @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

            </form>

             <!-- Delete Profile Button -->
             <form method="POST" action="{{ route('user.profile.delete', ['id' => $user->id]) }}">
                @csrf
                @method('DELETE')
                <div class="form-group">
                    <button type="submit" class="delete-button">Delete Profile</button>
                </div>
            </form>

        </div>
    </div>

</body>

</html>
@include('layouts.usr')