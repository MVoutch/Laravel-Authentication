<x-app-layout>
<div class="max-w-7xl mx-auto mt-4 py-6 sm:px-6 lg:px-8">

        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                        <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form method="POST" action="{{ route('user-profile-information.update') }}">
                        @csrf
                        @method('put')
                        @if(session('status') === 'profile-information-updated')
                            <div class="my-4 font-medium text-sm text-green-600">
                                Profile Info has been updated
                            </div>
                        @endif
                        <div class="shadow overflow-hidden sm:rounded-md">
                            @if ($errors->any())
                                <div class="mt-4 ml-6">
                                    <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                                    <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="space-y-4">
                                    <div class="">
                                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                        <input type="text" value="{{old('name', auth()->user()->name )}}" name="name" id="name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                                        <input type="text" name="email" value="{{old('email', auth()->user()->email )}}" id="email" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                </div>
                                <label class="block text-sm font-medium text-gray-700 mt-4"> Photo </label>
                                <div class="mt-1 flex items-center">
                                    <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                      <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                      </svg>
                                    </span>
                                    <button type="button" class="ml-5 bg-white py-2 px-3 border border-gray-300 rounded-md shadow-sm text-sm leading-4 font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Change</button>
                                </div>
                            </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                            </div>
                    </form>
                </div>
            </div>
</div>
        <div class="mt-10 sm:mt-0">
        <div class="mt-10 md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Update Password</h3>
                    <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('put')
                    @if(session('status') === 'password-updated')
                        <div class="my-4 font-medium text-sm text-green-600">
                            Password has been updated
                        </div>
                    @endif
                    <div class="shadow overflow-hidden sm:rounded-md">
                        @if ($errors->any())
                            <div class="mt-4 ml-6">
                                <div class="font-medium text-red-600">{{ __('Whoops! Something went wrong.') }}</div>

                                <ul class="mt-3 list-disc list-inside text-sm text-red-600">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="space-y-4">
                                <div class="">
                                    <label for="current_password" class="block text-sm font-medium text-gray-700">Current Password</label>
                                    <input type="password" name="current_password" id="current_password" autocomplete="current_password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="">
                                    <label for="password" class="block text-sm font-medium text-gray-700">New Password</label>
                                    <input type="password" name="password" id="password" autocomplete="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                                <div class="">
                                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Repeat New Password</label>
                                    <input type="password" name="password_confirmation" id="password_confirmation" autocomplete="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
