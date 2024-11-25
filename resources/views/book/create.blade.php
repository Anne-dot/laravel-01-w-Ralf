<x-layout>
    <x-slot:title>Add a Book</x-slot:title>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="max-w-sm p-2 flex flex-col gap-2">
            <div>
                <label for="title" class="block text-xs font-medium text-gray-700"> Title </label>
                <input type="text" id="title" placeholder="Kõrboja peremees" name="title"
                    value="{{ old('title') }}" class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('title')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="author" class="block text-xs font-medium text-gray-700 text-red-500">Author</label>
                <select id="author" name="author"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
                    <option value="" disabled>Select author</option>
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">
                            @if (old('author') == $author->id)
                                selected
                            @endif
                            {{ $author->last_name }}, {{ $author->first_name }}

                        </option>
                    @endforeach
                </select>
                @error('author')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="release_date" class="block text-xs font-medium text-gray-700"> Year </label>
                <input type="text" id="release_date" placeholder="1956" name="release_date"
                    value="{{ old('release_date') }}"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('release_date')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="cover_path" class="block text-xs font-medium text-gray-700"> Cover Path </label>
                <input type="text" id="cover_path" placeholder="www.korbojaperemees.ee" name="cover_path"
                    value=""{{ old('cover_path') }}
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('cover_path')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="language" class="block text-xs font-medium text-gray-700"> Language </label>
                <select id="language" placeholder="Estonian" name="language"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm">
                    <option value="" disabled>Select language</option>
                    @foreach ($languageSelection as $language)
                        <option value="{{ $language->language }}">
                            @if (old('language') == $language->language)
                                selected
                            @endif
                            {{ $language->language }}
                        </option>
                    @endforeach
                </select>
                @error('language')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="summary" class="block text-xs font-medium text-gray-700"> Summary </label>
                <input type="text" id="summary" placeholder="Elas kord Anna..." name="summary"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('summary')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="price" class="block text-xs font-medium text-gray-700"> Price </label>
                <input type="text" id="price" placeholder="19,99" name="price" value="{{ old('price') }}"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('price')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="stock_saldo" class="block text-xs font-medium text-gray-700"> Stock Saldo </label>
                <input type="text" id="stock_saldo" placeholder="16" name="stock_saldo"
                    value="{{ old('stock_saldo') }}"
                    class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                @error('stock_saldo')
                    <span class="text-xs text-red-500">{{ $message }}</span>
                @enderror
            </div>
            <div>
                <label for="pages" class="block text-xs font-medium text-gray-700"> Pages </label>
                <input type="text" id="pages" placeholder="165" name="pages" value="{{ old('pages') }}"
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

            <button class="bg-slate-800 px-3 py-2 text-sm text-white rounded-md hover:bg-slate-700" type="submit">
                Create a new book </button>
        </div>
    </form>
</x-layout>
