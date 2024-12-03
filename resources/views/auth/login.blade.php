
<!DOCTYPE html>
<html>
<title>Login page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    html, body {
        height: 100%;
    }

    .global-container {
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f5f5f5;
    }

    form {
        padding-top: 10px;
        font-size: 14px;
        margin-top: 30px;
    }

    .card-title {
        font-weight: 300;
    }

    .btn {
        font-size: 14px;
        margin-top: 20px;
    }

    .login-form {
        width: 330px;
        margin: 20px;
    }

    .sign-up {
        text-align: center;
        padding: 20px 0 0;
    }

    .alert {
        margin-bottom: -30px;
        font-size: 13px;
        margin-top: 20px;
    }
    .icon{

        background-color: #fff;
        border:1px solid #ccc;
        border-radius: 50%;
    }
</style>
<body>
<div class="global-container">
    <div class="card login-form">
        <div class="card-header p-0 m-0">
            <img style="width: 100%; height: 120px; object-fit: cover; object-position: top;border-radius: 5px 5px 0px 0px;"
                 src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRKhjlStfInUfiEWgt0JiRp4wrflpTJR2lJ6w&s"
                 alt="">
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <h3>Sign in</h3>
                </div>
                <div class="col-md-6 col-sm-6" style="text-align: right;">
                    <i style="padding: 8px 11px;"  class="icon fa fa-facebook"></i>
                    <i style="padding: 8px;" class="icon fa fa-twitter"></i>
                </div>
            </div>
            <div class="card-text">
                <form action="{{ route('login.submit') }}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <input placeholder="Email" type="email"
                        class="form-control @error('email') is-invalid @enderror"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                    </div>
                    <div class="form-group position-relative">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password"
                        name="password" placeholder="Password">

                        <i class="fa fa-eye position-absolute" id="togglePassword" style="top: 50%; right: 10px; transform: translateY(-50%); cursor: pointer;"></i>
                        @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                    </div>
                    <button style="width: 100%;" type="submit" class="btn btn-success btn-block">Sign in</button>
                    <div class="sign-up text-center">
                       <div class="row">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label style="margin-left: -20px;" class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                       </div>
                       <div class="col-md-6" style="text-align: right;">
                        Forgot Password
                       </div>
                    </div>
                    <div class="sign-up text-center">
                        Not a member? <span class="text-success">Sign Up</span>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- jQuery JS -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>

<!-- Password Toggle Script -->
<script>
    $(document).ready(function () {
        $('#togglePassword').on('click', function () {
            const passwordField = $('#password');
            const type = passwordField.attr('type') === 'password' ? 'text' : 'password';
            passwordField.attr('type', type);
            $(this).toggleClass('fa-eye fa-eye-slash');
        });
    });
</script>
</body>
</html>
