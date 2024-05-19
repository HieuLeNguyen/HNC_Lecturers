<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- MaGV  -->
        <div class="mt-3 ">
            <div class="d-flex alitem-center">
                <div class="btn-user">
                    <img src="{{asset('asset')}}/icons/user-solid.svg" alt="user-icon" width="24px">
                </div>
                <x-text-input id="MaGV" class="block mt-1 w-full" type="text" name="MaGV" :value="old('MaGV')" required
                    autofocus placeholder="Tên đăng nhập" autocomplete="username" />
            </div>

            <x-input-error :messages="$errors->get('MaGV')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4 ">
            <div class="d-flex items-center">
                <div class="btn-lock ">
                    <img src="{{asset('asset')}}/icons/lock-solid.svg" alt="lock-icon" width="24px">
                </div>
                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    placeholder="Mật khẩu" autocomplete="current-password" />
            </div>

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-4">
            <x-primary-button class="block btn btn-success mb-4">
                {{ __('Đăng nhập') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
