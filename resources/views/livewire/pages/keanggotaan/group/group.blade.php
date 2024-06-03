<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Group</title>
  </head>
  <body>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Groups') }}
      </h2>
    </x-slot>
    

    <div class="p-4">

      {{-- delete-modal --}}
      <div class="modal" id="delete-modal">
        <div class="modal-box">
            <h3 class="font-bold text-lg">Delete Group?</h3>
            <p class="py-4">Are you sure you want to delete this group?</p>
            <form wire:submit.prevent="deleteGroup">
                @csrf
                <input type="hidden" name="group_id" id="group_id" value="">
                <button class="btn btn-error">Delete</button>
                <button class="btn btn-secondary" onclick="closeDeleteModal()">Cancel</button>
            </form>
        </div>
      </div>

      <div class="lg:flex lg:flex-wrap gap-5 mb-5 hidden">
        <a class="btn btn-md w-40 btn-primary" href="group/tambah">+ Buat Group</a>
        <button class="btn btn-md w-40 btn-neutral">Print</button>
        <button class="btn btn-md w-40 btn-outline btn-success">Export</button>
        <button class="btn btn-md w-40 btn-outline btn-success">Import</button>
      </div>
      <details class="collapse bg-base-200 mb-5 lg:hidden">
        <summary class="collapse-title text-xl font-medium">Action</summary>
        <div class="collapse-content ">
          <div class="flex flex-wrap justify-center gap-5">
            <button class="btn btn-md w-32 btn-primary" onclick="tambah_group.showModal()">+ Buat Group</button>
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
                  <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7.75 4H19M7.75 4a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 4h2.25m13.5 6H19m-2.25 0a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 10h11.25m-4.5 6H19M7.75 16a2.25 2.25 0 0 1-4.5 0m4.5 0a2.25 2.25 0 0 0-4.5 0M1 16h2.25" />
                  </svg>
                  <p class="font-semibold">filter</p>
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-5 gap-2 shadow bg-base-100 rounded-box w-80">
                  <li>
                    <div class="flex items-center p-0">
                      <label for="createdAtFilterMonth" class="mr-2">Created At Month:</label>
                      <input type="month" id="createdAtFilterMonth" class="input input-bordered w-full" />
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{ $groups->links() }}
      <div class="container mx-auto">
        <div class="overflow-x-auto lg:w-full">
          <table class="table-auto w-full">
            <thead>
              <tr class="w-full border">
                <th class="px-4 py-2 cursor-pointer border" onclick="sortTable(0)">
                  <div class="flex items-center"> ID <svg id="idSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                  </div>
                </th>
                <th class="px-4 py-2 cursor-pointer border" onclick="sortTable(1)">
                  <div class="flex items-center"> Name <svg id="namaSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                      <path d="M18 15l-6-6-6 6"></path>
                    </svg>
                  </div>
                </th>
                <th class="px-4 py-2 cursor-pointer border" onclick="sortTable(2)">
                  <div class="flex items-center"> Total Member <svg id="totalMemberSort" class="ml-2 w-4 h-4 transition-transform" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
              @if(isset($groups) && count($groups) > 0)
                @foreach($groups as $group)
                    <tr class="border">
                        <td class="border">{{ $group->id }}</td>
                        <td class="border">{{ $group->nama }}</td>
                        <td class="border">{{  $group->total_members }}</td>
                        <td class=" px-4 py-2">
                          <a href="{{ route('keanggotaan/group/edit', ['id' => $group->id]) }}" class="btn btn-xs btn-primary">Edit</a>
                          <a href="{{ route('keanggotaan/group/delete', ['id' => $group->id]) }}" class="btn btn-xs btn-error text-white">Delete</a>
                        </td>
                    </tr>
                 @endforeach
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <script>
        const searchInput = document.getElementById('searchInput');
        const tableBody = document.getElementById('tableBody');
        const rows = tableBody.getElementsByTagName('tr');
        const createdAtFilterMonth = document.getElementById('createdAtFilterMonth');
        let currentSortColumn = null;
        let currentSortOrder = 1;
        // Event listener untuk filter
        createdAtFilterMonth.addEventListener('change', filterRows);
        searchInput.addEventListener('input', filterRows);

        function filterRows() {
          const searchTerm = searchInput.value.toLowerCase();
          const createdAtValue = createdAtFilterMonth.value;
          for (let i = 0; i < rows.length; i++) {
            const row = rows[i];
            const cells = row.getElementsByTagName('td');
            let shouldHide = false;
            // Filter berdasarkan bulan created at
            if (createdAtValue) {
              const createdAtRowValue = new Date(cells[3].textContent).toISOString().slice(0, 7);
              if (createdAtRowValue !== createdAtValue) {
                shouldHide = true;
              }
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
        const columnNames = ['id', 'nama', 'totalMember', 'createdAt'];
      </script>

      </div>
  </body>
</html>