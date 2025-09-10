@extends('layouts.app')
@section('title', 'Pets Module')

@section('content')
    @include('layouts.navbar')
    <main class="bg-slate-950 pt-20 bg-cover w-full min-h-[100dvh] flex flex-col justify-center items-center">
        <div class="bg-[#00003366] md:w-10/12 w-full text-white p-10 rounded-lg flex flex-col justify-center items-center">
            <h1 class="text-2xl flex gap-2 items-center pb-2 border-b-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-12" fill="#fff" viewBox="0 0 256 256"><path d="M212,80a28,28,0,1,0,28,28A28,28,0,0,0,212,80Zm0,40a12,12,0,1,1,12-12A12,12,0,0,1,212,120ZM72,108a28,28,0,1,0-28,28A28,28,0,0,0,72,108ZM44,120a12,12,0,1,1,12-12A12,12,0,0,1,44,120ZM92,88A28,28,0,1,0,64,60,28,28,0,0,0,92,88Zm0-40A12,12,0,1,1,80,60,12,12,0,0,1,92,48Zm72,40a28,28,0,1,0-28-28A28,28,0,0,0,164,88Zm0-40a12,12,0,1,1-12,12A12,12,0,0,1,164,48Zm23.12,100.86a35.3,35.3,0,0,1-16.87-21.14,44,44,0,0,0-84.5,0A35.25,35.25,0,0,1,69,148.82,40,40,0,0,0,88,224a39.48,39.48,0,0,0,15.52-3.13,64.09,64.09,0,0,1,48.87,0,40,40,0,0,0,34.73-72ZM168,208a24,24,0,0,1-9.45-1.93,80.14,80.14,0,0,0-61.19,0,24,24,0,0,1-20.71-43.26,51.22,51.22,0,0,0,24.46-30.67,28,28,0,0,1,53.78,0,51.27,51.27,0,0,0,24.53,30.71A24,24,0,0,1,168,208Z"></path></svg>
                Pets Module:
            </h1>
            <div class="join mt-4">
                <a href="{{ url('pets/create') }}" class="btn bg-blue-600 hover:bg-blue-700 text-white join-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M128,24A104,104,0,1,0,232,128,104.11,104.11,0,0,0,128,24Zm0,192a88,88,0,1,1,88-88A88.1,88.1,0,0,1,128,216Zm48-88a8,8,0,0,1-8,8H136v32a8,8,0,0,1-16,0V136H88a8,8,0,0,1,0-16h32V88a8,8,0,0,1,16,0v32h32A8,8,0,0,1,176,128Z"></path></svg>
                    Add Pet
                </a>
                <a href="{{ url('export/pets/pdf') }}" class="btn join-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M224,152a8,8,0,0,1-8,8H192v16h16a8,8,0,0,1,0,16H192v16a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8h32A8,8,0,0,1,224,152ZM92,172a28,28,0,0,1-28,28H56v8a8,8,0,0,1-16,0V152a8,8,0,0,1,8-8H64A28,28,0,0,1,92,172Zm-16,0a12,12,0,0,0-12-12H56v24h8A12,12,0,0,0,76,172Zm88,8a36,36,0,0,1-36,36H112a8,8,0,0,1-8-8V152a8,8,0,0,1,8-8h16A36,36,0,0,1,164,180Zm-16,0a20,20,0,0,0-20-20h-8v40h8A20,20,0,0,0,148,180ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,0,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.69L160,51.31Z"></path></svg>
                    Export
                </a>
                <a href="{{ url('export/pets/excel') }}" class="btn join-item">
                    <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z"></path></svg>
                    Export
                </a>
                {{-- <form action="{{ url('import/pets') }}" class="btn join-item" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" id="file" class="hidden" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet">
                    <div class="btn-import flex justify-center items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" fill="currentColor" viewBox="0 0 256 256"><path d="M156,208a8,8,0,0,1-8,8H120a8,8,0,0,1-8-8V152a8,8,0,0,1,16,0v48h20A8,8,0,0,1,156,208ZM92.65,145.49a8,8,0,0,0-11.16,1.86L68,166.24,54.51,147.35a8,8,0,1,0-13,9.3L58.17,180,41.49,203.35a8,8,0,0,0,13,9.3L68,193.76l13.49,18.89a8,8,0,0,0,13-9.3L77.83,180l16.68-23.35A8,8,0,0,0,92.65,145.49Zm98.94,25.82c-4-1.16-8.14-2.35-10.45-3.84-1.25-.82-1.23-1-1.12-1.9a4.54,4.54,0,0,1,2-3.67c4.6-3.12,15.34-1.72,19.82-.56a8,8,0,0,0,4.07-15.48c-2.11-.55-21-5.22-32.83,2.76a20.58,20.58,0,0,0-8.95,14.95c-2,15.88,13.65,20.41,23,23.11,12.06,3.49,13.12,4.92,12.78,7.59-.31,2.41-1.26,3.33-2.15,3.93-4.6,3.06-15.16,1.55-19.54.35A8,8,0,0,0,173.93,214a60.63,60.63,0,0,0,15.19,2c5.82,0,12.3-1,17.49-4.46a20.81,20.81,0,0,0,9.18-15.23C218,179,201.48,174.17,191.59,171.31ZM40,112V40A16,16,0,0,1,56,24h96a8,8,0,0,1,5.66,2.34l56,56A8,8,0,0,1,216,88v24a8,8,0,1,1-16,0V96H152a8,8,0,0,1-8-8V40H56v72a8,8,0,0,1-16,0ZM160,80h28.68L160,51.31Z"></path></svg>
                        Import
                    </div>
                </form> --}}
            </div>

            <div class="overflow-x-auto mt-8 w-full">
                <table class="table table-zebra text-center text-white">
                    {{-- head --}}
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Pet Name</th>
                            <th>Species</th>
                            <th>Age</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="datalist">
                        {{-- rows --}}
                        @if (count($pets) > 0)
                            @foreach ($pets as $pet)
                                <tr>
                                    <td>{{ $pet->id }}</td>
                                    <td>{{ $pet->name }}</td>
                                    <td>{{ $pet->species }}</td>
                                    <td>{{ $pet->age }}</td>
                                    <td>
                                        <div class="flex gap-2 justify-center">
                                            <a href="{{ url('pets', ['pet' => $pet->id]) }}" class="btn btn-sm btn-info text-white">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.575 3.01 9.963 7.173.094.346.094.692 0 1.038C20.575 16.49 16.638 19.5 12 19.5c-4.638 0-8.575-3.01-9.963-7.173Z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                                </svg>
                                                View
                                            </a>
                                            <a href="{{ url('pets', ['pet' => $pet->id, 'edit']) }}" class="btn btn-sm btn-warning">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.242-8.256Z" />
                                                </svg>
                                                Edit
                                            </a>
                                            <button class="btn btn-sm btn-delete" data-id="{{ $pet->id }}" data-name="{{ $pet->name }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="size-4" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.919a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m-1.022.166a48.12 48.12 0 0 1 7.5 0m-3.478-.397a48.108 48.108 0 0 1 7.5 0m7.5-1.655C20.735 4.79 19.866 4.5 18.995 4.5H5.005c-.87 0-1.735.29-2.505.86-1.928.74-3.085 2.87-3.085 5.176v.38c0 .245.022.486.064.726a2.053 2.053 0 0 0 1.954 1.841c.294.015.589.022.883.022h15.939c.294 0 .589-.007.883-.022a2.053 2.053 0 0 0 1.954-1.841c.042-.24.064-.48.064-.726v-.38c0-2.306-1.157-4.436-3.085-5.176Z" />
                                                </svg>
                                                Delete
                                            </button>
                                            <form action="{{ url('pets', ['pet' => $pet->id]) }}" method="post" class="hidden">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="5" class="text-center">No pets found!</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>

        </div>   
    </main>
@endsection

@section('js')
    <script>
        $(document).ready(function() {

            // Search
            $('.btn-search').click(function () {
                var $query = $('#q').val();
                var $token = $('input[name="_token"]').val();

                $('.datalist').html(`
                            <tr>
                                <td colspan="5" class="text-center">
                                    <span class="loading loading-dots loading-lg"></span>
                                </td>
                            </tr>`)
                setTimeout(() => {
                    $.post("search/pets", {'q': $query, '_token': $token},
                        function (data) {
                            $('.datalist').html(data).hide().fadeIn('1000')
                        }
                    )
                }, 2000);
            })

            // Delete
            $('table').on('click', '.btn-delete', function() {
                Swal.fire({
                    title: "Are you sure?",
                    text: `You want to delete ${$(this).data('name')}`,
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#003153",
                    cancelButtonColor: "#154869",
                    confirmButtonText: "Yes!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).next().submit()
                    }
                });

            })
            }
            

            // Message
            @if (session('message'))
                Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Congratulations !",
                    text: "{{ session('message') }}",
                    showConfirmButton: true,
                    confirmButtoncColor: "#154869",
                    timer: 2500
                });
            @endif
        });
    </script>
@endsection