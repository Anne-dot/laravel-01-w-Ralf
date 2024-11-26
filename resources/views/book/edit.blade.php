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
            @foreach ($book->authors as $author)
                <div>
                    <label for="author_{{ $author->id }}" class="block text-xs font-medium text-gray-700"> Author
                    </label>
                    <input type="text" id="author_{{ $author->id }}"
                        value="{{ $author->first_name }} {{ $author->last_name }}" name="authors[]"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                    @error('authors')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
            @endforeach

            @foreach ($book->authors as $author)
                <div>
                    <label for="author_{{ $author->id }}"class="block text-xs font-medium text-gray-700"> Author
                    </label>
                    <select name="author_{{ $author->id }}" id="author_{{ $author->id }}"
                        class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
                        <option value="author_{{ $author->id }}" selected> {{ $author->first_name }}
                            {{ $author->last_name }}</option>
                        @foreach($allAuthors as $newAuthor)
                        <option value="author_{{ $newAuthor->id }}">{{ $newAuthor->first_name }}
                            {{ $newAuthor->last_name }}</option>
                        @endforeach
                    </select>
                </div>
            @endforeach

            <div>
                <label for="release_date" class="block text-xs font-medium text-gray-700"> Release Date </label>
                <input type="text" id="release_date" value="{{ $book->release_date }}" name="release_date"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('release_date')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="cover_path" class="block text-xs font-medium text-gray-700"> Cover Path </label>
                <input type="text" id="cover_path" value="{{ $book->cover_path }}" name="cover_path"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('cover_path')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="language" class="block text-xs font-medium text-gray-700"> Language </label>
                <input type="text" id="language" value="{{ $book->language }}" name="language"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('language')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="price" class="block text-xs font-medium text-gray-700"> Price in € </label>
                <input type="text" id="price" value="{{ $book->price }}" name="price"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('price')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="pages" class="block text-xs font-medium text-gray-700"> Pages </label>
                <input type="text" id="pages" value="{{ $book->pages }}" name="pages"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('pages')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="type" class="block text-xs font-medium text-gray-700">Type</label>
                <select id="type" name="type"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
                    <option value="" disabled>Select type</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->type }}">{{ $type->type }}</option>
                        <!-- Use $type->type to get the value -->
                    @endforeach
                </select>
                @error('type')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="summary" class="block text-xs font-medium text-gray-700"> Summary </label>
                <textarea id="summary" name="summary" rows="4"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">{{ $book->summary }}</textarea>
                @error('summary')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">
                Update book records </button>
        </div>
    </form>

</x-layout>
