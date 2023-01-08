@include('partials.header')

@php
    $array = ['title' => 'Student System'];
@endphp

    {{-- Component here  and can also pass data--}}
    <x-nav :data="$array" />

    <header class="max-w-lg mx-auto mt-10">
        <a href="#">
            <h1 class="text-4xl font-bold text-white text-center">
                Student List
            </h1>
        </a>
    </header>

    <p>
        Hi {{ auth()->user()->name }}!
    </p>

    <section class="mt-10">
        <div class="overflow-x-auto relative">
            <table class="w-96 mx-auto text-sm text-left text-gray-500">
                <thead class="text-xs text gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6"> 
                            First Name
                        </th>

                        <th scope="col" class="py-3 px-6"> 
                            Last Name
                        </th>

                        <th scope="col" class="py-3 px-6"> 
                            email
                        </th>

                        <th scope="col" class="py-3 px-6"> 
                            age
                        </th>

                        <th scope="col" class="py-3 px-6">

                        </th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $student)
                    <tr class="bg-gray-800 border-b text-white">
                        <td class="py-4 px-6">
                            {{ $student->firstName }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->lastName }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->email }}
                        </td>
                        <td class="py-4 px-6">
                            {{ $student->age }}
                        </td>

                        <td class="py-4 px-6 ">
                            <a href="/student/{{ $student->id }}" class="bg-sky-600 text-white px-4 py-2 rounded">view</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="mx-auto max-w-lg pt-6 p-4">
                {{$students->links()}}
            </div>
          
        </div>
    </section>
    {{-- <ul>
        @foreach ($students as $student)

        <li>
            {{ $student->firstName }}  {{ $student->lastName }}
        </li>
        @endforeach
      
    </ul> --}}

    {{-- {{$students->firstName}} --}}


@include('partials.footer')

