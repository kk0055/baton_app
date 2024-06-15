<nav id="header" class="w-full z-30 top-0 py-1 flex justify-end mt-4 mr-2">
  <a href="{{ route('landing.index') }}" class=" px-4 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80
  mr-2">
    メイン画面
</a>
  <a href="{{ route('admin.property.create') }}" class=" px-4 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80 mr-2">
    新規追加
</a>

@auth
<form action="{{ route('logout') }}" method="POST">
  @csrf
  <button type="submit" class="mr-2 px-4 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80"
  >ログアウト</button>
</form>
@endauth
</nav>
