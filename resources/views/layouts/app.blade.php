<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="flex">
        <!-- Sidebar Component -->
        <x-sidebar />

        <!-- Page Content -->
        <div class="flex-1 p-5">
            {{ $slot }}
        </div>
    </div>

</body>
</html>
