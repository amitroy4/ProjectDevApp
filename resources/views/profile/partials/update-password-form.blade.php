<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <div>
            <label for="update_password_current_password" >Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" class="form-control mb-2 block w-25" autocomplete="current-password" placeholder="Current Password"/>
            {{-- <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" /> --}}
        </div>

        <div>
            <label for="update_password_password">New Password</label>
            <input id="update_password_password" name="password" type="password" class="form-control mb-2 block w-25" autocomplete="new-password" placeholder="New Password"/>
            {{-- <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" /> --}}
        </div>

        <div>
            <label for="update_password_password_confirmation" >Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" class="form-control mb-2 block w-25" autocomplete="new-password" placeholder="Confirm Password"/>
            {{-- <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" /> --}}
        </div>

        <div class="flex items-center gap-4">
            <Button class="btn btn-primary">Save</Button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
