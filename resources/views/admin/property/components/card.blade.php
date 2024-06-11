<div class="product">
  <a class="image-link" href="{{ asset('storage/' . $property->image_path) }}">
      <img class="property-image" src="{{ asset('storage/' . $property->image_path) }}" alt="Property Image">
  </a>
  <h2>表示順(降順): {{ $property->order }}</h2>
  {{-- <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> --}}
  <button  class="edit-btn" onclick="toggleModal({{ $property->id }})">編集</button>
</div>