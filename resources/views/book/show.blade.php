<x-layout>
    <x-slot:title>{{ $book->title }}</x-slot:title>

    <x-slot:description> Summary: {{ $book->summary }} </x-slot:description>

    <x-slot:actions>
        <a href="{{ route('books.edit', $book->id) }}" class="bg-slate-800 text-white px-2 py-1 text-sm">Edit</a>
    </x-slot:actions>

    <div>
        <p>Auhor(s): <span class="text-red-600">[I want to learn how i can make this show authors]</span></p>
        <p>Release Date: {{ $book->release_date }} </p>
        <p><a href="{{ $book->cover_path }}">Link to Cover Path</a></p>
        <p>Language: {{ $book->language }}</p>
        <p>Price: {{ number_format($book->price, 2) }}€</p>
        <p>Stock Saldo: {{ $book->stock_saldo }}</p>
        <p>Pages: {{ $book->pages }}</p>
        <p>Type: {{ $book->type }}</p>
        <br>
    </div>

</x-layout>
