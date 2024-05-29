<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Keanggotaan') }}
        </h2>
    </x-slot>
    
    <div class="p-4">
        <!-- Open the modal using ID.showModal() method -->
        <dialog id="tambah_anggota" class="modal">
        <div class="modal-box max-w-4xl">
            <section class="bg-white dark:bg-gray-900">
                <div class="py-4 px-4  max-w-4xl lg:py-4">
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
        </div>
        <form method="dialog" class="modal-backdrop">
            <button>close</button>
        </form>
        </dialog>
        
        <div class="lg:flex lg:flex-wrap gap-5 mb-5 hidden">
            <button class="btn btn-md w-40 btn-primary" onclick="tambah_anggota.showModal()">+ Buat Anggota</button>
            <button class="btn btn-md w-40 btn-neutral" >Print</button>
            <button class="btn btn-md w-40 btn-outline btn-success" >Export</button>
            <button class="btn btn-md w-40 btn-outline btn-success" >Import</button>
        </div>

        <details class="collapse bg-base-200 mb-5 lg:hidden">
            <summary class="collapse-title text-xl font-medium">Action</summary>
            <div class="collapse-content "> 
                <div class="flex flex-wrap justify-center gap-5">
                    <button class="btn btn-md w-32  btn-primary mb-5" onclick="tambah_anggota.showModal()">+ Buat Anggota</button>
                    <button class="btn btn-md w-32 btn-neutral mb-5" >Print</button>
                    <button class="btn btn-md w-32 btn-outline btn-success mb-5" >Export</button>
                    <button class="btn btn-md w-32 btn-outline btn-success mb-5" >Import</button>
                </div>
            </div>
        </details>

        <div class="flex w-full mb-10">
            <div class="w-full">
                <div class="">
                    <div class="join w-full">
                        <div class="w-full">
                            <input type="text" id="searchInput" placeholder="Search..." class="input input-bordered join-item w-full  focus:border-black " style="outline: none; outline-offset: 2px;" placeholder="Search" />
                        </div>
                      <div class="dropdown dropdown-bottom dropdown-end">
                        <div tabindex="0" role="button" class="btn join-item">
                          <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25" />
                          </svg>
                          <p class="font-semibold">filter</p>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-5 gap-2 shadow bg-base-100 rounded-box w-80">
                          <li>
                            <div class="flex items-center p-0">
                              <label for="tglMasukFilterBulan" class="mr-2">Bulan Masuk:</label>
                              <input type="month" id="tglMasukFilterBulan" class="input input-bordered w-full" />
                            </div>
                          </li>
                          <li>
                            <div class="flex items-center p-0">
                              <label for="tglKeluarFilterBulan" class="mr-2">Bulan Keluar:</label>
                              <input type="month" id="tglKeluarFilterBulan" class="input input-bordered w-full" />
                            </div>
                          </li>
                          <li>
                            <select id="groupIdFilter" class="select select-bordered">
                              <option value="">Group ID</option>
                              <!-- Opsi group ID akan diisi secara dinamis -->
                            </select>
                          </li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
          <div class="container">
            <div class="overflow-x-auto lg:w-full">
              <table class="table-auto w-full">
                <thead>
                    <tr class="w-full">
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(0)">
                        <div class="flex items-center">
                            ID
                            <svg id="idSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(1)">
                        <div class="flex items-center">
                            Nama
                            <svg id="namaSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(2)">
                        <div class="flex items-center">
                            Group ID
                            <svg id="groupIdSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(3)">
                        <div class="flex items-center">
                            Tanggal Masuk
                            <svg id="tglMasukSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(4)">
                       <div class="flex items-center">
                            Tanggal Keluar
                            <svg id="tglKeluarSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                       </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(5)">
                        <div class="flex items-center">
                            Sembako
                            <svg id="sembakoSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(6)">
                        <div class="flex items-center">
                            Tabungan
                            <svg id="tabunganSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th class="px-4 py-2 cursor-pointer" onclick="sortTable(7)">
                        <div class="flex items-center">
                            Total
                            <svg id="totalSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 15l-6-6-6 6"></path>
                            </svg>
                        </div>
                      </th>
                      <th>
                        <div>
                            Action
                        </div>
                      </th>
                    </tr>
                  </thead>
                <tbody id="tableBody">
                  <tr>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">John Doe</td>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">2022-05-01</td>
                    <td class="border px-4 py-2">2023-04-30</td>
                    <td class="border px-4 py-2">500000</td>
                    <td class="border px-4 py-2">1000000</td>
                    <td class="border px-4 py-2">1500000</td>
                  </tr>
                  <tr>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">Jane Smith</td>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">2021-08-15</td>
                    <td class="border px-4 py-2">2024-07-31</td>
                    <td class="border px-4 py-2">600000</td>
                    <td class="border px-4 py-2">800000</td>
                    <td class="border px-4 py-2">1400000</td>
                  </tr>
                  <tr>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">Michael Johnson</td>
                    <td class="border px-4 py-2">1</td>
                    <td class="border px-4 py-2">2020-03-10</td>
                    <td class="border px-4 py-2">2025-02-28</td>
                    <td class="border px-4 py-2">700000</td>
                    <td class="border px-4 py-2">900000</td>
                    <td class="border px-4 py-2">1600000</td>
                  </tr>
                  <tr>
                    <td class="border px-4 py-2">4</td>
                    <td class="border px-4 py-2">Emily Wilson</td>
                    <td class="border px-4 py-2">3</td>
                    <td class="border px-4 py-2">2023-01-01</td>
                    <td class="border px-4 py-2">2026-12-31</td>
                    <td class="border px-4 py-2">550000</td>
                    <td class="border px-4 py-2">1200000</td>
                    <td class="border px-4 py-2">1750000</td>
                  </tr>
                  <tr>
                    <td class="border px-4 py-2">5</td>
                    <td class="border px-4 py-2">David Lee</td>
                    <td class="border px-4 py-2">2</td>
                    <td class="border px-4 py-2">2022-11-15</td>
                    <td class="border px-4 py-2">2025-10-31</td>
                    <td class="border px-4 py-2">650000</td>
                    <td class="border px-4 py-2">1100000</td>
                    <td class="border px-4 py-2">1750000</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        
        <script>
        const searchInput = document.getElementById('searchInput');
        const tableBody = document.getElementById('tableBody');
        const rows = tableBody.getElementsByTagName('tr');

        const tglMasukFilterBulan = document.getElementById('tglMasukFilterBulan');
        const tglKeluarFilterBulan = document.getElementById('tglKeluarFilterBulan');
        const groupIdFilter = document.getElementById('groupIdFilter');

        let currentSortColumn = null;
        let currentSortOrder = 1;

        // Fungsi untuk mengisi opsi filter group ID
        function populateGroupIdOptions() {
        const groupIdOptions = Array.from(new Set(Array.from(rows).map(row => row.getElementsByTagName('td')[2].textContent)));
        groupIdOptions.sort();
        groupIdOptions.unshift(''); // Tambahkan opsi kosong di awal

        groupIdFilter.innerHTML = groupIdOptions.map(option => `<option value="${option}">${option}</option>`).join('');
        }

        // Panggil fungsi untuk mengisi opsi filter saat halaman dimuat
        populateGroupIdOptions();

        // Event listener untuk filter
        tglMasukFilterBulan.addEventListener('change', filterRows);
        tglKeluarFilterBulan.addEventListener('change', filterRows);
        groupIdFilter.addEventListener('change', filterRows);

        searchInput.addEventListener('input', filterRows);

        function filterRows() {
            const searchTerm = searchInput.value.toLowerCase();
            const tglMasukValue = tglMasukFilterBulan.value;
            const tglKeluarValue = tglKeluarFilterBulan.value;
            const groupIdValue = groupIdFilter.value;

            for (let i = 0; i < rows.length; i++) {
                const row = rows[i];
                const cells = row.getElementsByTagName('td');
                let shouldHide = false;

                // Filter berdasarkan bulan masuk
                if (tglMasukValue) {
                const tglMasukRowValue = new Date(cells[3].textContent).toISOString().slice(0, 7);
                if (tglMasukRowValue !== tglMasukValue) {
                    shouldHide = true;
                }
                }

                // Filter berdasarkan bulan keluar
                if (tglKeluarValue) {
                const tglKeluarRowValue = new Date(cells[4].textContent).toISOString().slice(0, 7);
                if (tglKeluarRowValue !== tglKeluarValue) {
                    shouldHide = true;
                }
                }

                // Filter berdasarkan group ID
                if (groupIdValue && cells[2].textContent !== groupIdValue) {
                shouldHide = true;
                }

                // Filter berdasarkan pencarian
                if (!shouldHide) {
                let matchFound = false;
                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    if (cell.textContent.toLowerCase().indexOf(searchTerm) !== -1) {
                    matchFound = true;
                    break;
                    }
                }
                shouldHide = !matchFound;
                }

                row.style.display = shouldHide ? 'none' : '';
            }
            }
            
                function sortTable(columnIndex) {
                const rows = tableBody.getElementsByTagName('tr');
                const sortedRows = Array.from(rows).sort((rowA, rowB) => {
                    const cellA = rowA.getElementsByTagName('td')[columnIndex];
                    const cellB = rowB.getElementsByTagName('td')[columnIndex];
                    const valueA = isNaN(cellA.textContent) ? cellA.textContent.toLowerCase() : parseFloat(cellA.textContent);
                    const valueB = isNaN(cellB.textContent) ? cellB.textContent.toLowerCase() : parseFloat(cellB.textContent);
                    if (valueA < valueB) return -currentSortOrder;
                    if (valueA > valueB) return currentSortOrder;
                    return 0;
                });
            
                while (tableBody.firstChild) {
                    tableBody.removeChild(tableBody.firstChild);
                }
            
                sortedRows.forEach(row => {
                    tableBody.appendChild(row);
                });
            
                const sortIcons = document.querySelectorAll('th svg');
                sortIcons.forEach(icon => {
                    icon.style.transform = 'rotate(0deg)';
                });
            
                const currentSortIcon = document.getElementById(`${columnNames[columnIndex]}Sort`);
                currentSortIcon.style.transform = `rotate(${currentSortOrder * 180}deg)`;
            
                if (currentSortColumn === columnIndex) {
                    currentSortOrder = -currentSortOrder;
                } else {
                    currentSortColumn = columnIndex;
                    currentSortOrder = 1;
                }
                }
            
                const columnNames = ['id', 'nama', 'groupId', 'tglMasuk', 'tglKeluar', 'sembako', 'tabungan', 'total'];
          </script>

    

    
</body>
</html>