<aside class="w-72" aria-label="Sidebar">
    <div class="overflow-y-auto py-4 px-3 bg-gray-50 dark:bg-gray-800 h-screen fixed">
        <div class="flex mb-5 px-2">
            <div class="flex flex-row justify-center items-center">
              <span class="bg-white rounded-full h-7 w-7 flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="m-0 block mx-auto" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 50 50"><path fill="black" d="M48.022 26.652c-1.396 6.519-6.192 11.874-12.516 13.976a18.88 18.88 0 0 1-5.975.973a18.873 18.873 0 0 1-17.93-12.914a18.716 18.716 0 0 1 1.03-14.404a18.773 18.773 0 0 1 10.93-9.46a18.923 18.923 0 0 1 13.71.689l.935-1.763C31.943-.12 24.142-1.046 17.128 1.287C10.785 3.396 5.644 7.846 2.652 13.815c-2.992 5.97-3.476 12.746-1.364 19.08A24.997 24.997 0 0 0 25.035 50c2.682 0 5.343-.433 7.911-1.286A24.961 24.961 0 0 0 49.998 26.94l-1.976-.288zM35.697 14.603l-5.014-9.384l-2.55 10.477l-10.429 2.05l9.547 5.421l-1.642 10.796l8.107-7.374l10.046 4.82l-5.131-10.027l8.124-7.842z"/></svg>
              </span>
            </div>
            <p class="text-sm p-0 font-black text-white pl-2 leading-9">Masjid Al Yadul 'Ulya</p>
          </div>
        <ul class="space-y-2">
            <li>
                <a href="{{url("/dashboard")}}"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg aria-hidden="true"
                        class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                        fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                        <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                    </svg>
                    <span class="ml-3">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{url("/uang-kas")}}"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M6 11a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm12 0a1 1 0 1 0 1 1a1 1 0 0 0-1-1Zm2-6H4a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h16a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3Zm1 11a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1Zm-9-7a3 3 0 1 0 3 3a3 3 0 0 0-3-3Zm0 4a1 1 0 1 1 1-1a1 1 0 0 1-1 1Z"/>
                    </svg>
                    <span class="ml-3">Uang Kas</span>
                </a>
            </li>
            <li>
                <a href="{{url("/jadwal-kajian")}}"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M8 17q.425 0 .713-.288Q9 16.425 9 16t-.287-.713Q8.425 15 8 15t-.713.287Q7 15.575 7 16t.287.712Q7.575 17 8 17Zm0-4q.425 0 .713-.288Q9 12.425 9 12t-.287-.713Q8.425 11 8 11t-.713.287Q7 11.575 7 12t.287.712Q7.575 13 8 13Zm0-4q.425 0 .713-.288Q9 8.425 9 8t-.287-.713Q8.425 7 8 7t-.713.287Q7 7.575 7 8t.287.712Q7.575 9 8 9Zm3 8h6v-2h-6Zm0-4h6v-2h-6Zm0-4h6V7h-6ZM5 21q-.825 0-1.413-.587Q3 19.825 3 19V5q0-.825.587-1.413Q4.175 3 5 3h14q.825 0 1.413.587Q21 4.175 21 5v14q0 .825-.587 1.413Q19.825 21 19 21Zm0-2h14V5H5v14ZM5 5v14V5Z"/>
                    </svg>
                    <span class="ml-3">Jadwal Kajian</span>
                </a>
            </li>
            <li>
                <a href="{{url("/text")}}"
                    class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M0 4s0-2 2-2h12s2 0 2 2v6s0 2-2 2h-4c0 .667.083 1.167.25 1.5H11a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1h.75c.167-.333.25-.833.25-1.5H2s-2 0-2-2V4zm1.398-.855a.758.758 0 0 0-.254.302A1.46 1.46 0 0 0 1 4.01V10c0 .325.078.502.145.602c.07.105.17.188.302.254a1.464 1.464 0 0 0 .538.143L2.01 11H14c.325 0 .502-.078.602-.145a.758.758 0 0 0 .254-.302a1.464 1.464 0 0 0 .143-.538L15 9.99V4c0-.325-.078-.502-.145-.602a.757.757 0 0 0-.302-.254A1.46 1.46 0 0 0 13.99 3H2c-.325 0-.502.078-.602.145z"/>
                    </svg>
                    <span class="ml-3">Text Berjalan</span>
                </a>
            </li>
        </ul>   
    </div>
</aside>