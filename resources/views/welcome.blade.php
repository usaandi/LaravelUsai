<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body>

<div class="container">
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active btn btn-primary"
               data-toggle="modal"
               data-target="#staticBackdrop"
               aria-pressed="true"
               role="button"

            >Register</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Link</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="#">Link</a>
        </li>

    </ul>
</div>
<div class="container py-3 pb-3">
    <div class="d-flex justify-content-center">
        <h1 >Hello {{$name}}!</h1>
    </div>
</div>
<!-- Modal -->
<form action="{{url('/registerr')}}" method="post">
    @csrf
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Register</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="Email">Email address</label>
                        <input type="email" class="form-control" name="email" id="Email" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                            else.</small>
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" class="form-control" name="password" id="Password">
                    </div>
                    <div class="form-group">
                        <label for="PasswordConfirmation">Password Confirmation</label>
                        <input type="password" class="form-control" name="confirmPassword" id="PasswordConfirmation">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Remember me?</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>

                </div>
            </div>
        </div>
    </div>
</form>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
