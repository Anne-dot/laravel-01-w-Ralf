<x-layout>
    <x-slot:title>Client Details</x-slot:title>

    <div class="max-w-sm p-2 flex flex-col gap-2">
        <div>
            <label for="first_name" class="block text-xs font-medium text-gray-700"> First Name </label>
            <input type="text" id="first_name" name="first_name" value="{{ $client->first_name }}"
                class="mt-1 w-full rounded-md border-gray-200 shadow-sm sm:text-sm" readonly/>
            @error('first_name')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>
    </div>

</x-layout>