<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>maintenance</title>
</head>

<body>

    <div class="flex">

        <x-sidebar />

        <div class="flex-1 p-4">

            <div class="flex justify-between p-5  rounded-sm bg-[#fff1d8] shadow-md">
                <div>
                    <h2 class="font-semibold text-3xl">Maintenance Request</h2>
                    <p class="text-gray-700">Manage and track maintenance requests</p>
                </div>


            </div>
            <x-card-maintenace />



            <div class="p-6 bg-gray-50 min-h-screen">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center bg-gray-200 px-40 py-3 mr-0 rounded-sm shadow-lg">
                        <svg xmlns="http://www.w3.org/2000/svg"
                            class="h-5 w-5 text-gray-400 mr-2"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-4.35-4.35M10.5 18a7.5 7.5 0 1 1 0-15 7.5 7.5 0 0 1 0 15z" />
                        </svg>
                        <input
                            type="text"
                            placeholder="Search by building or unit..."
                            class="bg-transparent outline-none w-full text-lg">
                    </div>

                    <select class="ml-4 px-4 py-2  rounded-lg bg-white  shadow  border border-gray-300">
                        <option >All Requests</option>
                        <option>In Progress</option>
                        <option>Pending</option>
                        <option >Completed</option>
                    </select>
                </div>

                <!-- Card 1 -->
                <div class="bg-white rounded-xl shadow-sm border p-5 mb-4">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-3">
                                <h2 class="text-lg font-semibold">Water leak in bathroom</h2>
                                <span class="px-2 py-1 text-xs font-medium bg-red-100 text-red-600 rounded-full">High</span>
                                <span class="px-2 py-1 text-xs font-medium bg-blue-100 text-blue-600 rounded-full">In Progress</span>
                            </div>

                            <p class="text-gray-600 mt-1">The bathroom sink is leaking continuously</p>

                            <div class="text-sm text-gray-500 mt-2">
                                Liu Yang • Building A - 305 • Created: 2026-03-28
                            </div>

                            <div class="text-sm text-gray-500 mt-1">
                                Assigned to: Maintenance Team A
                            </div>
                        </div>

                        <select class="mt-4 px-4 py-2 rounded-lg bg-white shadow border border-gray-300">
                            <option>In Progress</option>
                            <option>Pending</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white rounded-xl shadow-sm border p-5">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-3">
                                <h2 class="text-lg font-semibold">AC not working</h2>
                                <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-600 rounded-full">Medium</span>
                                <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-600 rounded-full">Pending</span>
                            </div>

                            <p class="text-gray-600 mt-1">Air conditioner stopped working, room is very hot</p>

                            <div class="text-sm text-gray-500 mt-2">
                                Zhao Min • Building B - 201 • Created: 2026-04-01
                            </div>

                            <div class="text-sm text-gray-500 mt-1">
                                Assigned to: Maintenance Team A
                            </div>
                        </div>

                        <select class="mt-4 px-4 py-2 rounded-lg bg-white shadow border border-gray-300">
                            <option>In Progress</option>
                            <option>Pending</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border p-5 mt-4 ">
                    <div class="flex items-center justify-between">
                        <div>
                            <div class="flex items-center gap-3">
                                <h2 class="text-lg font-semibold">AC not working</h2>
                                <span class="px-2 py-1 text-xs font-medium bg-yellow-100 text-yellow-600 rounded-full">Medium</span>
                                <span class="px-2 py-1 text-xs font-medium bg-gray-100 text-gray-600 rounded-full">Pending</span>
                            </div>

                            <p class="text-gray-600 mt-1">Air conditioner stopped working, room is very hot</p>

                            <div class="text-sm text-gray-500 mt-2">
                                Zhao Min • Building B - 201 • Created: 2026-04-01
                            </div>

                            <div class="text-sm text-gray-500 mt-1">
                                Assigned to: Maintenance Team A
                            </div>
                        </div>

                        <select class="mt-4 px-4 py-2 rounded-lg bg-white shadow border border-gray-300">
                            <option>In Progress</option>
                            <option>Pending</option>
                            <option>Completed</option>
                        </select>
                    </div>
                </div>
            </div>
            <Script>

            </Script>

</body>

</html>