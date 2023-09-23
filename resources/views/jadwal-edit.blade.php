@extends('layouts.template')

@section('content')
    <section class="h-screen flex flex-row">
        <x-sidebar />
        <main class="p-[20px] h-full w-full relative">
            <form class="w-64" method="POST" action="{{ url('jadwal-edit/'.$data->id) }}">
                @csrf
                @method('PUT')
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-primary">Tanggal</label>
                    <input type="date" value="{{$data->tanggal}}" name="tanggal" id="tanggal" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500"required="">
                </div>
                <div>
                    <label for="tema" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Tema</label>
                    <input type="text" value="{{$data->tema}}" name="tema" id="tema" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500"required="">
                </div>
                <div>
                    <label for="pemateri" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Pemateri</label>
                    <input type="text" value="{{$data->pemateri}}" name="pemateri" id="pemateri" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="waktu" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Waktu</label>
                    <input type="time" value="{{$data->waktu}}" name="waktu" id="waktu" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <button type="submit" class="w-full mt-5 text-primary border-2 border-[#4D4D4D] bg-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Simpan</button>
                </div>
            </form>
        </main>
    </section>
@endsection