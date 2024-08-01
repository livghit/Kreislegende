<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <div class="flex lg:justify-center lg:col-start-2 p-10">
        <div class="ml-5">
            <x-application-mark class="h-12 w-10" />
        </div>
        @if (Route::has('login'))
            <nav class="-mx-3 flex flex-1 justify-end">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </div>

    <main class="mt-6  w-full">
        <h1 x-data="{
            startingAnimation: { opacity: 0, scale: 1 },
            endingAnimation: { opacity: 1, scale: 1, stagger: 0, duration: 1, ease: 'ease.in' },
            addCNDScript: true,
            animateText() {
                $el.classList.remove('invisible');
                gsap.fromTo($el.children, this.startingAnimation, this.endingAnimation);
            },
            splitCharactersIntoSpans(element) {
                text = element.innerHTML;
                modifiedHTML = [];
                for (var i = 0; i < text.length; i++) {
                    attributes = '';
                    if (text[i].trim()) { attributes = 'class=\'inline-block\''; }
                    modifiedHTML.push('<span ' + attributes + '>' + text[i] + '</span>');
                }
                element.innerHTML = modifiedHTML.join('');
            },
            addScriptToHead(url) {
                script = document.createElement('script');
                script.src = url;
                document.head.appendChild(script);
            }
        }" x-init="splitCharactersIntoSpans($el);
        if (addCNDScript) {
            addScriptToHead('https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js');
        }
        gsapInterval = setInterval(function() {
            if (typeof gsap !== 'undefined') {
                animateText();
                clearInterval(gsapInterval);
            }
        }, 5);"
            class="invisible block text-7xl font-bold custom-font text-indigo-500 mt-52 text-center col-span-2 ">
            WORK IN PROGRESS
        </h1>

    </main>
</body>

</html>
