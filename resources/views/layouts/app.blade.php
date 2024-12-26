<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
    <link rel="canonical" href="../../index.htm">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sidebar Application AI Prompt using Tailwind CSS for Preline UI, a product of Htmlstream.">

    <meta name="twitter:site" content="@preline">
    <meta name="twitter:creator" content="@preline">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sidebar Application AI Prompt using Tailwind CSS | Preline UI, crafted with Tailwind CSS">
    <meta name="twitter:description" content="Sidebar Application AI Prompt using Tailwind CSS for Preline UI, a product of Htmlstream.">
    <meta name="twitter:image" content="https://preline.co/assets/img/og-image.png">

    <meta property="og:url" content="https://preline.co/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Preline">
    <meta property="og:title" content="Sidebar Application AI Prompt using Tailwind CSS | Preline UI, crafted with Tailwind CSS">
    <meta property="og:description" content="Sidebar Application AI Prompt using Tailwind CSS for Preline UI, a product of Htmlstream.">
    <meta property="og:image" content="https://preline.co/assets/img/og-image.png">

    <!-- Title -->
    <title>{{ $title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/logo/icon.png">

    <!-- Theme Check and Update -->
    <script>
        const html = document.querySelector('html');
        const isLightOrAuto = localStorage.getItem('hs_theme') === 'light' || (localStorage.getItem('hs_theme') === 'auto' && !window.matchMedia('(prefers-color-scheme: dark)').matches);
        const isDarkOrAuto = localStorage.getItem('hs_theme') === 'dark' || (localStorage.getItem('hs_theme') === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches);

        if (isLightOrAuto && html.classList.contains('dark')) html.classList.remove('dark');
        else if (isDarkOrAuto && html.classList.contains('light')) html.classList.remove('light');
        else if (isDarkOrAuto && !html.classList.contains('dark')) html.classList.add('dark');
        else if (isLightOrAuto && !html.classList.contains('light')) html.classList.add('light');
    </script>

    <!-- CSS HS -->
    <link rel="stylesheet" href="/assets/css/main.min-2.css?v=2.5.0">
    <link rel="stylesheet" href="/assets/css/main.css?v=2.5.0">

</head>

<body class="bg-gray-200 dark:bg-neutral-900">
    <!-- ========== MAIN CONTENT ========== -->
    <!-- Sidebar -->
    @include('portal.inc.sidebar')
    <!-- End Sidebar -->

    <!-- Navbar -->
    @include('portal.inc.navbar')
    <!-- End Navbar -->

    <!-- Content -->
    <div class="relative h-screen w-full lg:ps-64">
        <div class="py-10 lg:py-14 px-4 lg:px-8">
            @yield('content')
        </div>
    </div>
    <!-- End Content -->

    <!-- JS PLUGINS -->
    <script src="/assets/vendor/preline/dist/index-3.js?v=2.5.0"></script>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="/assets/vendor/clipboard/dist/clipboard.min.js"></script>

    <script>
        const HSClipboard = {
            collection: [],

            dataAttributeName: "data-hs-clipboard-options",

            defaults: {
                type: null,
                tooltip: false,
                contentTarget: null,
                classChangeTarget: null,
                defaultClass: null,
                successText: null,
                successClass: null,
                originalTitle: null,
            },

            init(el, options = {}, id) {
                const that = this;
                let elems;

                if (el instanceof HTMLElement) {
                    elems = [el];
                } else if (el instanceof Object) {
                    elems = el;
                } else {
                    elems = document.querySelectorAll(el);
                }

                for (let i = 0; i < elems.length; i += 1) {
                    that.addToCollection(elems[i], options, id || elems[i].id);
                }

                if (!that.collection.length) {
                    return false;
                }

                // initialization calls
                that._init();
            },

            _init: function(el, settings) {
                const that = this;

                for (let i = 0; i < that.collection.length; i += 1) {
                    let _options;
                    let _$el;

                    if (that.collection[i].hasOwnProperty("$initializedEl")) {
                        continue;
                    }

                    _options = that.collection[i].options;
                    _$el = that.collection[i].$el;

                    /* Start : Init */

                    if (_options.contentTarget) that.setShortcodes(_$el, _options);

                    that.collection[i].$initializedEl = new ClipboardJS(_$el, _options);

                    that.collection[i].$initializedEl.on("success", () => {
                        const $defaultEl = _$el.querySelector(".js-clipboard-default");
                        const $successEl = _$el.querySelector(".js-clipboard-success");
                        const $successTextTargetEl = _$el.querySelector(
                            ".js-clipboard-success-text"
                        );
                        const successText = _options.successText;
                        const tooltip = _options.tooltip;
                        let oldSuccessText;

                        if ($successTextTargetEl) {
                            oldSuccessText = $successTextTargetEl.textContent;
                            $successTextTargetEl.textContent = successText;
                        }

                        if ($defaultEl && $successEl) {
                            $defaultEl.style.display = "none";
                            $successEl.style.display = "block";
                        }

                        if (tooltip) {
                            HSTooltip.show(_$el);
                        }

                        setTimeout(function() {
                            if ($successTextTargetEl && oldSuccessText) {
                                $successTextTargetEl.textContent = oldSuccessText;
                            }

                            if (tooltip) {
                                HSTooltip.hide(_$el);
                            }

                            if ($defaultEl && $successEl) {
                                $successEl.style.display = "";
                                $defaultEl.style.display = "";
                            }
                        }, 800);
                    });

                    /* End : Init */
                }
            },

            setShortcodes(el, params) {
                let settings = params,
                    $element = document.querySelector(settings.contentTarget);

                if (!$element) return false;

                if (
                    $element.tagName === "SELECT" ||
                    $element.tagName === "INPUT" ||
                    $element.tagName === "TEXTAREA"
                ) {
                    settings.shortcodes[settings.contentTarget] = $element.value;
                } else {
                    settings.shortcodes[settings.contentTarget] = $element.textContent;
                }
            },

            addToCollection(item, options, id) {
                (options = Object.assign({
                        shortcodes: {},
                    },
                    this.defaults,
                    item.hasAttribute(this.dataAttributeName) ?
                    JSON.parse(item.getAttribute(this.dataAttributeName)) : {},
                    options
                )),
                this.collection.push({
                    $el: item,
                    id: id || null,
                    options: Object.assign({}, options, {
                        windowWidth: window.outerWidth,
                        defaultText: item.lastChild.nodeValue,
                        title: item.getAttribute("data-bs-original-title"),
                        container: !!this.defaults.container ?
                            document.querySelector(this.defaults.container) : false,
                        text: (button) => {
                            var dataSettings = JSON.parse(
                                button.getAttribute("data-hs-clipboard-options")
                            );
                            return options.shortcodes[dataSettings.contentTarget];
                        },
                    }),
                });
            },

            getItems() {
                const that = this;
                let newCollection = [];

                for (let i = 0; i < that.collection.length; i += 1) {
                    newCollection.push(that.collection[i].$initializedEl);
                }

                return newCollection;
            },

            getItem(item) {
                if (typeof item === "number") {
                    return this.collection[item].$initializedEl;
                } else {
                    return this.collection.find((el) => {
                        return el.id === item;
                    }).$initializedEl;
                }
            },
        };
    </script>

</body>

</html>