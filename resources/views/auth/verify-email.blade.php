<x-guest-layout>
    <div class="min-h-full flex flex-col justify-center py-12 sm:px-6 lg:px-8"><div class="bg-white shadow sm:rounded-lg">
            <div class="px-4 py-5 sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Update your email</h3>
                <div class="mt-2 text-sm text-gray-500">
                    <p>Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you didn't receive the email, we will gladly send you another.</p>
                </div>
                @if (session('status') == 'verification-link-sent')
                    <div class="mt-4 font-medium text-sm text-green-600">
                        A new verification link has been sent to the email address you provided in your profile settings.
                    </div>
                @endif
                <div class="mt-4 flex items-center justify-between">
                <form class="mt-5" method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button type="submit" class="inline-flex items-center justify-center px-4 py-2 border border-transparent font-medium rounded-md text-blue-700 bg-blue-100 hover:bg-blue-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500 sm:text-sm">Resend Verification Email</button>
                </form>

                    <div>

                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf

                            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 ml-2">
                                Log Out
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
