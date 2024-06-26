<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Laravel App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/htmx.org@1.9.12"></script>
    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex">

    <!-- Sidebar -->
    <aside class="w-64 bg-white shadow-md fixed top-0 left-0 h-full overflow-y-auto">
        <div class="p-4">
            <h1 class="text-lg font-semibold text-gray-800 mb-4">Navigation</h1>
            <ul>
                <li>
                    <a href="/" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded">
                        <span class="mr-2"><i class="fas fa-home"></i></span> Home
                    </a>
                </li>
                <li>
                    <a href="/about" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded mt-2">
                        <span class="mr-2"><i class="fas fa-info-circle"></i></span> About
                    </a>
                </li>
                <li>
                    <a href="/products" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded mt-2">
                        <span class="mr-2"><i class="fas fa-box"></i></span> Products
                    </a>
                </li>
                <li>
                    <a href="/contacts" class="flex items-center py-2 px-4 text-gray-700 hover:bg-gray-200 hover:text-gray-900 rounded mt-2">
                        <span class="mr-2"><i class="fas fa-address-book"></i></span> Contacts
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <!-- Main Content Area -->
    <main class="ml-64 flex-1 p-8">
        <div class="bg-white rounded-lg shadow-md p-8">
            <h1 class="text-2xl font-semibold text-gray-800 mb-4">Main Content</h1>
            @yield('content')
        </div>
    </main>

</body>
</html>
