<x-Layout>
    <x-back />
    <x-slot:title>Modifica | Libro</x-slot>
    <div
        style="background-color:rgba(255, 255, 255, 0.693); width:900px;height:400px;position: absolute;top:120px; left:200px">
        <h2 style="font-size: 50px;color:#5C0B0B;text-shadow:2px 2px 2px black;" class="text-center">Modifica Libro
            {{ $book->title }}</h2>

       <x-success/>

       <x-delete/>
       
        <div class="col-lg-8 mx-auto">
            <form style=" padding:10px; margin-top:4px;" action="{{ route('books.update', compact('book')) }}"
                method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text"name='title' class="form-control" id="title"
                        value="{{ old('title', $book->title) }}">
                    @error('title')
                        <div><span class="text-danger">{{ $message }}</span></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="text" name="price" class="form-control" id="price"
                        value="{{ old('year', $book->price) }}">
                    @error('price')
                        <div><span class="text-danger">{{ $message }}</span></div>
                    @enderror

                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genere</label>
                    <input type="text" name="genre" class="form-control" id="genre"
                        value="{{ old('genre', $book->genre) }}">
                    @error('genre')
                        <div><span class="text-danger">{{ $message }}</span></div>
                    @enderror
                </div>
                <button style="background: #B13E0C" type="submit" class="btn btn-secondary">Modifica</button>
            </form>
        </div>
    </div>
</x-Layout>
