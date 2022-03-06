@extends('layouts.app')

@section('content')
  <section class="text-gray-600 body-font">
    <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
      <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
        <h1 class="title-font font-medium text-3xl text-gray-900">Slow-carb next level shoindcgoitch ethical authentic,
          poko scenester</h1>
        <p class="leading-relaxed mt-4">Poke slow-carb mixtape knausgaard, typewriter street art gentrify hammock
          starladder roathse. Craies vegan tousled etsy austin.</p>
      </div>
      <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
        <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>

        <form action="{{ route('register') }}" method="post">
          @csrf
          <div class="relative mb-4">
            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
            <input type="text" id="name" name="name"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('name') border-red-500 @enderror"
              value="{{ old('name') }}">
            @error('name')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="relative mb-4">
            <label for="username" class="leading-7 text-sm text-gray-600">Username</label>
            <input type="text" id="username" name="username"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('username') border-red-500 @enderror"
              value="{{ old('username') }}">
            @error('username')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="relative mb-4">
            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
            <input type="email" id="email" name="email"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('email') border-red-500 @enderror"
              value="{{ old('email') }}">
            @error('email')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="relative mb-4">
            <label for="password" class="leading-7 text-sm text-gray-600">Password</label>
            <input type="password" id="password" name="password"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('password') border-red-500 @enderror"
              value="{{ old('password') }}">
            @error('password')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>

          <div class="relative mb-4">
            <label for="password_confirmation" class="leading-7 text-sm text-gray-600">Password Again</label>
            <input type="password" id="password_confirmation" name="password_confirmation"
              class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out @error('password_confirmation') border-red-500 @enderror"
              value="{{ old('password_confirmation') }}">
            @error('password_confirmation')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
            @enderror
          </div>



          <button type="submit"
            class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button
          </button>
          <p class="text-xs text-gray-500 mt-3"></p>

        </form>

      </div>
    </div>
  </section>
@endsection
