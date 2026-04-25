<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>

<body>

    <div class="flex">

        <x-sidebar />

        <div class="flex-1 p-4">

            <div class="flex justify-between p-5  rounded-sm bg-[#fff1d8] shadow-md">
                <div>
                    <h2 class="font-semibold text-3xl">Payments</h2>
                    <p class="text-gray-700">Track rental payments</p>
                </div>

                <div class="border border-2 border-gray-300 font-bold text-40 text-center p-2 text-red-600 rounded-lg flex gap-2 items-center flex-row  shadow- bg-[#ffd6a6] hover:bg-[#fff1d8] active:scale-[0.98] transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-4 w-4 text-red-600">
                        <path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z" />
                    </svg>

                    <button onclick="toggleForm()"> Add Property</button>
                </div>
            </div>
            <x-card-payment />

            <div id="propertyForm"
                class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center">

                <div class="bg-white p-6 rounded-xl shadow-xl w-full max-w-md">

                    <h2 class="text-2xl font-bold mb-2">Add Payment Record</h2>
                    <p class="text-gray-500 mb-4">create a new payment record</p>

                     <form method="POST" action="{{ route('properties.store') }}">
                        @csrf
                        <div class="space-y-5">
                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Tenant Name*</label>
                            <input type="text" name="building" placeholder="e.g.Zhang Wei" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Unit Number</label>
                            <input type="text" name="building" placeholder="e.g Building A-101" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all"> <br />

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Amount</label>
                            <input type="text" name="building" placeholder="e.g $150" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Month</label>
                            <input type="text" name="building" placeholder="e.g. April 2026" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Due Date*</label>
                            <input type="text" name="building" placeholder="e.g 100$" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">                           
                            <div class="flex justify-between">
                                <button type="button" onclick="closeForm()" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-black-600">Cancel</button>
                                <button type="submit" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg  shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-red-600">Save</button>
                            </div>
                        </div>
                    </form>

                    

                </div>
            </div>

            <div class="border border-gray-200 rounded-md shadow p-6 mt-6 bg-white ">

                <div class="flex items-center bg-gray-200 px-7 py-3 rounded-sm shadow-lg">
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
                <!-- TABLE -->
                <table class="font-sans mt-7 p-5 w-full rounded-2xl ">
                    <thead class="  text-start rounded-sm ">
                        <tr>
                            <th class="text-start font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 rounded-sm">Tenant name</th>
                            <th class="text-start font-bold text-2xl text-gray-600  bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Unit</th>
                            <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Amount</th>
                            <th class="text-start  font-bold text-2xl text-gray-600  bg-[#fff1d8] hover:bg-[rgb(255,214,166)] px-2 py-2 ">Month</th>
                            <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Due date</th>
                        </tr>
                    </thead>

                  
                </table>


            </div>

        </div>
    </div>

    <script>
        function toggleForm() {
            document.getElementById("propertyForm").classList.remove("hidden");
        }

        function closeForm() {
            document.getElementById("propertyForm").classList.add("hidden");
        }
    </script>

</body>

</html>