@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>List User</h2>
            <table class="table table-bordered">
                
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Username</th>
                    <th>Address</th>
                    <th>Phone_number</th>
                    <th>Shop_name</th>
                    <th>Saldo</th>
                    <th>Role</th>
                </tr>
                
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->username}}</td>
                            <td>{{ $user->address}}</td>
                            <td>{{ $user->phone_number}}</td>
                            <td>{{ $user->shop_name}}</td>
                            <td>{{ $user->saldo}}</td>
                            <td>{{ $user->id_role}}</td>
                            
                            <td>
                                <form action="{{route('deleteuser', $user->id)}}" method="POST" onsubmit="return confirm('Apakah yakin mau menghapus user?')"  style="display: inline-block;">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>

                        </tr>

                    @endforeach

                    <form action="{{route('adduser')}}" >
                        <button type="submit" class="btn btn-primary">Tambah user</button>

                    </form>

                </tbody>
            </table>
