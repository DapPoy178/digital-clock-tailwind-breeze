<div class="flex flex-row">
    <div class="w-4/12 h-[200px] px-[30px] py-5 flex flex-col bg-secondary border-2 rounded-[20px] border-[#4D4D4D] drop-shadow-2xl mr-5">
      <span class="text-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="3.125em" height="3.125em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M12 12a3 3 0 1 0 3 3a3 3 0 0 0-3-3Zm0 4a1 1 0 1 1 1-1a1 1 0 0 1-1 1Zm-.71-6.29a1 1 0 0 0 .33.21a.94.94 0 0 0 .76 0a1 1 0 0 0 .33-.21L15 7.46A1 1 0 1 0 13.54 6l-.54.59V3a1 1 0 0 0-2 0v3.59L10.46 6A1 1 0 0 0 9 7.46ZM19 15a1 1 0 1 0-1 1a1 1 0 0 0 1-1Zm1-7h-3a1 1 0 0 0 0 2h3a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h3a1 1 0 0 0 0-2H4a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3v-8a3 3 0 0 0-3-3ZM5 15a1 1 0 1 0 1-1a1 1 0 0 0-1 1Z"/></svg>
      </span>
      <p class="font-medium text-sm mt-3">Pemasukan Uang Kas<br> Pekan Ini</p>
      <p class="font-bold text-2xl mt-[20px]">Rp {{$income}}</p>
    </div>
    <div class="w-4/12 h-[200px] px-[30px] py-5 flex flex-col bg-third border-2 rounded-[20px] border-[#4D4D4D] drop-shadow-2xl mr-5">
      <span class="text-primary">
        <svg xmlns="http://www.w3.org/2000/svg" width="3.125em" height="3.125em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m10.46 6l.54-.59V9a1 1 0 0 0 2 0V5.41l.54.55A1 1 0 0 0 15 6a1 1 0 0 0 0-1.42l-2.29-2.29a1 1 0 0 0-.33-.21a1 1 0 0 0-.76 0a1 1 0 0 0-.33.21L9 4.54A1 1 0 0 0 10.46 6ZM12 12a3 3 0 1 0 3 3a3 3 0 0 0-3-3Zm0 4a1 1 0 1 1 1-1a1 1 0 0 1-1 1Zm-7-1a1 1 0 1 0 1-1a1 1 0 0 0-1 1Zm14 0a1 1 0 1 0-1 1a1 1 0 0 0 1-1Zm1-7h-4a1 1 0 0 0 0 2h4a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-8a1 1 0 0 1 1-1h4a1 1 0 0 0 0-2H4a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3v-8a3 3 0 0 0-3-3Z"/></svg>
      </span>
      <p class="font-medium text-sm mt-3">Pengeluaran Uang Kas<br> Pekan Ini</p>
      <p class="font-bold text-2xl mt-[20px]">Rp {{$outcome}}</p>
    </div>
    <div class="w-4/12 h-[200px] px-[30px] py-5 flex flex-col bg-black border-2 rounded-[20px] border-[#4D4D4D] drop-shadow-2xl">
      <span class="text-white">
        <svg xmlns="http://www.w3.org/2000/svg" width="3.125em" height="3.125em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="M6 11a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm12 0a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm2-6H4a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3Zm1 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1Zm-9-7a3 3 0 1 0 3 3a3 3 0 0 0-3-3Zm0 4a1 1 0 1 1 1-1a1 1 0 0 1-1 1Z"/></svg>
      </span>
      <p class="font-medium text-sm mt-3 text-white">Total Uang Kas<br> Pekan Ini</p>
      <p class="font-bold text-2xl mt-[20px] text-white">Rp {{$total_kas}}</p>
    </div>
  </div>