@include('partials.header')
<header class="max-w-lg mx-auto">
    <a href="#">
        <h1 class="text-4xl font-bold text-white text-center">
            User Register
        </h1>
    </a>
</header>

<main class="bg-white max-w-lg mx-auto p-8 my-10 rounded-lg shadow-2xl">
    <section>
        <h3 class="font-bold text-2xl text-center">Welcome to my first laravel project </h3>
       
        <p class="text-gray-600 pt-2 text-center">
            Sign in to your account
            <a class="text-pink-600 font-bold" href="/login">here</a>
        </p>




        {{-- @if ($errors->any())
            <div class="text-center text-red-600 mt-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        
    </section>

    <section class="mt-10">
        <form action="/store" method="POST" class="flex flex-col">
            @csrf
            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="name" class="block text-gray-700 text-sm font-bold mb-2 ml-3 @error('name') is-invalid @enderror">Name</label>
                <input type="text" name="name" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{old('name')}}">     
                
                @error('name')
                    <p class="text-red-500 text-xs p-1">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="email" class="block text-gray-700 text-sm font-bold mb-2 ml-3 @error('email') is-invalid @enderror">Email</label>
                <input type="email" name="email" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3" value="{{old('email')}}">  
                
                @error('email')
                    <p class="text-red-500 text-xs p-1">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2 ml-3 @error('password') is-invalid @enderror">Password</label>
                <input type="password" name="password" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">  
                
                @error('password')
                    <p class="text-red-500 text-xs p-1">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </p>
                @enderror
            </div>

            <div class="mb-6 pt-3 rounded bg-gray-200">
                <label for="password_confirmation" class="block text-gray-700 text-sm font-bold mb-2 ml-3 @error('password_confirmation') is-invalid @enderror">Confirm Password</label>
                <input type="password" name="password_confirmation" class="bg-gray-200 rounded w-full text-gray-700 focus:outline-none border-b-4 border-gray-400 px-3">  
                
                @error('password_confirmation')
                    <p class="text-red-500 text-xs p-1">
                        @error('password_confirmation')
                            {{ $message }}
                        @enderror
                    </p>
                @enderror
            </div>

            <button class="bg-pink-600 hover:bg-purple-700 text-white font-bold py-2 rounded shadow-lg hover:shadow-xl transition duration-200" name="submit" type="submit">Sign up</button>

        </form>
    </section>

</main>


@include('partials.footer')

