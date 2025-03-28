<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>chỉnh sửa user</h1>
        {{-- Form: GET | POST --}}
        <form action="{{ route('users.updatePostUsers') }}" method="POST">
            @method('PUT')
            @csrf
            <input type="hidden" name="idUser" value="{{ $user->id }}">

            <div class="mb-3">
                <label for="name">tên:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <label for="phongban">Phòng ban:</label>
                <select class="form-control" id="phongban" name="phongban">
                    @foreach ($phongban as $value)
                        <option @if ($user->phongban_id == $value->id) selected @endif value="{{ $value->id }}">
                            {{ $value->ten_donvi }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="tuoi">tuổi:</label>
                <input type="number" class="form-control" id="tuoi" name="tuoi" value="{{ $user->tuoi }}">
            </div>
            <div class="mb-3">
                <label for="ngaynghi">số ngày nghỉ:</label>
                <input type="number" class="form-control" id="ngaynghi" name="ngaynghi"
                    value="{{ $user->songaynghi }}">
            </div>
            <button type="submit" class="btn btn-success">Chỉnh sửa</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
