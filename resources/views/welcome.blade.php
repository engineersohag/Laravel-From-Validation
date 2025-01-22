<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel From Validation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-5 m-3">
                
                    <form action="{{ route('addUser') }}" method="POST" class="shadow p-4">
                        @csrf
                        <h2 class="text-center fw-bold">Add <span class="text-primary">NEW</span> Users</h2>

                        {{-- @if ($errors->any())  // সবগুলো error এক সাথে দেখার জন্য েএটি।
                            <ul class="alert alert-danger alert-dismissible fade show p-3 list-unstyled">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                @endforeach
                            </ul>
                        @endif --}}

                        <div class="mb-3">
                            <label for="name" class="form-label">Name :</label>
                            <input type="text" value="{{ old('name') }}" id="name" class="form-control @error('name') is-invalid @enderror" name="name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email :</label>
                            <input type="email" value="{{ old('email') }}" id="email" class="form-control @error('email') is-invalid @enderror"" name="email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="age" class="form-label">Age :</label>
                            <input type="number" value="{{ old('age') }}" id="age" class="form-control @error('age') is-invalid @enderror"" name="age">
                            <span class="text-danger">
                                @error('age')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>

                        <div class="mb-3">
                            <label for="city" class="form-label">City :</label>
                            <select name="city" value="{{ old('city') }}" id="city" class="form-select @error('city') is-invalid @enderror"">
                                <option value="Feni">Feni</option>
                                <option value="Dhaka">Dhaka</option>
                                <option value="Lakshmipur">Lakshmipur</option>
                                <option value="Cadpur">Cadpur</option>
                            </select>
                            <span class="text-danger">
                                @error('city')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <input type="submit" value="SUBMIT" class="btn btn-primary">
                    </form>
                

            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>