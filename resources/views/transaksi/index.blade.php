<x-dashboard-layout>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header card-header-primary">
          <h4 class="card-title mt-0"> Table on Plain Background</h4>
          <p class="card-category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="">
                <th>
                  #
                </th>
                <th>
                  Nama Barang
                </th>
                <th>
                  Keluhan
                </th>
                <th>
                  Tanggal Masuk
                </th>
                <th>
                  Status
                </th>
                <th>
                  Atas Nama
                </th>
                <th class="text-center">
                  Aksi
                </th>
              </thead>
              <tbody>
                @forelse ($transaksi as $key => $ts)
                <tr>

                  <td>
                    <p>{{ $key+ $transaksi->firstItem() }}</p>
                  </td>
                  <td>
                    <p>{{ $ts->nm_barang }}</p>
                  </td>
                  <td>
                    <p>{{ $ts->keluhan }}</p>
                  </td>
                  <td>
                    <p>{{ $ts->tgl_masuk }}</p>
                  </td>
                  <td>
                    <p class="badge badge-danger">{{ $ts->status }}</p>
                  </td>
                  <td>
                    <p>{{ $ts->atas_nm }}</p>
                  </td>
                  <td class="text-center">
                    <a href="" class="btn btn-info" id="aksiDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aksi</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="#">Edit</a>
                      <a class="dropdown-item" href="#">Selesai</a>
                      <a class="dropdown-item" href="#">Batal</a>
                    </div>
                  </td>

                </tr>
                @empty
                <div class="alert alert-danger">
                  Data transaksi belum Tersedia.
                </div>
                @endforelse
                <!-- <tr>
                  <td>
                    1
                  </td>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Hohohiheh
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td>
                    $36,738
                  </td>
                </tr> -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>