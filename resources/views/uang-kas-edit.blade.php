@extends('layouts.template')

@section('content')
    <section class="h-screen flex flex-row">
        <x-sidebar />
        <main class="p-[20px] h-full w-full ">
            <form action="{{ url('uang-kas-edit/'.$data->id) }}" method="post" class="w-64">
                @csrf
                @method('PUT')
                <div>
                    <label for="tanggal" class="block mb-2 text-sm font-medium text-gray-900 dark:text-primary">Tanggal</label>
                    <input type="text" value="{{$data->tanggal}}" name="tanggal" id="tanggal" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" readonly>
                </div>
                <div>
                    <label for="keterangan" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Keterangan</label>
                    <input type="text" value="{{$data->keterangan}}" name="keterangan" id="keterangan" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                </div>
                <div>
                    <label for="total" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Total</label>
                    <input type="text" value="{{$data->total}}" name="total" id="total" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                </div>
                <div>
                    <label for="status" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Status</label>
                    <select name="status" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required=""">
                      <option value="{{$data->status}}">{{$data->status}}</option>
                      <option value="income">Income</option>
                      <option value="outcome">Outcome</option>
                    </select>
                </div>
                <button type="submit" class="w-full mt-5 text-primary border-2 border-[#4D4D4D] bg-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Save</button>
            </form>
        </main>
    </section>
@endsection