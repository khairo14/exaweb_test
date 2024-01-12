@extends('layout.app')

@section('content')
<div class="border-b border-white/10 pb-12">
    <h2 class="text-base font-semibold leading-7 text-white">Personal Information</h2>
    <p class="mt-1 text-sm leading-6 text-gray-400">Use a permanent address where you can receive mail.</p>

    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-5">
      <div class="sm:col-span-full">
        <label for="first-name" class="block text-sm font-medium leading-6 text-white">Full name</label>
        <div class="mt-2">
          <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full pl-3 rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="sm:col-span-full">
        <label for="email" class="block text-sm font-medium leading-6 text-white">Email address</label>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="email" class="block w-full pl-3 rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="sm:col-span-full">
        <label for="street-address" class="block text-sm font-medium leading-6 text-white">Password</label>
        <div class="mt-2">
          <input type="password" name="password" id="password" class="block w-full pl-3 rounded-md border-0 bg-white/5 py-1.5 text-white shadow-sm ring-1 ring-inset ring-white/10 focus:ring-2 focus:ring-inset focus:ring-indigo-500 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div class="sm:col-span-full mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 mr-2 text-white">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Save</button>
      </div>
    </div>
</div>
@endsection
