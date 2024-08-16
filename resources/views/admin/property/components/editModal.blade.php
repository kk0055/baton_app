<div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center "
    id="{{ $property->id }}">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
        action="{{ route('admin.property.update', ['property' => $property->id]) }}" method="POST"
        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="relative w-auto my-6 mx-auto max-w-3xl edit-modal">
            <!--content-->
            <div
                class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                <!--header-->
                <div class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                    <h3 class="text-3xl">
                        ID: {{ $property->id }}
                    </h3>
                    <button
                        class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                        onclick="toggleModal({{ $property->id }})">
                        <span
                            class="bg-transparent text-black opacity-5 h-6 w-6 text-2xl block outline-none focus:outline-none">
                            ×
                        </span>
                    </button>
                </div>
                <!--body-->
                <div class="relative p-6 flex-auto">
                    <div class="mb-4">
                        <div class="max-w-sm mx-auto bg-white rounded-lg shadow-md overflow-hidden items-center">
                            <div class="px-4 py-6">
                                {{-- Image --}}
                                <input id="upload-{{ $property->id }}" type="file" class='hidden edit-image'
                                    name="image" accept="image/*" />
                                <div id="image-preview-{{ $property->id }}"
                                    class="max-w-sm p-6 mb-4 bg-gray-100 border-dashed border-2 border-gray-400 rounded-lg items-center mx-auto text-center cursor-pointer">
                                    <label for="upload-{{ $property->id }}" class="cursor-pointer">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor"
                                            class="w-8 h-8 text-gray-700 mx-auto mb-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5m-13.5-9L12 3m0 0l4.5 4.5M12 3v13.5" />
                                        </svg>
                                        <h5 class="mb-2 text-xl font-bold tracking-tight text-gray-700">Upload a file
                                        </h5>
                                        <span id="filename-{{ $property->id }}"
                                            class="text-gray-500 bg-gray-200 z-50"></span>
                                    </label>
                                </div>
                                <div class="flex items-center justify-center">
                                </div>
                            </div>
                        </div>
                        <label class="block text-gray-700 text-sm font-bold mb-2 mt-4" for="order">
                            表示順
                        </label>
                        <input
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="order" name="order" type="number" value="{{ $property->order }}">
                        <label class="block text-gray-700 text-sm font-bold mb-1 mt-4">表示設定</label>
                        <div>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="is_display" value="1"
                                    {{ old('is_display', $property->is_display) == '1' ? 'checked' : '' }}>
                                <span class="ml-2">表示</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="is_display" value="0"
                                    {{ old('is_display', $property->is_display) == '0' ? 'checked' : '' }}>
                                <span class="ml-2">非表示</span>
                            </label>
                        </div>
                        <div>
                            <label class="block text-gray-700 text-sm font-bold mb-1 mt-4">タイプ</label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="type" value="賃貸"
                                    {{ old('type', $property->type) == '賃貸' ? 'checked' : '' }}>
                                <span class="ml-2">賃貸</span>
                            </label>
                            <label class="inline-flex items-center ml-6">
                                <input type="radio" class="form-radio" name="type" value="売買"
                                    {{ old('type', $property->type) == '売買' ? 'checked' : '' }}>
                                <span class="ml-2">売買</span>
                            </label>
                        </div>
                        <div>
                            <label for="type" class="block text-gray-700 text-sm font-bold mb-2 mt-4">価格帯
                            </label>
                            <select name="price" id="type"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                                @foreach ($propertyPrices as $price)
                                    <option value="{{ $price }}"  {{ (isset($property->price) && $property->price == $price) ? 'selected' : '' }}>
                                        {{ $price}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <!--footer-->
                <div class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                    <button
                        class="mr-2 px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80"
                        type="submit">
                        変更
                    </button>
                    <button class="ml-2 bg-gray-400 text-black py-2 px-4 rounded  focus:shadow-outline" type="button"
                        onclick="toggleModal( {{ $property->id }})">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
<div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="{{ $property->id }}-backdrop"></div>
