<div>
    <section class="bg-white dark:bg-gray-900">
        <div class="py-4 px-4  max-w-4xl lg:py-4">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Forms Anggota</h2>
            <form wire:submit.prevent="updateMember">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" id="nama" wire:model="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your nama" required="">
                        @error('nama') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-full">
                        <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group</label>
                        <select id="group" wire:model="group_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Select Group</option>
                            @foreach($groups as $group)
                                <option value="{{ $group->id }}">{{ $group->nama }}</option>
                            @endforeach
                        </select>
                        @error('group_id') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-full">
                        <label for="sembako" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sembako</label>
                        <input type="text" id="sembako" wire:model="sembako" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jenis sembako" required="">
                        @error('sembako') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-full">
                        <label for="tanggal_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" id="tanggal_masuk" wire:model="tgl_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                        @error('tgl_masuk') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="w-full">
                        <label for="tabungan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tabungan</label>
                        <input type="number" id="tabungan" wire:model="tabungan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah tabungan" required="">
                        @error('tabungan') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    
                </div>
                <div class="sm:col-span-2 mt-4">
                    <button type="submit" class="w-full text-white btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</div>