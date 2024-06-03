<div>
    {{-- Be like water. --}}
</div>
<style>
    .container {
    width: 60%;
    max-width: 1200px;

    padding: 20px;
}

h1 {
    text-align: center;
    margin: 0;
    font-size: 28px;
    color: #004080;
    text-transform: uppercase;
}

table {
    width: 95%;
    border-collapse: collapse;
    margin-bottom: 20px;
    font-size: 12pt;
}

table, th, td {
    border: 1px solid #000;
}

th, td {
    padding: 8px 10px;
    text-align: left;
}

thead {
    background-color: #f0f0f0;
    text-align: center;
    font-weight: bold;
}

tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.total-row {
    font-weight: bold;
}

.total-row td {
    border: none;
    text-align: center;
}

@media print {
    body {
        background-color: #ffffff;
        font-size: 10pt;
    }
    .container {
        width: 100%;

</style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Paket') }}
        </h2>
    </x-slot>
    
<div>
<div class="lg:flex lg:flex-wrap gap-5 mb-5 hidden p-4">
            <button class="btn btn-md w-40 btn-primary" onclick="tambah_anggota.showModal()">+ Buat Paket Baru</button>
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

        <div class="flex w-full mb-10 p-4">
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

<div class="container p-4">
        <h1 class="flex">PAKET GROUP</h1> <br>
        <table>
            <thead>
                <tr>
                    <th>GROUP</th>
                    <th>NAMA. BRG</th>
                    <th>NM. BARANG</th>
                    <th>QTY. MASUK</th>
                    <th>QTY. KELUAR</th>
                    <th>STOK</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td></td>
                    <td>INDOMIE SOTO</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td></td>
                    <td>INDOMIE GORENG</td>
                    <td>5</td>
                    <td>0</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td></td>
                    <td>MI SEDAP GORENG</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td></td>
                    <td>JELLY YUPI</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td></td>
                    <td>POP MIE BESAR</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td></td>
                    <td>SIRLAK 25 GR SUPER</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td></td>
                    <td>KACANG KULIT</td>
                    <td>8</td>
                    <td>0</td>
                    <td>8</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td></td>
                    <td>GULA GELEM</td>
                    <td>6</td>
                    <td>0</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>23</td>
                    <td></td>
                    <td>BANGO G 575</td>
                    <td>18</td>
                    <td>0</td>
                    <td>18</td>
                </tr>
                <tr>
                    <td>31</td>
                    <td></td>
                    <td>KUING JARAN KEMIL</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>33</td>
                    <td></td>
                    <td>MOMISE KEMIL</td>
                    <td>3</td>
                    <td>0</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>34</td>
                    <td></td>
                    <td>WAFER NISSIN</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>38</td>
                    <td></td>
                    <td>ASTOR ASTRA TOPLES</td>
                    <td>4</td>
                    <td>0</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>40</td>
                    <td></td>
                    <td>NUSTRA SUPER</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>53</td>
                    <td></td>
                    <td>FANTA 1,5 LITER</td>
                    <td>6</td>
                    <td>0</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>55</td>
                    <td></td>
                    <td>FLORIDINA</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>59</td>
                    <td></td>
                    <td>EKONOMI 1,5 KG</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>63</td>
                    <td></td>
                    <td>GS FILTER</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>65</td>
                    <td></td>
                    <td>SAMPOERNA MILD</td>
                    <td>2</td>
                    <td>0</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>67</td>
                    <td></td>
                    <td>OB SAM 20X</td>
                    <td>1</td>
                    <td>0</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>73</td>
                    <td>0</td>
                    <td>73</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>
</div>