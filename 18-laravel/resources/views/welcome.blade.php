@extends ('layouts.app')
@section('title', 'Welcome to LaraPets')
@section('content')
    <main class="bg-[url(images/bg-welcome3.png)] bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#0006] w-96 text-white p-10 rounded-lg flex flex-col justify-center items-center>
        <h1 class=" text-white text-4xl"> Welcome to:</h1>
            <img class="w-[400px]" src="{{asset('images/logo.png') }}" alt="Logo">
            <p>
                Pet adoption app connecting shelters with loving homes. Browse, match, and adopt pets easily. Find your
                perfect furry friend today!
            </p>
            <div class="w-full mt-10 flex justify-between">
                @guest
                <a class="btn btn-outline w-[140px]" href="{{url('login')}} ">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>

                    Login
                </a>
                <a class="btn btn-outline w-[140px]" href="{{url('register')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                    </svg>

                    Register
                </a>
                @endauth
                <a class="btn btn-outline w-[140px]" href="{{url('dashboard')}}">
                    //svg

                    Dashboard
                </a>
                @auth

            </div>
        </div>
    </main>
@endsection