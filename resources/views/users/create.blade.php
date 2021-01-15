<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="col">
                <div class="card">
                    <h5 class="card-header">Form Add Users</h5>
                    <div class="card-body">
                        <form method="post" action="/users">
                            @csrf
                            <div class="form-group">
                                <label for="role_id" class="col col-form-label">Role ID</label>
                                <input type="text" class="form-control  @error('role_id') is-invalid @enderror" name="role_id" id="role_id" value="{{ old('role_id') }}">
                                @error('role_id')
                                <div id="role_id" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="name" class="col col-form-label">Name</label>
                                <input type="text" class="form-control  @error('name') is-invalid @enderror" name="name" id="inputName" value="{{ old('name') }}">
                                @error('name')
                                <div id="name" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="username" class="col col-form-label">Username</label>
                                <input type="text" class="form-control  @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('name') }}">
                                @error('name')
                                <div id="username" class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-row">
                                <div class="col form-group">
                                    <label for="email" class="col col-form-label">Email</label>
                                    <input type="text" class="form-control  @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                                    @error('email')
                                    <div id="email" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col form-group ">
                                    <label for="password" class="col col-form-label">password</label>
                                    <input type="text" class="form-control  @error('password') is-invalid @enderror" name="password" id="password" value="{{ old('password') }}">
                                    @error('password')
                                    <div id="password" class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add</button>
                            <a href="/users" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>