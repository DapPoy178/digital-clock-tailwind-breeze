@extends('layouts.template')

@section('content')
  <section class="h-screen">
    <main class="p-[30px] h-full flex flex-row">
      <div class="w-3/12 h-full mr-5">
        <div class="w-full h-[260px] flex flex-col align-middle border-2 rounded-[20px] border-[#4D4D4D] drop-shadow-2xl bg-white px-[30px] py-5">
          <div class="flex">
            <div class="flex flex-row justify-center items-center">
              <span class="bg-primary rounded-full h-8 w-8 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="m-0 block mx-auto" width="1.25em" height="1.25em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50"><path fill="white" d="M48.022 26.652c-1.396 6.519-6.192 11.874-12.516 13.976a18.88 18.88 0 0 1-5.975.973a18.873 18.873 0 0 1-17.93-12.914a18.716 18.716 0 0 1 1.03-14.404a18.773 18.773 0 0 1 10.93-9.46a18.923 18.923 0 0 1 13.71.689l.935-1.763C31.943-.12 24.142-1.046 17.128 1.287C10.785 3.396 5.644 7.846 2.652 13.815c-2.992 5.97-3.476 12.746-1.364 19.08A24.997 24.997 0 0 0 25.035 50c2.682 0 5.343-.433 7.911-1.286A24.961 24.961 0 0 0 49.998 26.94l-1.976-.288zM35.697 14.603l-5.014-9.384l-2.55 10.477l-10.429 2.05l9.547 5.421l-1.642 10.796l8.107-7.374l10.046 4.82l-5.131-10.027l8.124-7.842z"/></svg>
              </span>
            </div>
            <p class="text-lg p-0 font-bold text-primary pl-3 leading-9">Masjid Al Yadul 'Ulya</p>
          </div>
          <div class="border-b-2 border-primary">
            <h2 class="font-bold text-[42px] text-primary text-center mt-1"></h2>
          </div>
          <div class="flex flex-row items-center justify-between mt-1">
            <div>
              <p class="font-bold text-3xl text-primary uppercase">
                {{$day}}
              </p>
            </div>
            <div class="flex flex-col border-l-2 border-primary pl-4">
              <p class="font-semibold text-base text-primary leading-6">{{$gdate}}</p>
              <p class="font-semibold text-base text-primary leading-6">{{$hdate}}</p>
            </div>
          </div>
          <div class="mt-1 border-b-2 border-primary"></div>
          <div class="flex flex-row mt-3">
            <p class="font-bold text-2xl text-primary">Dzuhr</p>
            <p class="font-bold text-xl ml-auto pr-2 text-primary leading-8">-04 : 32 : 12</p>
            <p class="font-bold text-xl text-primary leading-8">></p>
          </div>
        </div>
        <div class="w-full h-[380px] flex flex-col justify-center border-2 rounded-[20px] border-[#4d4d4d] drop-shadow-2xl bg-black p-[30px] mt-5">
          <div class="flex flex-row justify-between mb-4">
            <p class="font-bold text-2xl text-secondary">Fajr</p>
            <p class="font-black text-2xl text-secondary">0{{$ptimes[0]}}</p>
          </div>
          <div class="flex flex-row justify-between mb-4">
            <p class="font-bold text-2xl text-secondary">Syuruq</p>
            <p class="font-black text-2xl text-secondary">0{{$ptimes[1]}}</p>
          </div>
          <div class="flex flex-row justify-between mb-4">
            <p class="font-bold text-2xl text-secondary">Dzuhr</p>
            <p class="font-black text-2xl text-secondary">{{$ptimes[2]}}</p>
          </div>
          <div class="flex flex-row justify-between mb-4">
            <p class="font-bold text-2xl text-secondary">Asr</p>
            <p class="font-black text-2xl text-secondary">{{$ptimes[3]}}</p>
          </div>
          <div class="flex flex-row justify-between mb-4">
            <p class="font-bold text-2xl text-secondary">Maghrib</p>
            <p class="font-black text-2xl text-secondary">{{$ptimes[4]}}</p>
          </div>
          <div class="flex flex-row justify-between">
            <p class="font-bold text-2xl text-secondary">Isya</p>
            <p class="font-black text-2xl text-secondary">{{$ptimes[5]}}</p>
          </div>
        </div>
      </div>
      <div class="w-9/12 h-full">
        <x-card :card='$income' :card='$outcome' :card='$total_kas'/>
        <x-table :tableJadwal='$jadwal'/>
        <div class="mt-5 w-full h-[59px] bg-white border-2 rounded-2xl border-[#4D4D4D] drop-shadow-2xl px-[20px] py-4">
          <x-text :rtext='$text'/>
        </div>
      </div>
    </main>
  </section>
@endsection
    