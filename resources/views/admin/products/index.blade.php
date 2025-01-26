<h1>Lista Prodotti</h1>

<a href="{{ route('admin.products.create') }}">Aggiungi Nuovo Prodotto</a>

<table>
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrizione</th>
            <th>Prezzo</th>
            <th>Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{ route('admin.products.edit', $product) }}">Modifica</a>
                    <form action="{{ route('admin.products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Elimina</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
