<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Style CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <link href='/img/logo1.png' rel='shortcut icon'>

    <title>Royal Parking | Login </title>
</head>

<body>

    @if (session()->has('loginerror'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('loginerror') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if (session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            {{ session('berhasil') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="login-wrap" style="margin-top: 2%">

        <div class="login-html">
            <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1"
                class="tab">Sign In</label>
            <input id="tab-1" type="radio" name="tab" class="sign-up"><label for="tab-2"
                class="tab"></label>
            <div class="login-form">
                <div class="sign-in-htm">
                    <form action="/login" method="post">
                        @csrf
                        <div class="group">
                            <label for="user" class="label">username</label>
                            <input id="user" name="username" type="text" class="form-control" autofocus required>
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input id="password" name="password" type="password" class="form-control">
                        </div>

                        <div class="group">
                            {{-- <input type="submit" class="button" value="Sign In"> --}}
                            <a href="/dashboard" style="margin-top: 5px; text-align:center;" class="button">login</a>
                            <a href="/" style="margin-top: 5px; text-align:center; background:maroon;" class="button">back</a>
                        </div>
                        <div class="hr"></div>
                    </form>
                </div>

                <div class="sign-up-htm">
                    <form action="/register" method="post">
                        @csrf
                        <div class="group">
                            <label for="user" class="label">Name</label>
                            <input type="text" name="name"
                                class="form-control rounded-top @error('name') is-invalid @enderror" id="name" required
                                value="{{ old('name') }}">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Username</label>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username" required
                                value="{{ old('username') }}">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Email</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" required value="{{ old('email') }}">
                        </div>
                        <div class="group">
                            <label for="pass" class="label">Password</label>
                            <input type="password" name="password"
                                class="form-control rounded-bottom @error('password') is-invalid @enderror"
                                id="password" required value="{{ old('password') }}">
                        </div>
                        <div class="group">
                            <input type="submit" class="button" value="Sign Up">
                        </div>
                        <div class="hr"></div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>

</body>

</html>


<style type="text/css">
    body {
        margin: 0;
        color: #6a6f8c;
        background: #c8c8c8;
        font: 600 16px/18px 'Open Sans', sans-serif;
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    a {
        color: inherit;
        text-decoration: none
    }

    .login-wrap {
        width: 100%;
        margin: auto;
        max-width: 525px;
        min-height: 670px;
        position: relative;
        background: url(/img/b1.png) no-repeat center;
        box-shadow: 0 12px 15px 0 rgba(0, 0, 0, .24), 0 17px 50px 0 rgba(0, 0, 0, .19);
    }

    .login-html {
        width: 100%;
        height: 100%;
        position: absolute;
        padding: 90px 70px 50px 70px;
        background: rgba(40, 57, 101, .9);
    }

    .login-html .sign-in-htm,
    .login-html .sign-up-htm {
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        position: absolute;
        transform: rotateY(180deg);
        backface-visibility: hidden;
        transition: all .4s linear;
    }

    .login-html .sign-in,
    .login-html .sign-up,
    .login-form .group .check {
        display: none;
    }

    .login-html .tab,
    .login-form .group .label,
    .login-form .group .button {
        text-transform: uppercase;
    }

    .login-html .tab {
        font-size: 22px;
        margin-right: 15px;
        padding-bottom: 5px;
        margin: 0 15px 10px 0;
        display: inline-block;
        border-bottom: 2px solid transparent;
    }

    .login-html .sign-in:checked+.tab,
    .login-html .sign-up:checked+.tab {
        color: #fff;
        border-color: #1161ee;
    }

    .login-form {
        min-height: 345px;
        position: relative;
        perspective: 1000px;
        transform-style: preserve-3d;
    }

    .login-form .group {
        margin-bottom: 15px;
    }

    .login-form .group .label,
    .login-form .group .input,
    .login-form .group .button {
        width: 100%;
        color: #fff;
        display: block;
    }

    .login-form .group .input,
    .login-form .group .button {
        border: none;
        padding: 15px 20px;
        border-radius: 25px;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group input[data-type="password"] {
        text-security: circle;
        -webkit-text-security: circle;
    }

    .login-form .group .label {
        color: #aaa;
        font-size: 12px;
    }

    .login-form .group .button {
        background: #1161ee;
    }

    .login-form .group label .icon {
        width: 15px;
        height: 15px;
        border-radius: 2px;
        position: relative;
        display: inline-block;
        background: rgba(255, 255, 255, .1);
    }

    .login-form .group label .icon:before,
    .login-form .group label .icon:after {
        content: '';
        width: 10px;
        height: 2px;
        background: #fff;
        position: absolute;
        transition: all .2s ease-in-out 0s;
    }

    .login-form .group label .icon:before {
        left: 3px;
        width: 5px;
        bottom: 6px;
        transform: scale(0) rotate(0);
    }

    .login-form .group label .icon:after {
        top: 6px;
        right: 0;
        transform: scale(0) rotate(0);
    }

    .login-form .group .check:checked+label {
        color: #fff;
    }

    .login-form .group .check:checked+label .icon {
        background: #1161ee;
    }

    .login-form .group .check:checked+label .icon:before {
        transform: scale(1) rotate(45deg);
    }

    .login-form .group .check:checked+label .icon:after {
        transform: scale(1) rotate(-45deg);
    }

    .login-html .sign-in:checked+.tab+.sign-up+.tab+.login-form .sign-in-htm {
        transform: rotate(0);
    }

    .login-html .sign-up:checked+.tab+.login-form .sign-up-htm {
        transform: rotate(0);
    }

    .hr {
        height: 2px;
        margin: 60px 0 50px 0;
        background: rgba(255, 255, 255, .2);
    }

    .foot-lnk {
        text-align: center;
    }

</style>
