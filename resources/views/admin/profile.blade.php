@extends('admin.layouts.app', [
'pageName' => 'Profile'
])

@section('content')
    <livewire:profile />
	<!-- Profile -->
    {{-- <section class="profile p-6 md:p-8 -mt-16">
        <form wire:submit.prevent="updateProfile">
            @csrf

            <article class="relative w-full p-4 md:p-12 rounded-lg bg-white shadow-lg flex flex-col items-center">
                <div class="profile-image absolute rounded-full top-0 -mt-10 bg-gray-200 overflow-hidden">
                    <div class="relative w-40 h-40 md:w-48 md:h-48 lg:w-64 lg:h-64">
                        <img src="{{ auth()->user()->avatarUrl() }}" alt="Profile" class="w-full h-full">
                    </div>
                </div>

                <div class="profile-info w-full md:mr-0 mt-32 lg:mt-56">
                    <h2 class="uppercase container text-2xl font-hairline font-sans mb-6">{{ auth()->user()->name }}</h2>


                    <div class="flex flex-col md:flex-row -mx-3 mb-4">
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">{{ __('Name') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="name" type="text" placeholder="{{ __('Name') }}" value="{{ auth()->user()->name ?? old('name') }}">
                            @error('name') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full md:w-1/2 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">{{ __('Email') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="email" type="text" placeholder="{{ __('Email') }}" value="{{ auth()->user()->email ?? old('email') }}">
                            @error('email') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                    </div>

                    <h2 class="uppercase text-2xl font-hairline font-sans my-4">{{ __('Password') }}</h2>

                    <div class="flex flex-col md:flex-wrap lg:flex-row -mx-3 mb-4">
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="current_password">{{ __('Current Password') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="current_password" type="password" placeholder="{{ __('Current Password') }}">
                            @error('current_password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password">{{ __('New Password') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password" type="password" placeholder="{{ __('New Password') }}">
                            @error('password') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                        <div class="w-full lg:w-1/3 px-3 mb-4 md:mb-6 md:mb-0">
                            <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="password_confirmation">{{ __('Password Confirmation') }}</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-4 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" name="password_confirmation" type="password" placeholder="{{ __('Password Confirmation') }}">
                            @error('password_confirmation') <p class="text-red-500 text-xs italic">{{ ucfirst($message) }}</p> @enderror
                        </div>
                    </div>

                    <div class="flex items-center">
                            <button class="shadow bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 rounded" type="submit">{{ __('Update') }}</button>
                            <a class="shadow bg-gray-500 hover:bg-gray-400 focus:shadow-outline focus:outline-none uppercase tracking-wide text-white text-xs font-bold py-2 px-4 ml-4 rounded" href="{{ redirect()->back() }}">{{ __('Cancel') }}</a>
                    </div>
                </div>
            </article>
        </form>
    </section> --}} <!-- ./ Profile -->

@endsection