@extends('layouts.template')

@section('content')
    <section class="h-screen flex flex-row">
        <x-sidebar />
        <main class="p-[20px] h-full w-full ">
            <x-card :card='$income' :card='$outcome' :card='$total_kas'/>
            <x-table :tableJadwal='$jadwal'/>
        </main>
    </section>
@endsection
