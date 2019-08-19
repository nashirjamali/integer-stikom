@extends('dashboard-template')
@section('content')

<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">List User</li>
</ol>

<button class="btn btn-icon btn-sm btn-success" data-toggle="modal" data-target="#add-user" type="button">
    <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
    <span class="btn-inner--text">Tambah User</span>
</button>

<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="list_anggota" class="table table-striped table-bordered second" style="width:100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $key)
                    <tr>
                        <td>{{ $key->name }}</td>
                        <td>{{ $key->username }}</td>
                        <td>{{ $key->role }}</td>
                        <td>
                            <div class="d-flex">
                                <button data-toggle="modal" data-target="#edit-user-{{ $key->id }}" class="btn btn-sm btn-primary">Edit</button>

                                @if($key->role != 'admin')
                                <form action="{{ route('admin.commite.destroy', $key->id) }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}
                                    <button class="btn btn-sm btn-danger" type="submit" onclick="return confirm('Yakin nih mau dihapus?')">Hapus</button>
                                </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="add-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.commite.store') }}" method="POST">
                    {{csrf_field()}}
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" type="text" name="name" value="">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Username" type="text" name="username" value="">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password" name="password" value="">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder"></i></span>
                            </div>
                            <select name="role" class="form-control" id="">
                                <option value="commite">Cuma Panitia</option>
                                <option value="admin">Admin Cuy</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@foreach($users as $key)
<div class="modal fade" id="edit-user-{{ $key->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.commite.update', $key->id) }}" method="POST">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="PUT">
                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Nama Lengkap" type="text" name="name" value="{{ $key->name }}">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input class="form-control" placeholder="Username" type="text" name="username" value="{{ $key->username }}">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input class="form-control" placeholder="Password" type="password" name="password" value="">
                        </div>
                    </div>

                    <div class="form-group mb-3">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-folder"></i></span>
                            </div>
                            <select name="role" class="form-control" id="">
                                <option value="commite">Cuma Panitia</option>
                                <option value="admin">Admin Cuy</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>      
@endforeach
@stop