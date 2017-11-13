<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <link href="<?= asset('css/bootstrap.min.css') ?>" rel="stylesheet" />
    <link href="<?= asset('css/material-dashboard.css?v=1.2.0') ?>" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
</head>
<body>
<br><br>
<div class="container">

    <h2 class="text-center">Polinema For Nation</h2>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="card">
                <div class="card-header" data-background-color="red">
                    <h5 class="text-center">Login Admin</h5>
                </div>
                <div class="card-content">
                    <form class="form-horizontal" role="form" method="POST" action="/login">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <div class="material-icons">person</div>
                                </div>
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>
                            </div>
                            @if ($errors->has('username'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="input-group">
                                <div class="input-group-addon">
                                    <div class="material-icons">lock</div>
                                </div>
                                <input id="password" type="password" class="form-control" name="password" required>
                            </div>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-block btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!--   Core JS Files   -->
<script src="<?= asset('js/jquery-3.2.1.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('js/bootstrap.min.js') ?>" type="text/javascript"></script>
<script src="<?= asset('js/material.min.js') ?>" type="text/javascript"></script>

<script src="<?= asset('js/material-dashboard.js?v=1.2.0') ?>"></script>
</body>
</html>