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
            {{ __('Barang') }}
         </h2>
      </x-slot>
      <div class="p-4">
         <!-- Open the modal using ID.showModal() method -->
         <dialog id="tambah_barang" class="modal">
            <div class="modal-box max-w-4xl">
               <section class="bg-white dark:bg-gray-900">
                  <div class="py-4 px-4  max-w-4xl lg:py-4">
                     <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">Forms Barang</h2>
                     <form action="#">
                        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                           <div class="sm:col-span-2">
                              <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                              <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Type your name" required="">
                           </div>
                           <div class="w-full">
                              <label for="satuan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Satuan</label>
                              <select id="satuan" name="satuan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                 <option value="" disabled selected>Select Satuan</option>
                                 <option value="1">Kilogram</option>
                                 <option value="2">Liter</option>
                                 <option value="3">Buah</option>
                                 <option value="4">Ikat</option>
                              </select>
                           </div>
                           <div class="w-full">
                              <label for="cost" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Cost</label>
                              <input type="number" name="cost" id="cost" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Cost" required="">
                           </div>
                           <div class="w-full">
                              <label for="retail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Retail</label>
                              <input type="number" name="retail" id="retail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Retail" required="">
                           </div>
                           <div class="w-full">
                              <label for="setoran" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Setoran</label>
                              <input type="number" name="setoran" id="setoran" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Setoran" required="">
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
            <button class="btn btn-md w-40 btn-primary" onclick="tambah_barang.showModal()">+ Buat Barang</button>
            <button class="btn btn-md w-40 btn-neutral">Print</button>
            <button class="btn btn-md w-40 btn-outline btn-success">Export</button>
            <button class="btn btn-md w-40 btn-outline btn-success">Import</button>
         </div>
         <details class="collapse bg-base-200 mb-5 lg:hidden">
            <summary class="collapse-title text-xl font-medium">Action</summary>
            <div class="collapse-content ">
               <div class="flex flex-wrap justify-center gap-5">
                  <button class="btn btn-md w-32  btn-primary mb-5" onclick="tambah_barang.showModal()">+ Buat Barang</button>
                  <button class="btn btn-md w-32 btn-neutral mb-5">Print</button>
                  <button class="btn btn-md w-32 btn-outline btn-success mb-5">Export</button>
                  <button class="btn btn-md w-32 btn-outline btn-success mb-5">Import</button>
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
                           <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="00 24 24">
                              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25" />
                           </svg>
                           <p class="font-semibold">filter</p>
                        </div>
                        <ul tabindex="0" class="dropdown-content z-[1] menu p-5 gap-2 shadow bg-base-100 rounded-box w-80">
                           <li>
                              <select id="satuanFilter" class="select select-bordered">
                                 <option value="">Satuan</option>
                                 <!-- Opsi satuan akan diisi secara dinamis -->
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
                           <div class="flex items-center"> ID <svg id="idSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th class="px-4 py-2 cursor-pointer" onclick="sortTable(1)">
                           <div class="flex items-center"> Nama <svg id="namaSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th class="px-4 py-2 cursor-pointer" onclick="sortTable(2)">
                           <div class="flex items-center"> Satuan <svg id="satuanSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th class="px-4 py-2 cursor-pointer" onclick="sortTable(3)">
                           <div class="flex items-center"> Cost <svg id="costSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th class="px-4 py-2 cursor-pointer" onclick="sortTable(4)">
                           <div class="flex items-center"> Retail <svg id="retailSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th class="px-4 py-2 cursor-pointer" onclick="sortTable(5)">
                           <div class="flex items-center"> Setoran <svg id="setoranSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                 <path d="M18 15l-6-6-6 6"></path>
                              </svg>
                           </div>
                        </th>
                        <th>
                           <div> Action </div>
                        </th>
                     </tr>
                  </thead>
                  <tbody id="tableBody">
                     <tr>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">Beras</td>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">10000</td>
                        <td class="border px-4 py-2">12000</td>
                        <td class="border px-4 py-2">2000</td>
                     </tr>
                     <tr>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">Minyak Goreng</td>
                        <td class="border px-4 py-2">2</td>
                        <td class="border px-4 py-2">15000</td>
                        <td class="border px-4 py-2">18000</td>
                        <td class="border px-4 py-2">3000</td>
                     </tr>
                     <tr>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">Telur</td>
                        <td class="border px-4 py-2">3</td>
                        <td class="border px-4 py-2">20000</td>
                        <td class="border px-4 py-2">25000</td>
                        <td class="border px-4 py-2">5000</td>
                     </tr>
                     <tr>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">Gula Pasir</td>
                        <td class="border px-4 py-2">1</td>
                        <td class="border px-4 py-2">12000</td>
                        <td class="border px-4 py-2">14000</td>
                        <td class="border px-4 py-2">2000</td>
                     </tr>
                     <tr>
                        <td class="border px-4 py-2">5</td>
                        <td class="border px-4 py-2">Sayur Bayam</td>
                        <td class="border px-4 py-2">4</td>
                        <td class="border px-4 py-2">5000</td>
                        <td class="border px-4 py-2">8000</td>
                        <td class="border px-4 py-2">3000</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
         <script>
            const searchInput = document.getElementById('searchInput');
            const tableBody = document.getElementById('tableBody');
            const rows = tableBody.getElementsByTagName('tr');
            const satuanFilter = document.getElementById('satuanFilter');
            let currentSortColumn = null;
            let currentSortOrder = 1;
            // Fungsi untuk mengisi opsi filter satuan
            function populateSatuanOptions() {
               const satuanOptions = Array.from(new Set(Array.from(rows).map(row => row.getElementsByTagName('td')[2].textContent)));
               satuanOptions.sort();
               satuanOptions.unshift(''); // Tambahkan opsi kosong di awal
               satuanFilter.innerHTML = satuanOptions.map(option => `
											<option value="${option}">${getSatuanName(option)}</option>`).join('');
            }
            // Fungsi untuk mendapatkan nama satuan dari ID
            function getSatuanName(satuanId) {
               switch (satuanId) {
                  case '1':
                     return 'Kilogram';
                  case '2':
                     return 'Liter';
                  case '3':
                     return 'Buah';
                  case '4':
                     return 'Ikat';
                  default:
                     return '';
               }
            }
            // Panggil fungsi untuk mengisi opsi filter saat halaman dimuat
            populateSatuanOptions();
            // Event listener untuk filter
            satuanFilter.addEventListener('change', filterRows);
            searchInput.addEventListener('input', filterRows);

            function filterRows() {
               const searchTerm = searchInput.value.toLowerCase();
               const satuanValue = satuanFilter.value;
               for (let i = 0; i < rows.length; i++) {
                  const row = rows[i];
                  const cells = row.getElementsByTagName('td');
                  let shouldHide = false;
                  // Filter berdasarkan satuan
                  if (satuanValue && cells[2].textContent !== satuanValue) {
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
            const columnNames = ['id', 'nama', 'satuan', 'cost', 'retail', 'setoran'];
         </script>
      </div>