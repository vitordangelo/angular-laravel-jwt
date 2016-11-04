<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Angular-Laravel Authentication</title>
    <link rel="stylesheet" href="{{ asset('/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">

</head>
<body ng-app="authApp">

    <div class="container">
        <div ui-view></div>
    </div>

    <script src="{{ asset('/bower_components/angular/angular.min.js') }}"></script>
    <script src="{{ asset('/bower_components/angular-ui-router/release/angular-ui-router.min.js') }}"></script>
    <script src="{{ asset('/bower_components/satellizer/dist/satellizer.min.js') }}"></script>

    <script src="{{ asset('/app/js/app.js') }}"></script>
    <script src="{{ asset('/app/js/controllers/authController.js') }}"></script>
    <script src="{{ asset('/app/js/controllers/userController.js') }}"></script>
</body>
</html>
