<x-layout>
    <x-slot:title>Book Editing</x-slot:title>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @method('PUT')
        @csrf
        <div class="max-w-sm p-2 flex flex-col gap-2">
            <div>
                <label for="title" class="block text-xs font-medium text-gray-700"> Book Title </label>
                <input type="text" id="title" name="title" placeholder="Sipsik" value="{{ $book->title }}"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('title')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="release_date" class="block text-xs font-medium text-gray-700"> Release Date </label>
                <input type="text" id="release_date" value="{{ $book->release_date}}" name="release_date"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('release_date')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="cover_path" class="block text-xs font-medium text-gray-700"> Cover Path </label>
                <input type="text" id="cover_path" value="{{ $book->cover_path}}" name="cover_path"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('cover_path')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            
            <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">
                Update book records </button>
        </div>
    </form>

</x-layout>