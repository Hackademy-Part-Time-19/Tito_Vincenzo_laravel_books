<x-layout>
    @if (session()->has('deleted'))
        <h4 class="alert alert-success">{{ session('deleted') }}</h4>
    @endif
    <x-back/>

    <div style="display: flex; flex-direction:column; background-color:white; width:900px;height:400px;position: absolute;top:120px; left:200px" ">
        <h2 style="font-size: 40px;color:#5C0B0B;text-shadow:2px 2px 2px black; margin" class="text-center">Lista Libri</h2>
        <table class="table text-center">
            <thead >
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
                                <button style="font-weight: 600; height:38px; margin-right:20px; "
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
