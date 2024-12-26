<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" data-sidebar="" dir="ltr">

<head>
    <meta charset="utf-8">
    <title> {{$title}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="{{$description}}" name="description">
    <meta content="" name="sendguru">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <!-- Css -->
    <!-- Main Css -->
    <link href="/assets/libs/flatpickr/flatpickr.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/icons.css">
    <link rel="stylesheet" href="/assets/css/tailwind.min.css">
    <script src="/assets/js/jquery.min.js"></script>
    <link rel="stylesheet" href="/assets/css/main.min.css?v=2.5.0">

</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="bg-gray-100 dark:bg-gray-900">

    @yield('sidebar')

    @yield('navbar')

    @yield('content')

    <!-- JAVASCRIPTS -->
    <!-- <div class="menu-overlay"></div> -->
    <script src="/assets/libs/%40popperjs/core/umd/popper.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <!-- <script src="/assets/js/pages/components.js"></script> -->
    <script src="/assets/libs/flatpickr/flatpickr.min.js"></script>
    <script src="/assets/libs/%40frostui/tailwindcss/frostui.js"></script>

    <script src="/assets/libs/apexcharts/apexcharts.min.js"></script>
    <script src="/assets/libs/echarts/echarts.min.js"></script>
    <script src="/assets/js/pages/analytics-index.init.js"></script>
    <script src="/assets/js/app.js"></script>
    <script>
        var alert_del = document.querySelectorAll('.alert-hidden');
        alert_del.forEach((x) =>
            x.addEventListener('click', function() {
                x.parentElement.classList.add('hidden');
            })
        );
    </script>
    <!-- JAVASCRIPTS -->
</body>

</html>