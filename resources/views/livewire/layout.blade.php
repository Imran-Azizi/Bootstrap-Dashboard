<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bootstrapFile/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pack/sb-admin-2.css') }}">
    <link rel="stylesheet" href="{{ asset('pack/sb-admin-2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('pack/all.min.css') }}">
    <link
        url="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="{{ asset('bootstrapFile/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pack/sb-admin-2.min.js') }}"></script>
    <script src="{{ asset('pack/jquery.min.js') }}"></script>
    <script src="{{ asset('pack/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('pack/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('pack/Chart.min.js') }}"></script>


</head>

<body>
    <div id="wrapper">
        @include('components.sideBar')

        <div id="content-wrapper" class="d-flex flex-column">
        <div id="content">
            @include('components.header')
            @includeIf('components.main')
        </div>
        </div>
    </div>


    @livewireScripts()
</body>

</html>
