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
            <form class="w-64" method="POST" action="{{ url('/text-edit/'.$data->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-primary">Text</label>
                    <input type="text" value={{$data->text}} name="text" id="text" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <button type="submit" class="w-full mt-5 text-primary border-2 border-[#4D4D4D] bg-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Tambah</button>
                </div>
            </form>
        </main>
    </section>
@endsection