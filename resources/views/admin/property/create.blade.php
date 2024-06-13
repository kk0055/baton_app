@extends('layout.admin.admin')

@section('title', '管理')

@section('content')
    <!-- component -->
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-xs container">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ route('admin.property.store') }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="list-disc list-inside text-red-500">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden items-center">
                        <div class="px-4 py-6">
                            {{-- Image --}}
                            <input id="upload" type="file" class='hidden' name="image" accept="image/*" />
                            <div id="image-preview"
                                class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                                <label for="upload" class="cursor-pointer">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                    </svg>
                                    <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload a file
                                    </h5>
                                    <span id="filename" class="text-gray-500 bg-gray-200 z-50"></span>
                                </label>
                            </div>
                            <div class="flex items-center justify-center">
                            </div>
                        </div>
                    </div>
                    <label class="block text-gray-700 text-sm font-bold mb-2 mt-4" for="order">
                        表示順(降順)
                    </label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="order" name="order" type="number">

                    <label for="type" class="block text-gray-700 text-sm font-bold mb-2 mt-4">タイプ</label>
                    <select name="type" id="type"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        @foreach ($propertyTypes as $type)
                            <option value="{{ $type }}">
                                {{ $type }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex items-center justify-between">
                    <button
                        class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80"
                        type="submit">
                        追加
                    </button>
            </form>
            <button class="bg-gray-400 text-black py-2 px-4 rounded  focus:shadow-outline" type="button">
                <a href="{{ route('admin.property.index') }}">キャンセル</a>
            </button>
        </div>
    </div>
    </div>
    <script>
        const uploadInput = document.getElementById('upload');
        const filenameLabel = document.getElementById('filename');
        const imagePreview = document.getElementById('image-preview');

        // Check if the event listener has been added before
        let isEventListenerAdded = false;

        uploadInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                filenameLabel.textContent = file.name;
                const reader = new FileReader();
                reader.onload = (e) => {
                    imagePreview.innerHTML =
                        `<img src="${e.target.result}" class="max-h-48 rounded-lg mx-auto" alt="Image preview" />`;
                    imagePreview.classList.remove('border-dashed', 'border-2', 'border-gray-400');
                    // Add event listener for image preview only once
                    if (!isEventListenerAdded) {
                        imagePreview.addEventListener('click', () => {
                            uploadInput.click();
                        });
                        isEventListenerAdded = true;
                    }
                };
                reader.readAsDataURL(file);
            } else {
                filenameLabel.textContent = '';
                imagePreview.innerHTML =
                    `<div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center text-gray-500">No image preview</div>`;
                imagePreview.classList.add('border-dashed', 'border-2', 'border-gray-400');

                // Remove the event listener when there's no image
                imagePreview.removeEventListener('click', () => {
                    uploadInput.click();
                });

                isEventListenerAdded = false;
            }
        });

        uploadInput.addEventListener('click', (event) => {
            event.stopPropagation();
        });
    </script>
@endsection
