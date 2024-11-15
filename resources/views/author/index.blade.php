<x-layout>
    <x-slot:title>Authors</x-slot:title>

    {{-- <x-slot:description></x-slot:description> --}}

    <x-slot:actions><a href="{{ route('authors.create') }}"
            class="bg-slate-800 text-white px-2 py-1 text-sm">Create</a></x-slot:actions>

    <table class="min-w-full divide-y-2 divide-gray-200 bg-white text-sm">
        <thead class="text-left">
            <tr>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">First name</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Last name</th>
                <th class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">Created at</th>
                <th></th>
            </tr>
        </thead>

        <tbody class="divide-y divide-gray-200">
            @foreach ($authors as $author)
                <tr>
                    <td class="whitespace-nowrap px-4 py-2 font-medium text-gray-900">{{ $author->first_name }}
                    </td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700">{{ $author->last_name }}</td>
                    <td class="whitespace-nowrap px-4 py-2 text-gray-700"> {{ $author->created_at }} </td>
                    <td>
                        <div class="grid grid-cols-2">
                            <a href="{{route('authors.edit', $author)}}" class="font-medium">Edit</a>
                            <form action="{{route('authors.destroy', $author)}}" method="POST">
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
    {{ $authors->links() }}

</x-layout>
