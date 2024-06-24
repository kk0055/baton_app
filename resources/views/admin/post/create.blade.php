@extends('layout.admin.admin')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{-- <form action="{{ route('admin.post.store') }}" method="POST"> --}}
            
            {{-- <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Title">
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" name="content" placeholder="Content"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button> --}}
            <div class="py-12">
              <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                      <div class="p-6 bg-white border-b border-gray-200">
                          <form action="{{ route('admin.post.store') }}" method="POST" >
                            @csrf
                              <div class="mb-4">
                                  <label class="text-xl text-gray-600">Title <span class="text-red-500">*</span></label></br>
                                  <input type="text" class="border-2 border-gray-300 p-2 w-full" name="title" id="title" value="" required>
                              </div>
      
                              <div class="mb-8">
                                  <label class="text-xl text-gray-600">Content <span class="text-red-500">*</span></label></br>
                                  <textarea name="content" class="border-2 border-gray-500">
                                      
                                  </textarea>
                              </div>
      
                              <div class="flex p-1">
                                
                                  <button role="submit" class=" px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80"required>追加</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>
      
          <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
      
          <script>
              CKEDITOR.replace( 'content' );
          </script>
        {{-- </form> --}}
    </div>
@endsection
