<x-layout />
<x-success />
<x-delete />
<h1 style="font-size: 40px;color:#5C0B0B;text-shadow:2px 2px 2px black;" class="m-3">Ciao {{ auth()->user()->name }}
</h1>
<h2 style="font-size: 30px;color:#5C0B0B;text-shadow:2px 2px 2px black;" class="m-3">Elenco dei tuoi libri</h2>
@foreach ($books as $book)
    <div class="card m-5" style="width:20rem;">
        <div class="card-body">
            <h5 style="font-size: 25px;color:#5C0B0B;" class="card-title">{{ $book->title }}</h5>
            <p style="font-size: 20px;color:#5C0B0B;" class="card-text">{{ $book->genre }}</p>
            <p  style="font-size: 20px;color:#5C0B0B;"class="card-text">{{ $book->price }}</p>
            <div style="display: flex; align-items:center; justify-content:space-evenly;">
                <a href="{{ route('books.edit', ['book' => $book]) }}" style="font-weight:800; background-color:#484746"
                    class="btn btn-primary">Modifica</a>
                <form action="{{ route('books.destroy', ['book' => $book]) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <button style="font-weight:800; background-color:#B13E0C" class="btn btn-danger">Elimina</button>
                </form>
            </div>

        </div>
    </div>
@endforeach
