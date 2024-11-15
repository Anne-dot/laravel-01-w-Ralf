<x-layout>
    <x-slot:title>Edit Author</x-slot:title>

    <x-slot:description>Ma ei saa nii varasel kellaajal ikka veel aru, kuidas kaasas pysida!</x-slot:description>

    {{-- <x-slot:actions><a href="{{ route('authors.create') }}"
            class="bg-slate-800 text-white px-2 py-1 text-sm">Create new author</a></x-slot:actions>
     --}}
    <form action="{{ route('authors.update', $author) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="max-w-sm p-2 flex flex-col gap-2">
            <div>
                <label for="first_name" class="block text-xs font-medium text-gray-700"> First Name </label>
                <input type="text" id="first_name" name="first_name" value="{{ $author->first_name }}"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('first_name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="last_name" class="block text-xs font-medium text-gray-700"> Last Name </label>
                <input type="text" id="last_name" value="{{ $author->last_name}}" name="last_name"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('last_name')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">
                Update author records </button>
        </div>
    </form>

</x-layout>