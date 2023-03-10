<x-guest-layout>
    <div class="bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto py-12 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">

                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:p-6">
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Forgot Password
                        </h3>
                        <div class="mt-2 max-w-xl text-sm text-gray-500">
                            <p>
                                Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                            </p>
                        </div>
                        @if (session('status'))
                            <div class="my-4 font-medium text-sm text-green-600">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form class="mt-5 sm:flex sm:items-center" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <div class="w-full sm:max-w-xs">
                                <label for="email" class="sr-only">Email</label>
                                <input id="email" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" type="email" name="email" value="{{old('email')}}" placeholder="Email" required autofocus />
                            </div>
                            <button type="submit" class="mt-3 w-full inline-flex items-center justify-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                Reset Password
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
