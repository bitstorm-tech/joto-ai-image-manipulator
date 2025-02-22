<!DOCTYPE html>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}" data-theme="forest">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>JoTa AI - Image Manipulator</title>

        @vite(["resources/css/app.css", "resources/js/app.js"])
    </head>
    <body class="p-5 font-sans antialiased dark:text-white/50">
        {{ $slot }}
    </body>
</html>
