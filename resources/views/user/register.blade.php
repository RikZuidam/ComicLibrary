<x-layout>
    <x-card>
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Register</h2>
            <p class="mb-4">Create an account to post gigs</p>
            </header>

            <form method="POST" action="/registerSubmit">
            @csrf
            <div>
                <label><b>Name</b></label>
                <br>
                <input type="text" class="w-100" name="name" value="{{old('name')}}" />

                @error('name')
                <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <br>
            <div class="mb-6">
                <label><b>Email</b></label>
                <br>
                <input type="email" class="w-100" name="email" value="{{old('email')}}" />

                @error('email')
                <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <br>
            <div class="mb-6">
                <label><b>Password</b></label>
                <br>
                <input type="password" class="w-100" name="password" value="{{old('password')}}" />

                @error('password')
                <p class="text-danger text-xs mt-1">{{$message}}</p>
                @enderror
            </div>
            <br>
            <div class="mb-6">
                <label><b>Confirm Password</b></label>
                <br>
                <input type="password" class="w-100" name="password_confirmation" value="{{old('password_confirmation')}}" />
            </div>
            <br>
            <div class="mb-6">
                <button type="submit" class="w-100">
                Sign Up
                </button>
            </div>

            <div class="mt-8">
                <p>
                Already have an account?
                <a href="/login" class="text-laravel">Login</a>
                </p>
            </div>
        </form>
    </x-card>
</x-layout>