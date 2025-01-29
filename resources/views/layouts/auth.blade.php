<!DOCTYPE html>

<html lang="en" dir="" class="relative kby5p ly3m4">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REMAIL</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/obfuscated.min.css">

    <!-- CSS HS -->
    <link rel="stylesheet" href="/assets/css/main.min.css?v=2.5.0">
    <link rel="shortcut icon" href="/assets/img/logo/icon.png" />

</head>

<body class="bg-gray-200 dark:bg-neutral-900">

    <!-- ========== HEADER ========== -->
    <header class="flex py-3 shadow-sm flex items-center justify-center bg-white dark:bg-neutral-900 dark:border-neutral-700">
        <!-- Logo -->
        <a class="" href="/" aria-label="REMAIL">
            <img src="/assets/img/logo/blue.png" class="size-10 w-full" alt="">
        </a>
        <!-- End Logo -->
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content">
        <!-- Hero -->
        <div class="relative overflow-hidden before:absolute before:top-1/2 before:start-1/2 dark:before:bg-[url('../../assets/svg/component-dark/hero-gradient.svg')] before:bg-no-repeat before:bg-center before:size-full before:-z-[1] before:transform before:-translate-y-1/2 before:-translate-x-1/2">
            @yield("content")
        </div>
        <!-- End Hero -->
    </main>
    <!-- ========== END MAIN CONTENT ========== -->

    <!-- JS Implementing Plugins -->
    <script src="/assets/vendor/preline/dist/index-2.js?v=2.5.0"></script>

    <script src="primary-assets/js/app-2.js"></script>
</body>

</html>