@extends('layouts.app')
@section('title', 'Edit Pet')

@section('content')
    @include('layouts.navbar')
    <main class="bg-slate-950 pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#00003366] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg>
                Edit Pet
            </h1>

            {{-- Breadcrumbs --}}
            <div class="breadcrumbs text-sm mt-6">
                <ul>
                    <li>
                        <a href="{{ url('dashboard') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M104,40H56A16,16,0,0,0,40,56v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,104,40Zm0,64H56V56h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V56A16,16,0,0,0,200,40Zm0,64H152V56h48v48Zm-96,32H56a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,104,136Zm0,64H56V152h48v48Zm96-64H152a16,16,0,0,0-16,16v48a16,16,0,0,0,16,16h48a16,16,0,0,0,16-16V152A16,16,0,0,0,200,136Zm0,64H152V152h48v48Z"></path></svg>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('pets') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
                            Pets Module
                        </a>
                    </li>
                    <li>
                        <span class="inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" fill="#fff" viewBox="0 0 256 256"><path d="M227.31,73.37,182.63,28.68a16,16,0,0,0-22.63,0L36.69,152A15.86,15.86,0,0,0,32,163.31V208a16,16,0,0,0,16,16H92.69A15.86,15.86,0,0,0,104,219.31L227.31,96a16,16,0,0,0,0-22.63ZM92.69,208H48V163.31l88-88L180.69,120ZM192,108.68,147.31,64l24-24L216,84.68Z"></path></svg>
                            Edit Pet
                        </span>
                    </li>
                </ul>
            </div>
            
            {{-- Pet Form --}}
            <form action="{{ url('pets', ['pet' => $pet->id]) }}" method="post" class="mt-8 md:w-8/12 w-full flex flex-col gap-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                {{-- Form fields --}}
                <div class="form-control">
                    <label for="name" class="label">
                        <span class="label-text text-white">Pet Name</span>
                    </label>
                    <input type="text" name="name" id="name" value="{{ $pet->name }}" placeholder="Pet Name" class="input input-bordered">
                </div>
                
                <div class="form-control">
                    <label for="species" class="label">
                        <span class="label-text text-white">Species</span>
                    </label>
                    <input type="text" name="species" id="species" value="{{ $pet->species }}" placeholder="Species" class="input input-bordered">
                </div>
                
                <div class="form-control">
                    <label for="age" class="label">
                        <span class="label-text text-white">Age</span>
                    </label>
                    <input type="number" name="age" id="age" value="{{ $pet->age }}" placeholder="Age" class="input input-bordered">
                </div>
                
                <div class="form-control">
                    <label for="photo" class="label">
                        <span class="label-text text-white">Photo</span>
                    </label>
                    <input type="file" name="image" id="image" class="hidden">
                    <div class="flex items-center gap-4">
                        <div class="mask mask-squircle w-48 h-48 bg-gray-700 flex items-center justify-center">
                            @if($pet->image)
                                <img src="{{ asset('images/pets/'.$pet->image) }}" id="preview" 
                                     alt="Pet Photo" 
                                     class="w-full h-full object-cover">
                            @else
                                <img src="{{ asset('images/pets/placeholder.jpg') }}" id="preview" 
                                     alt="Placeholder Image" 
                                     class="w-full h-full object-cover">
                            @endif
                        </div>
                        <button type="button" id="upload" class="btn btn-sm btn-info text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5" />
                            </svg>
                            Upload Photo
                        </button>
                    </div>
                </div>
                
                <div class="form-control mt-4 flex items-center justify-center">
                    <button type="submit" class="btn btn-primary w-full max-w-sm">
                        Update Pet
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                </div> 
            </form>
        </div>   
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#upload').click(function() {
                $('#image').click();
            });

            $('#image').change(function() {
                $('#preview').attr('src', window.URL.createObjectURL($(this).prop('files')[0]));
            });

            @if (count($errors->all()) > 0)
                @php $content = '<ul class=\"flex flex-col gap-1\">' @endphp
                @foreach ($errors->all() as $msg)
                    @php $content .= '<li class=\"badge badge-error text-xs w-full\">'.$msg.'</li>' @endphp
                @endforeach
                @php $content .= '</ul>' @endphp
                Swal.fire({
                    position: "top-end",
                    icon: "error",
                    title: "Something went wrong!",
                    html: `@php echo $content @endphp`,
                    showConfirmButton: true,
                    confirmButtoncColor: "#154869",
                    timer: 2500
                });
            @endif
        });
    </script>
@endsection