<div class="w-full h-[361px] px-10 py-[30px] bg-white border-2 rounded-[20px] border-[#4D4D4D] drop-shadow-2xl mt-5">
    <p class="font-black text-2xl">Jadwal Kajian</p>
    <table class="w-full table border-separate mt-4 table-auto">
        <thead>
            <tr>
                <td class="font-bold pl-3 text-base">Tanggal</td>
                <td class="font-bold text-base">Tema</td>
                <td class="font-bold text-base">Pemateri</td>
                <td class="font-bold text-base">Waktu</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($tableJadwal as $item)
            <tr class="border-2 border-[#4D4D4D] bg-slate-100">
                <td class="py-3 pl-3 font-semibold text-sm">
                    {{$item->tanggal}}
                </td>
                <td class="py-3 font-semibold text-sm">
                    {{$item->tema}}
                </td>
                <td class="py-3 font-semibold text-sm">
                    {{$item->pemateri}}
                </td>
                <td class="py-3 font-semibold text-sm">
                    {{$item->waktu}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
