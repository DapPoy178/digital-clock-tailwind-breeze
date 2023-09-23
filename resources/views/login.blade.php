@extends('layouts.template')

@section('content')
    <section>
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div class="w-full rounded-lg md:mt-0 sm:max-w-md xl:p-0 border-2 border-[#4D4D4D] drop-shadow-2xl bg-white">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-primary">
                        Sign in to your account
                    </h1>
                    <form method="POST" action="">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-primary">Your email</label>
                            <input type="email" name="email" id="email" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@company.com" required="">
                            @error('email')
                                <p class="text-red-500 text-xs mt-2 mb-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <div>
                            <label for="password" class="block mt-2 mb-2 text-sm font-medium text-gray-900 dark:text-primary">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-slate-5 border borderslatey2000 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-slate-50 dark:border-slate-200 dark:placeholder-gray-400 dark:text-primary dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>
                        <button type="submit" class="w-full mt-5 text-primary border-2 border-[#4D4D4D] bg-white hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
  </section>    
@endsection
