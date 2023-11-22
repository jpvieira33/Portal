<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | {{env('APP_NAME')}}</title>
    @routes
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue", "resources/css/admin/app.css"])
    @inertiaHead
</head>
<body>
@inertia
</body>
</html>


