@extends('layout.admin.admin')
@include('components.nav')
@section('content')
<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #bdd1d1;
    border-radius: 5px;
    padding: 20px;
    margin-top: 20px;
}

</style>
    <div class="max-w-sm mx-auto container" >
        <form action="{{ route('login') }}" method="POST" class="space-y-5">
            @csrf
            @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror
            <div class="mb-5 ">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">メールアドレス</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="shadow-sm bg-gray-50 border 
 border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />

            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">パスワード</label>
                <input type="password" id="password" name="password"
                    class=" shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block  p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                    required />
            </div>
            <div class="flex items-start mb-5">
                <label for="remember">
                    <input type="checkbox" name="remember" id="remember">
                    3日ログインしたまま
                </label>
            </div>
            <button type="submit"
                class=" px-4 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80
  mr-2">Login</button>
        </form>
    </div>
@endsection
