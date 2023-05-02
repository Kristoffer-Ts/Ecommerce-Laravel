<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>List User</h2>
            <table class="table table-bordered table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Username</th>
                        <th>Address</th>
                        <th>Phone Number</th>
                        <th>Shop Name</th>
                        <th>Saldo</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->address }}</td>
                            <td>{{ $user->phone_number }}</td>
                            <td>{{ $user->shop_name }}</td>
                            <td>{{ $user->saldo }}</td>
                            <td>{{ $user->id_role }}</td>
                            <td>
                                <form action="{{ route('deleteuser', $user->id) }}" method="POST" onsubmit="return confirm('Apakah yakin mau menghapus user?')" style="display: inline-block;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
            <form action="{{route('adduser')}}" >
                <button type="submit" class="btn btn-primary">Tambah user</button>
            </form>
