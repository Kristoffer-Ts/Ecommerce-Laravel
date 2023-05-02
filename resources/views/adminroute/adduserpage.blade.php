<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Add User</h1>
                <form action="{{ url('/admindashboard/saveuser') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="username" name="username" id="username" class="form-control" value="{{ old('email') }}" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" id="address" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="number" name="phone_number" id="phone_number" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="id_role">ID Role</label>
                        <input type="number" name="id_role" id="id_role" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="shop_name">Shop Name</label>
                        <input type="text" name="shop_name" id="shop_name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="saldo">Saldo</label>
                        <input type="number" name="saldo" id="saldo" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary">Add User</
