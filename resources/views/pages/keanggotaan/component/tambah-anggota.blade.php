<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="bg-white dark:bg-gray-900">
        <div class="py-4 px-4  max-w-2xl lg:py-4">
            <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Forms Anggota</h2>
            <form action="#">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                        <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your name" required="">
                    </div>

                    <div class="w-full">
                        <label for="group" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Group</label>
                        <select id="group" name="group" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option value="" disabled selected>Select Group</option>
                            <option value="Group A">Group A</option>
                            <option value="Group B">Group B</option>
                            <option value="Group C">Group C</option>
                            <option value="Group D">Group D</option>
                        </select>
                    </div>

                    <div class="w-full">
                        <label for="sembako" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sembako</label>
                        <input type="text" name="sembako" id="sembako" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jenis sembako" required="">
                    </div>

                    <div class="w-full">
                        <label for="tanggal_masuk" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Masuk</label>
                        <input type="date" name="tanggal_masuk" id="tanggal_masuk" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>

                    <div class="w-full">
                        <label for="tanggal_keluar" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal Keluar</label>
                        <input type="date" name="tanggal_keluar" id="tanggal_keluar" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>

                    <div class="w-full">
                        <label for="tabungan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tabungan</label>
                        <input type="number" name="tabungan" id="tabungan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Jumlah tabungan" required="">
                    </div>
                </div>
                <div class="sm:col-span-2 mt-4">
                    <button type="submit" class="w-full text-white btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>