<x-Layout>

    <x-slot:title>Inserisci | Libro</x-slot>
    <x-success/>
    <x-delete/>
    <x-back />
    
    <div
        style="background-color:rgba(255, 255, 255, 0.693); width:900px;height:400px;position: absolute;top:120px; left:200px">
        <h2 style="font-size: 50px;color:#811f1f;text-shadow:2px 2px 2px black;" class="text-center">Nuovo Libro</h2>
    
        <div class="col-lg-8 mx-auto">
            <form style=" padding:10px; margin-top:4px;" action="{{ route('books.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Titolo</label>
                    <input type="text"name='title' class="form-control" id="title" value="{{ old('title') }}">
                    @error('title')
                        <div><span class="text-danger">{{ $message }}</span></div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Prezzo</label>
                    <input type="number" name="price" class="form-control" id="price"
                        value="{{ old('price') }}">
                    @error('price')
                        <div><span class="text-danger">{{ $message }}</span></div>
                    @enderror

                </div>
                <div style="background: #B13E0C" class="btn-group" role="group" aria-label="Basic checkbox toggle button group">
                    @foreach ($genres as $genre)
                        <input style="color:white" name="genres[]" type="checkbox" class="btn-check" id="btncheck{{ $genre->id }}"
                            value="{{ $genre->id }}">
                        <label style="color:white;" class="btn btn-outline-primary"
                            for="btncheck{{ $genre->id }}">{{ $genre->name }}</label>
                    @endforeach
                </div>
                <div class="mt-4">
                    <button style="background: #B13E0C" type="submit" class="btn btn-secondary">Crea</button>
                </div>
            </form>
        </div>
    </div>

</x-Layout>
