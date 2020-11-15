<x-dashboard-layout>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-primary">
                <h4 class="card-title">Tambah Admin</h4>
                </div>
                <div class="card-body">
                <form method="POST" action="{{ route('store-admin') }}">
                    <div class="row">@csrf
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Company (disabled)</label>
                        <input type="text" class="form-control" value="L - Tech" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Email address</label>
                        <input type="email" name="email" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Password</label>
                        <input type="password" name="password" class="form-control" >
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">First Name</label>
                        <input type="text" class="form-control" name="first_name">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                        <label class="bmd-label-floating">Last Name</label>
                        <input type="text" class="form-control" name="last_name">
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                        <label class="bmd-label-floating">Role</label>
                        <select name="role" id="role" class="form-control">
                            <option value="">Role</option>
                            <option value="admin">Admin</option>
                            <option value="teknisi">Teknisi</option>
                            <option value="kasir">Kasir</option>
                        </select>
                        </div>
                    </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">City</label>
                        <input type="text" name="city" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Country</label>
                        <input type="text" name="country" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <label class="bmd-label-floating">Postal Code</label>
                        <input type="text" name="kode_pos" class="form-control">
                        </div>
                    </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Tambah Admin</button>
                    <div class="clearfix"></div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-dashboard-layout>