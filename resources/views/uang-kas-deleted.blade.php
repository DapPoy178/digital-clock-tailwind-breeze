@extends('layouts.template')

@section('content')
    <section class="h-screen flex flex-row">
        <x-sidebar />
        <main class="p-[20px] h-full w-full ">
            @if (session('status'))
            <div class="bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full" role="alert">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="check-circle" class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path fill="currentColor" d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z"></path>
                </svg>
                {{ session('status') }}
            </div>
            @endif
            <div class="mt-5">
                <div class="flex flex-row items-center pb-4 border-b">
                    <p class="font-bold text-2xl">Riwayat Log Keuangan</p>
                    <button
                        type="button"
                        data-mdb-ripple="true"
                        data-mdb-ripple-color="light"
                        class="ml-auto inline-block font-bold px-6 py-2.5 bg-blue-600 text-white  text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out"
                    ><a href="{{url("/uang-kas-form")}}">Tambah</a></button>
                </div>
                <table class="w-full">
                    <thead class="bg-white border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                #
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Tanggal
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Keterangan
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Total
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Total Kas
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Status
                            </th>
                            <th scope="col" class="text-sm font-medium text-primary px-6 py-4 text-left">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deleted as $item)
                        <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{$loop->iteration}}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->tanggal}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->keterangan}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->total}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->total_kas}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                {{$item->status}}
                            </td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap flex flex-row">
                                <a href="{{ url('uang-kas-restore/' . $item->id) }}" onclick="return confirm('r u sure u wnat to restore this item?')" class="fs-5"><svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M13.25 3a9.003 9.003 0 0 0-9.26 9H2.2c-.45 0-.67.54-.35.85l2.79 2.8c.2.2.51.2.71 0l2.79-2.8c.32-.31.09-.85-.35-.85h-1.8c0-3.9 3.18-7.05 7.1-7c3.72.05 6.85 3.18 6.9 6.9c.05 3.91-3.1 7.1-7 7.1c-1.61 0-3.1-.55-4.28-1.48a.994.994 0 0 0-1.32.08c-.42.43-.39 1.13.08 1.5a8.931 8.931 0 0 0 5.52 1.9c5.05 0 9.14-4.17 9-9.26c-.13-4.69-4.05-8.61-8.74-8.74zm-.51 5c-.41 0-.75.34-.75.75v3.68c0 .35.19.68.49.86l3.12 1.85c.36.21.82.09 1.03-.26c.21-.36.09-.82-.26-1.03l-2.88-1.71v-3.4c0-.4-.33-.74-.75-.74z"/></svg></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </main>
    </section>
@endsection