<x-layout>
    @if (session()->has('deleted'))
        <h4 class="alert alert-success">{{ session('deleted') }}</h4>
    @endif
    <div style="display: flex;flex-direction:row-reverse ">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Anno</th>
                    <th scope="col">Genere</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th>{{ $book->id }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->year }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>
                            <div style="display:flex ;" class="col-lg-3 mx-5">
                                <button style="font-weight: 600; height:38px; margin-right:20px;"
                                    class="btn btn-secondary">
                                    <a style="color: white" href="{{ route('books.edit',compact('book'))}}">Modifica</a>
                                </button>

                                <form action="{{route('books.destroy',compact('book'))}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button style="height: 38px; width:85px" class="btn btn-danger">
                                        Elimina
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
