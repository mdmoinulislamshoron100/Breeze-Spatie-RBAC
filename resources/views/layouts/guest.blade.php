<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('backend/assets/images/favicon-32x32.png') }}" type="image/png">

    <link href="{{ asset('backend/assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/assets/js/pace.min.js') }}"></script>

    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet">

    <title>@yield('title', 'Auth')</title>
</head>

<body class="bg-login">

    @yield('auth-content')

    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script>
        document.querySelectorAll('.toggle-password').forEach(toggle => {
            toggle.addEventListener('click', function () {
                const input = this.closest('.input-group').querySelector('input');
                const icon = this.querySelector('i');

                if (input.type === 'password') {
                    input.type = 'text';
                    icon.classList.replace('bx-hide', 'bx-show');
                } else {
                    input.type = 'password';
                    icon.classList.replace('bx-show', 'bx-hide');
                }
            });
        });
    </script>
</body>
</html>
