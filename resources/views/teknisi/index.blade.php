<x-dashboard-layout>
  <div class="row">
    <a href="{{ route('add-teknisi') }}" class="btn btn-danger">Tambah Teknisi</a>
    <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover">
              <thead class="">
                <th>
                  ID
                </th>
                <th>
                  Name
                </th>
                <th>
                  Country
                </th>
                <th>
                  Role
                </th>
                <th>
                  Email
                </th>
              </thead>
              <tbody>
                @foreach ($users as $user)
                <tr>
                  <td>
                    {{$loop->iteration}}
                  </td>
                  <td>
                    {{$user->name}}
                  </td>
                  <td>
                    {{$user->city}}
                  </td>
                  <td>
                    {{$user->role}}
                  </td>
                  <td>
                    {{$user->email}}
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-dashboard-layout>