<x-layout>
    <x-card>
      <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
        <p class="mb-4">Log into your account to post gigs</p>
      </header>
  
      <form method="POST" action="/loginSubmit">
        @csrf
  
        <div class="mb-6">
          <label for="email"><b>Email</b></label>
          <br>
          <input type="email" name="email" class="w-100" value="{{old('email')}}" />
  
          @error('email')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <br>
        <div class="mb-6">
          <label for="password"><b>Password</b></label>
          <input type="password" class="w-100" name="password" value="{{old('password')}}" />
  
          @error('password')
          <p class="text-danger text-xs mt-1">{{$message}}</p>
          @enderror
        </div>
        <br>
        <div class="mb-6">
          <button type="submit" class="w-100">Sign In</button>
        </div>
  
        <div class="mt-8">
          <p>
            Don't have an account?
            <a href="/register" class="text-laravel">Register</a>
          </p>
        </div>
      </form>
    </x-card>
</x-layout>