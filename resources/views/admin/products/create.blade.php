<h1>Aggiungi Nuovo Prodotto</h1>

<form action="{{ route('admin.products.store') }}" method="POST">
    @csrf
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" required>

    <label for="description">Descrizione:</label>
    <textarea name="description" id="description" required></textarea>

    <label for="price">Prezzo:</label>
    <input type="number" name="price" id="price" required>

    <button type="submit">Aggiungi Prodotto</button>
</form>
