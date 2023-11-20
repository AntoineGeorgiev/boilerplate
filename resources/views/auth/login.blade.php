
<x-layouts.guest>
    <div class="flex items-center justify-center w-full min-h-screen bg-gray-200">
        <div class="w-full py-8">
            <div class="flex items-center justify-center space-x-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                </svg>
                <h1 class="text-3xl font-bold tracking-wider text-primary">{{ __('Template') }}</h1>
            </div>
            <div class="bg-white w-5/6 md:w-3/4 lg:w-2/3 xl:w-[500px] 2xl:w-[550px] mt-8 mx-auto px-16 py-8 rounded-lg shadow-2xl">

                <h2 class="text-2xl font-bold tracking-wide text-center text-gray-800">{{ __('Sign In') }}</h2>

                @if ($errors->any())
                    <div>
                        <div class="font-medium text-red-600">{{ __('Sorry, something went wrong...') }}</div>

                        <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="my-8 text-sm" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="flex flex-col my-4">
                        <label for="email" class="text-gray-700">{{ __('Email Address') }}</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            class="py-2 mt-2 text-sm text-gray-900 border-gray-300 rounded focus:outline-none focus:ring-0 focus:border-gray-300"
                            placeholder="{{ __('Enter your email') }}"
                        >
                    </div>

                    <div class="flex flex-col my-4">
                        <label for="password" class="text-gray-700">{{ __('Password') }}</label>
                        <div
                            x-data="{ show: false }"
                            class="relative flex items-center mt-2"
                        >
                            <input
                                :type=" show ? 'text': 'password' "
                                name="password"
                                id="password"
                                class="flex-1 py-2 pr-10 text-sm text-gray-900 border-gray-300 rounded focus:outline-none focus:ring-0 focus:border-gray-300"
                                placeholder="{{ __('Enter your password') }}"
                            >
                            <button
                                @click="show = !show"
                                type="button"
                                class="absolute flex items-center justify-center text-gray-700 bg-transparent right-2"
                            >
                                <svg x-show="!show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"></path></svg>

                                <svg x-show="show" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" style="display: none;"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                            </button>
                        </div>
                    </div>

                    <div class="flex items-center justify-end my-4 space-x-4">
                        <button
                            type="submit"
                            class="px-8 py-2 text-gray-100 uppercase transition duration-150 rounded-lg bg-primary hover:bg-primary-dark hover:shadow-xl">
                            {{ __('Sign In') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.guest>
