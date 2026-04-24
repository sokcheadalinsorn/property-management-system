<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>properties</title>

</head>

<body>
    <div class="w-full">
        <!-- header properties -->
        <div class="flex justify-between p-7 m-2 rounded-sm bg-[#fff1d8]  color-red-300 shadow-md ">
            <!-- title in property content -->
            <div class="">
                <h2 class="font-semibold font-sans text-4xl">Properties</h2>
                <p class="text-1xl text-gray-700 font-sans">Manage all rental properties</p>
            </div>

            <!-- button add propert -->
            <div class="border border-2 border-gray-300 font-bold text-lg text-center p-3 text-red-600 rounded-lg flex gap-4 items-center flex-row  shadow- bg-[#ffd6a6] hover:bg-[#fff1d8] active:scale-[0.98] transition-all duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 640" class="h-4 w-4 text-red-600">
                    <path d="M352 128C352 110.3 337.7 96 320 96C302.3 96 288 110.3 288 128L288 288L128 288C110.3 288 96 302.3 96 320C96 337.7 110.3 352 128 352L288 352L288 512C288 529.7 302.3 544 320 544C337.7 544 352 529.7 352 512L352 352L512 352C529.7 352 544 337.7 544 320C544 302.3 529.7 288 512 288L352 288L352 128z" />
                </svg>

                <button onclick="toggleForm()"> Add Property</button>
            </div>
        </div>

        <div id="propertyForm"
            style="display:none; position:fixed; top:0; left:0; width:100%; height:100%;
     background:rgba(0,0,0,0.5); z-index:999; justify-content:center; align-items:center;">

            <div class="font-sans space-y-5 bg-white p-6 rounded-xl shadow-xl w-full max-w-md">

                <p class=" font-bold text-2xl font-bold mb-4">Add New Property</p>
                <p class="text-gray-500">Add a new rental property to the system</p>

                <form method="POST" action="{{ route('properties.store') }}">
                    @csrf
                    <div class="space-y-5">
                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Building Name</label>
                        <input type="text" name="building" placeholder="e.g Building A" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Unit Number</label>
                        <input type="text" name="unit" placeholder="e.g 101" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all"> <br />

                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Type</label>
                        <input type="text" name="type" placeholder="e.g 2BR" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Size</label>
                        <input type="text" name="size" placeholder="e.g 30m" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Monthly Rent</label>
                        <input type="text" name="rent" placeholder="e.g 100$" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">

                        <label class="block text-sm font-semibold text-gray-700 mb-1" for="font">Satus</label>
                        <select name="status" class="bg-gray-200 border border-gray-200 rounded-lg p-3 w-full outline-none focus:ring-2 focus:ring-[#FFE8BE] focus:bg-white transition-all">
                            <option>Available</option>
                            <option>Occupied</option>
                            <option>Maintenance</option>
                        </select>

                        <div class="flex justify-between">
                            <button type="button" onclick="closeForm()" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-black-600">Cancel</button>
                            <button type="submit" class="mt-4 bg-[#fff1d8] p-3 text-center font-bold text-lg rounded-lg  shadow-sm hover:bg-[#ffd6a6] active:scale-[0.98] transition-all duration-200 text-red-600">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- search properties -->
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
                    placeholder="Search by building or unit..."
                    class="bg-transparent outline-none w-full text-2xl">
            </div>

            <table class="font-sans mt-7 p-5 w-full rounded-2xl ">
                <thead class="  text-start rounded-sm ">
                    <tr>
                        <th class="text-start font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 rounded-sm">Building</th>
                        <th class="text-start font-bold text-2xl text-gray-600  bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Unit</th>
                        <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Type</th>
                        <th class="text-start  font-bold text-2xl text-gray-600  bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Size</th>
                        <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 ">Rent</th>
                        <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 rounded-sm  ">Status</th>
                        <th class="text-start  font-bold text-2xl text-gray-600 bg-[#fff1d8] hover:bg-[#ffd6a6] px-2 py-2 rounded-sm  ">Action</th>
                    </tr>
                </thead>

                <tbody class=" ">
                    @foreach($properties as $property)
                    <tr class="text-start">
                        <!-- <a href="/properties/{{ $property->id }}">hi</a> -->

                        <td class=" text-start font-sans font-medium py-4 px-4 bg-gray-90 hover:bg-gray-200 "><a href="/properies/{{ $property->id }}">{{ $property->building }}</a></td>
                        <td class=" text-start font-sans font-medium py-4 px-4 bg-gray-90 hover:bg-gray-200 ">{{ $property->unit }}</td>
                        <td class="text-start  font-sans font-medium py-4 px-4 bg-gray-90 hover:bg-gray-200 ">{{ $property->type }}</td>
                        <td class="text-start  font-sans font-medium py-4 px-4 bg-gray-90 hover:bg-gray-200 ">{{ $property->size }}</td>
                        <td class="text-start  font-sans font-medium py-4 px-4 bg-gray-90 hover:bg-gray-200 ">{{ $property->rent }}</td>
                        <td class="text-start  font-sans font-medium py-4 px-4 bg-gray-90"><span class="bg-green-200 hover:bg-green-400  rounded-full p-2 ">{{ $property->status }}</span></td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>



    </div>

    <script>
        function toggleForm() {
            let form = document.getElementById("propertyForm");

            if (form.style.display === "none" || form.style.display === "") {
                form.style.display = "flex"; // or block
            } else {
                form.style.display = "none";
            }
        }
    </script>

</body>

</html>