@extends('layouts.app')
@section('title', 'Show Pet')

@section('content')
    @include('layouts.navbar')
    <main class="bg-slate-950 pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#00003366] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"></path></svg>
                Pet Details
            </h1>

            {{-- Breadcrumbs --}}
            <div class="breadcrumbs text-sm mt-6">
                <ul>
                    <li>
                        <a href="{{ url('dashboard') }}" class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256">
                                <path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path>
                            </svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pets') }}" class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256">
                                <path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path>
                            </svg>
                            Pets Module
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                            </svg>
                            View Pet
                        </span>
                    </li>
                </ul>
            </div>

            {{-- Pet Details Card --}}
            <div class="w-full max-w-2xl mt-8 bg-[#00003366] rounded-xl p-6 shadow-lg">
                <div class="flex flex-col md:flex-row gap-8">
                    {{-- Photo Section --}}
                    <div class="flex-shrink-0 flex flex-col items-center">
                        <div class="mask mask-squircle w-48 h-48 bg-slate-700 flex items-center justify-center">
                            @if($pet->image)
                                <img src="{{ asset('images/pets/'.$pet->image) }}" 
                                     alt="Pet Photo" 
                                     class="w-full h-full object-cover">
                            @else
                                <div class="text-6xl text-slate-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-32" fill="currentColor" viewBox="0 0 256 256">
                                        <path d="M132,180a20,20,0,1,1-20-20A20,20,0,0,1,132,180ZM88,116a20,20,0,1,0-20,20A20,20,0,0,0,88,116Zm108,20a20,20,0,1,0-20-20A20,20,0,0,0,196,136Z"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="mt-4 text-center">
                            <h2 class="text-xl font-bold">{{ $pet->name }}</h2>
                            <span class="badge badge-lg badge-outline text-white mt-2">{{ $pet->species }}</span>
                        </div>
                    </div>

                    {{-- Details Section --}}
                    <div class="flex-grow">
                        <h3 class="text-lg font-bold border-b pb-2 mb-4">Details</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div>
                                <p class="text-sm font-semibold">Age:</p>
                                <p>{{ $pet->age }} years old</p>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Created At:</p>
                                <p>{{ $pet->created_at->format('M d, Y') }}</p>
                            </div>
                            <div>
                                <p class="text-sm font-semibold">Updated At:</p>
                                <p>{{ $pet->updated_at->format('M d, Y') }}</p>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6">
                            <a href="{{ url('pets', ['pet' => $pet->id, 'edit']) }}" class="btn btn-warning btn-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.242-8.256Z" />
                                </svg>
                                Edit
                            </a>
                            <button class="btn btn-sm" onclick="my_modal_1.showModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.919a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m-1.022.166a48.12 48.12 0 0 1 7.5 0m-3.478-.397a48.108 48.108 0 0 1 7.5 0m7.5-1.655C20.735 4.79 19.866 4.5 18.995 4.5H5.005c-.87 0-1.735.29-2.505.86-1.928.74-3.085 2.87-3.085 5.176v.38c0 .245.022.486.064.726a2.053 2.053 0 0 0 1.954 1.841c.294.015.589.022.883.022h15.939c.294 0 .589-.007.883-.022a2.053 2.053 0 0 0 1.954-1.841c.042-.24.064-.48.064-.726v-.38c0-2.306-1.157-4.436-3.085-5.176Z" />
                                </svg>
                                Delete
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Modal for delete confirmation --}}
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box bg-slate-800 text-white rounded-xl">
                    <h3 class="font-bold text-lg text-center">Delete Pet</h3>
                    <p class="py-4 text-center">Are you sure you want to delete the pet: <b>{{ $pet->name }}</b>?</p>
                    <div class="modal-action flex justify-between">
                        <form action="{{ url('pets', ['pet' => $pet->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256">
                                    <path d="M216,48H176V40a24,24,0,0,0-24-24H104A24,24,0,0,0,80,40v8H40a8,8,0,0,0,0,16h8V208a16,16,0,0,0,16,16H192a16,16,0,0,0,16-16V64h8a8,8,0,0,0,0-16ZM96,40a8,8,0,0,1,8-8h48a8,8,0,0,1,8,8v8H96ZM192,208H64V64H192ZM112,104v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm48,0v64a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Z"></path>
                                </svg>
                                Yes, I'm sure
                            </button>
                        </form>
                        <form method="dialog">
                            <button class="btn">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-8" fill="#ffffff" viewBox="0 0 256 256"><path d="M165.66,101.66,139.31,128l26.35,26.34a8,8,0,0,1-11.32,11.32L128,139.31l-26.34,26.35a8,8,0,0,1-11.32-11.32L116.69,128,90.34,101.66a8,8,0,0,1,11.32-11.32L128,116.69l26.34-26.35a8,8,0,0,1,11.32,11.32ZM232,128A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z"></path></svg>
                                Close
                            </button>
                        </form>
                    </div>
                </div>
            </dialog>
        </div>   
    </main>
@endsection