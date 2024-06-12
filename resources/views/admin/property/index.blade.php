@extends('layout.admin.admin')

@section('title', '管理')
@include('components.nav')
<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 60px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        margin: auto;
        display: block;
        width: 80%;
        max-width: 700px;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        transition: 0.3s;
    }

    .close:hover,
    .close:focus {
        color: #bbb;
        text-decoration: none;
        cursor: pointer;
    }
</style>
@section('content')
    <div class="container mx-auto text-center px-8 py-14">
        <h2
            class="block antialiased tracking-normal font-sans text-4xl font-semibold leading-[1.3] text-blue-gray-900 mb-10">
            広告管理</h2>
        {{-- <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">新規追加</p> --}}
        {{-- <form action="{{ route('admin.property.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image">
            <input type="number" name="type" placeholder="type">
            <input type="number" name="order" placeholder="order">
            <button
                class="w-full px-6 py-2.5 text-sm font-medium tracking-wider text-white transition-colors duration-300 transform md:w-auto md:mx-4 focus:outline-none bg-gray-800 rounded-lg hover:bg-gray-700 focus:ring focus:ring-gray-300 focus:ring-opacity-80"
                type="submit">新規追加</button>
        </form> --}}
    </div>
    <container>
        <section>
            @foreach ($properties as $property)
            <div class="product">
            <a class="image-link" href="{{ asset('storage/' . $property->image_path) }}">
                <img class="property-image" src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image">
            </a>
            <h4 class="mb-2">表示順(降順): {{ $property->order }}</h4>
            <h4 class="mb-2">表示: {{ $property->is_display ? '表示中': '非表示' }}</h4>
            <div class="flex">
            <button  class="edit-btn" onclick="toggleModal({{ $property->id }})">
                <i class="fa fa-pencil mr-2" aria-hidden="true"></i>編集
            </button>
            <form action="{{ route('admin.property.destroy', ['property' => $property->id]) }}" method="POST" id="deleteForm-{{ $property->id }}">
                @csrf
                @method('DELETE')
            <button class="delete-btn" onclick="confirmDelete({{ $property->id }})">
                <i class="fa fa-trash" aria-hidden="true"></i>
            </button>
        </form>
          </div>
          </div>
            @include('admin.property.components.editModal',['property' => $property])
            @endforeach
            <!-- 画像をクリックしたときに表示されるモーダル -->
            <div class="modal">
                <span class="close">&times;</span>
                <img class="modal-content">
            </div>
        </section>
    </container>
    <script>
        // 画像リンクをクリックしたときにモーダルを表示
        const imageLinks = document.querySelectorAll('.image-link');
        const modal = document.querySelector('.modal');
        const modalContent = modal.querySelector('.modal-content');
        const closeModal = modal.querySelector('.close');

        imageLinks.forEach(function(link) {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                modalContent.src = this.href;
                modal.style.display = 'block';
            });
        });

        // モーダルの閉じるボタンがクリックされたとき、モーダルを非表示にする
        closeModal.addEventListener('click', function() {
            modal.style.display = 'none';
        });
        // モーダルの背景がクリックされたとき、モーダルを非表示にする
        window.addEventListener('click', function(event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    //編集用のモーダル
    function toggleModal(modalID){
    document.getElementById(modalID).classList.toggle("hidden");
    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
    document.getElementById(modalID).classList.toggle("flex");
    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
  }
  function confirmDelete(propertyId) {
        if (confirm('本当に削除しますか？')) {
            document.getElementById('deleteForm-' + propertyId).submit();
        }
    }
    </script>
@endsection
