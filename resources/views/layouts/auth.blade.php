<!DOCTYPE html>

<html lang="en" dir="" class="relative kby5p ly3m4">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>REMAIL</title>
    <link rel="shortcut icon" href="../../favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/obfuscated.min.css">

    <!-- CSS HS -->
    <link rel="stylesheet" href="/assets/css/main.min.css?v=2.5.0">
    <link rel="shortcut icon" href="/assets/img/logo/icon.png" />

</head>

<body class="bg-gray-200 dark:bg-neutral-900">

    <!-- ========== HEADER ========== -->
    <header class="flex py-2 shadow-sm flex-wrap m6u74 oz4tv le6w0 m9vu4 vcvf1 kq7zk dark:bg-neutral-900 dark:border-neutral-700">
        <div class="ejxie flex dry15 jv5i1 items-center qaxp8 huxlp l3ebx iwwvx oekzh rxp1p">
            <!-- Logo -->
            <a class="bo2im ngy7c lig8s ykxda rozsb r0fp5 fhbog" href="/" aria-label="Preline">
                <img src="/assets/img/logo/blue.png" class="size-10 w-full" alt="">
            </a>
            <!-- End Logo -->
        </div>
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
    <script src="../assets/vendor/preline/dist/index-2.js?v=2.5.0"></script>

    <script type="text/javascript">
        window.addEventListener('load', () => {
            document.querySelectorAll('.hs-overlay').forEach((el) => {
                const overlay = HSOverlay.getInstance(el);

                HSOverlay.open(overlay);
            })
        })
    </script>

    <script src="primary-assets/js/app-2.js"></script>
</body>

</html>