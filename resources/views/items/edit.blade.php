<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">

    <title>Buku: Edit Data | Exercise 6: Alfat</title>
</head>

<body>
    <div class="container">
        <div class="col-6 mx-auto">
            <h1 class="my-4 fs-2 text-center">Form Edit Data</h1>
            <form action="{{ route('update', $item->id) }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan nama barang..." value="{{ $item->name }}">
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">Jumlah</label>
                    <input type="text" class="form-control" id="quantity" name="quantity"
                        placeholder="Masukkan jumlah barang..." value="{{ $item->quantity }}">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Harga</label>
                    <input type="number" class="form-control" id="price" name="price"
                        placeholder="Masukkan harga barang..." value="{{ $item->price }}">
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-success submit ms-auto w-auto">Edit</button>
                </div>
                
        </div>
        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
