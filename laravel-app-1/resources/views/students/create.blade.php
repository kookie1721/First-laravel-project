@include('partials.header', [$title])

<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">
            Add New Student
        </h1>
    </a>
</header>

<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section class="mt-2">
        <form action="/add/student" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="firstName" class="block text-gray-700 text-sm font-bold mb-2 ml-3">First Name</label>
                <input type="text" name="firstName" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('firstName')}}>       
                
                @error('firstName')
                <p class="text-red-500 text-xs p-1">
                    @error('firstName')
                        {{ $message }}
                    @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="lastName" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Last Name</label>
                <input type="text" name="lastName" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('lastName')}}>       
                
                @error('lastName')
                <p class="text-red-500 text-xs p-1">
                    @error('lastName')
                        {{ $message }}
                    @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="gender" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Gender</label>
                <select name="gender" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">  
                    <option value="" {{ old('gender') == "" ? "selected" : "" }}>  </option>
                    <option value="male" {{ old('gender') == "male" ? "selected" : "" }}> Male </option>
                    <option value="female" {{ old('gender') == "female" ? "selected" : "" }}> Female </option>
                    <option value="gay" {{ old('gender') == "gay" ? "selected" : "" }}> Gay </option>
                </select> 

                @error('gender')
                <p class="text-red-500 text-xs p-1">
                    @error('gender')
                        {{ $message }}
                    @enderror
                    </p>
                @enderror  
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="age" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Age</label>
                <input type="number" name="age" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('age')}}>       
                @error('age')
                <p class="text-red-500 text-xs p-1">
                    @error('age')
                        {{ $message }}
                    @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value={{old('email')}}>       
                @error('email')
                <p class="text-red-500 text-xs p-1">
                    @error('email')
                        {{ $message }}
                    @enderror
                    </p>
                @enderror
            </div>


            <button class="bg-pink-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" type="submit">Add New</button>

        </form>
    </section>

</main>







@include('partials.footer')