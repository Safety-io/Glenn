<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="favicon.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-700">
    @include('layout.header')
    <br>
    <br>

    <main class="px-4 md:p-0">
        <div class="mx-auto w-full md:w-3/6 px-6 py-5 md:px-12 md:py-10 bg-white">
            <h1 class="text-2xl font-medium mb-4"><span class="title-underline title-underline-black">About</span></h1>
            <p class="mb-2 leading-loose">
                Nowadays, on the island of Cyprus, and almost anywhere else, it is not obvious to easily find the apartment or house we want.
            </p>
            <p class="mb-2 leading-loose">
                It requires investing enough time to do research and run around to find what we really want.
            </p>
            <p class="mb-2 leading-loose">
                It is true that life on the Island of Cyprus and anywhere else is not at all easy, even less so when we are students.
            </p>
            <p class="mb-2 leading-loose">
                In order to make things easier for you, we put at your disposal a fairly simple, easy and quick search engine to use to allow you to easily find the home of your dreams.
            </p>
            <p class="leading-loose">
                So feel comfortable visiting our apartments and do not hesitate to contact us directly to the WhatsApp number available next to the apartment when the latter has seduced you.
            </p>
        </div>
    </main>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>
