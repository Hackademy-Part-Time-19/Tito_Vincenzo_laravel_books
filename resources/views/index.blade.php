<x-layout>
   <x-delete/>
    <x-back/>

    <div style="display: flex; flex-direction:column; background-color:white; width:900px;height:400px;position: absolute;top:120px; left:200px" ">
        <h2 style="font-size: 40px;color:#5C0B0B;text-shadow:2px 2px 2px black; margin" class="text-center">Lista Libri</h2>
        <table class="table text-center">
            <thead >
                <tr>
                    <th scope="col">Autore</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Genere</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th>{{ $book->user->name }}</th>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->price }}</td>
                        <td>{{ $book->genre }}</td>
                        <td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
