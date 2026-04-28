<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>tenants</title>
</head>

<body>
    <div class="flex">
        <x-sidebar />
        <div class="w-full">
            <!-- header properties -->
            <div class="flex justify-between p-7 m-2 rounded-sm bg-[#fff1d8]  color-red-300 shadow-md ">
                <!-- title in property content -->
                <div class="">
                    <h2 class="font-semibold font-sans text-4xl">Tenant</h2>
                    <p class="text-1xl text-gray-700 font-sans">Manage Tenant Infomation</p>
                </div>

                <!-- button add propert -->
                <div class="border border-2 border-gray-300 font-bold text-lg text-center p-3 text-red-600 rounded-lg flex gap-4 items-center flex-row  shadow- bg-[#ffd6a6] hover:bg-[#fff1d8] active:scale-[0.98] transition-all duration-200">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-4 w-4 text-red-600">
                        <path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z" />
                    </svg>

                    <button onclick="toggleForm()"> Add Tenant</button>
                </div>
            </div>

            <div id="tenantForm"
                style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
                    background:rgba(0,0,0,0.5); z-index:999; justify-content:center; align-items:center;">

                <div class="font-sans space-y-5 bg-white p-6 rounded-xl shadow-xl w-full max-w-md">

                    <p class=" font-bold text-2xl font-bold mb-4">Add New Tenant</p>
                    <p class="text-gray-500">Add a new tenant to the system</p>

                    <form method="POST" action="{{ route('tenants.store') }}">
                        @csrf
                        <div class="space-y-5">
                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Full Name</label>
                            <input type="text" name="Full_name" placeholder="e.g Zhang Gu" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Email</label>
                            <input type="email" name="email" placeholder="e.g sorn@gmail.com" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all"> <br />

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Phone</label>
                            <input type="text" name="phone" placeholder="e.g +855 92950311" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Unit</label>
                            <input type="text" name="unit" placeholder="e.g Building A" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="end_date">Lease Start</label>
                            <input type="date" name="start_date" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                            <label class="block text-sm font-semibold text-gray-700 mb-1" for="end_date">Lease End</label>
                            <input type="date" name="start_date" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">


                            <div class="flex justify-between">
                                <button type="button" onclick="closeForm()" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-black-600">Cancel</button>
                                <button type="submit" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg  shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-red-600">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- search -->
            <div class="font-sans border border-2 border-gray-300 rounded-md shadow-2xl p-7 m-2 mt-7 ">
                <!-- input searching propery -->
                <div class="flex items-center bg-gray-200 px-7 py-4 rounded-sm shadow-lg">
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
                        placeholder="Search Tenant..."
                        class="bg-transparent outline-none w-full text-2xl">
                </div>

                <!-- list leases -->
                <div class="space-y-4 mt-5">
                    @foreach($tenants as $tenant)
                    <div class="bg-green-200 rounded-lg border border-gray200 hover:bg-[#fff1d8] active:scale-[0.98] transition-all duration-200">
                        
                        <p>{{ $tenant->full_name }}</p>
                        <p>{{ $tenant->email}}</p>
                        <p>{{ $tenant->phone}}</p>
                        <p>{{ $tenant->unit}}</p>
                        <p>{{ $tenant->lease_start}}</p>
                        <p>{{ $tenant->lease_end}}</p>
                    </div>
                    @endforeach
                    <div class="">

                    </div>
                </div>
                    
            </div>
        </div>

        <script>
            function toggleForm() {
                let form = document.getElementById("tenantForm");

                if (form.style.display === "none" || form.style.display === "") {
                    form.style.display = "flex"; // or block
                } else {
                    form.style.display = "none";
                }
            }
        </script>
    </div>

</body>

</html>