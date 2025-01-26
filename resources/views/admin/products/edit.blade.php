<h1>Modifica Prodotto</h1>

<form action="{{ route('admin.products.update', $product) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{ $product->name }}" required>

    <label for="description">Descrizione:</label>
    <textarea name="description" id="description" required>{{ $product->description }}</textarea>

    <label for="price">Prezzo:</label>
    <input type="number" name="price" id="price" value="{{ $product->price }}" required>

    <button type="submit">Aggiorna Prodotto</button>
</form>
