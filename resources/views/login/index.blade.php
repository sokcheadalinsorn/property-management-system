<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>login</title>
</head>

<body>
    @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form action="{{route('login.name')" method="post">
        @csrf
        <div class="font-sans flex items-center justify-center min-h-screen bg-gray-50">
            <!-- Added transition and hover shadow for a more premium feel -->
            <div class="flex flex-col justify-center w-full max-w-md rounded-2xl p-10 bg-white shadow-2xl transition-all duration-300 hover:shadow-inner">

                <h1 class="font-bold text-4xl text-center text-gray-900 tracking-tight">Jinlong Property</h1>
                <p class="text-md text-gray-500 text-center mt-2">Rental Home Management System</p>

                <div class="mt-10 mb-6">
                    <p class="font-bold text-2xl text-gray-800">Admin Login</p>
                    <p class="text-gray-500">Access process management system</p>
                </div>

                <div class="space-y-5">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="email">Email Address</label>
                        <input class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all"
                            type="email" name="email" id="email" placeholder="admin@gmail.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="password">Password</label>
                        <input class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all"
                            type="password" name="password" id="password" placeholder="••••••••">
                    </div>

                    <button onclick="" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg w-full rounded-lg text-gray-800 shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-red-600">
                        Login As Admin
                    </button>
                </div>

                <p class="text-center text-xs text-gray-400 mt-8">© 2026 Jinlong Property. All rights reserved.</p>
            </div>
        </div>
    </form>


</body>

</html>