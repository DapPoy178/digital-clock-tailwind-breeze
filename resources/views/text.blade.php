@extends('layouts.template')

@section('content')
    <section class="h-screen flex flex-row">
        <x-sidebar />
        <main class="p-[20px] h-full w-full relative">
            @if (session('status'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg>
                {{ session('status') }}
            </div>
            @endif
            <div class="flex flex-row pb-4 border-b sticky pt-5 top-0 left-0 right-0 bg-white">
                <p class="font-bold text-2xl">Text Berjalan</p>
                <button
                        type="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="ml-auto inline-block font-bold px-6 py-2.5 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    ><a href="{{url("text-add")}}">Tambah</a></button>
            </div>
            <table class="w-full">
            <thead class="bg-white border-b sticky top-[72px]">
                <tr>
                    <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                    #
                    </th>
                    <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                    Text
                    </th>
                    <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                    Action
                    </th>
                </tr>
                </thead>
                <tbody class="overflow-y-scroll">
                    @foreach ($text as $item)
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                            {{$item->text}}
                        </td>
                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex flex-row">
                            <a href="{{ url('text-edit/'.$item->id) }}" class="fs-5 pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="orange" d="M3 17.25V21h3.75L17.81 9.94l-3.75-3.75zM20.71 5.63l-2.34-2.34a.996.996 0 0 0-1.41 0l-1.83 1.83l3.75 3.75l1.83-1.83a.996.996 0 0 0 0-1.41z"/></svg></a>
                            <a href="{{ url('text-delete/'.$item->id) }}" onclick="return confirm('r u sure u wnat to deltet this item?')" class="fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="1.25em" height="1.25em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="red" d="M7 21q-.825 0-1.412-.587Q5 19.825 5 19V6q-.425 0-.713-.287Q4 5.425 4 5t.287-.713Q4.575 4 5 4h4q0-.425.288-.713Q9.575 3 10 3h4q.425 0 .713.287Q15 3.575 15 4h4q.425 0 .712.287Q20 4.575 20 5t-.288.713Q19.425 6 19 6v13q0 .825-.587 1.413Q17.825 21 17 21ZM7 6v13h10V6Zm2 10q0 .425.288.712Q9.575 17 10 17t.713-.288Q11 16.425 11 16V9q0-.425-.287-.713Q10.425 8 10 8t-.712.287Q9 8.575 9 9Zm4 0q0 .425.288.712q.287.288.712.288t.713-.288Q15 16.425 15 16V9q0-.425-.287-.713Q14.425 8 14 8t-.712.287Q13 8.575 13 9ZM7 6v13V6Z"/></svg></a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </section>
@endsection