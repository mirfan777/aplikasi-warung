<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keanggotaan') }}
        </h2>
    </x-slot>

<div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-4 px-4 max-w-lg lg:py-4">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Create Group</h2>
            <div id="create-group">
                <div class="grid gap-4">
                    <div>
                        <div class="flex justify-between">
                          <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group Name</label>
                          @error('nama')
                            <span class="flex justify-end text-red-500">{{$message}}</span>
                          @enderror
                        </div>
                        <input type="text" wire:model="nama" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter group name" >
                        
                    </div>
                </div>
                <div class="mt-4 flex justify-end gap-4">
                    <button class="w-52 text-white btn btn-primary btn-outline" wire:click="storeGroup()">Create Group</button>
                
                </div>
            </div>
        </div>
    </section>
</div>