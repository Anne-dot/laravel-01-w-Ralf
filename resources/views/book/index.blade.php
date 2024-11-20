<x-layout>
    <x-slot:title>Books</x-slot:title>

    <x-slot:description>
        You can find a paginated list of all books available in our bookstore. 
        Bla bla bla. Enjoy! I wonder how much text I can put here until it looks really ugly.
        I am out of ideas and I am getting tired. It is late, 3:15 PM right now. 
    </x-slot:description>

    <x-slot:actions>
        <a href="{{route('books.create')}}" class="bg-slate-800 text-white px-2 py-1 text-sm">Add</a>
    </x-slot:actions>

    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Title</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Year</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Language</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Price</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Stock</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900"></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach ($books as $book)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $book->title }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $book->release_date }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $book->language}}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $book->price }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">
                        {{ $book->stock_saldo }}
                    </td>
                    <td>
                        <div class="grid grid-cols-2">
                            <a href="{{route('books.edit', $book)}}" class="font-medium">Edit</a>
                            <form action="{{route('books.destroy', $book)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button class="text-red-500 hover:underline">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}

</x-layout>