<body class="bg-gradient-to-r from-blue-500 to-purple-500 min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('/img/img4.png');">
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div>
            {{ $logo }}
        </div>

        <div class="w-full sm:max-w-md mt-6 px-10 py-6 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>
</body>
