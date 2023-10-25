<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body style="background-color: #ffff ;">
    <div class="row" style="margin: 10vh;">
        <div class="col-6 offset-3">
        <div class="container border rounded" style="background-color:cadetblue;">
        <div class="d-flex justify-content-center mt-3">
            <h1 class="mx-auto">DATA DIRI</h1>
        </div>    
        <form method="POST" action="/form" enctype="multipart/form-data">
            @csrf
            {{-- Nama --}}
            <div class="m-3">
                <label for="nama" class="form-label">Nama Pasien</label>
                <select id="pasien" name = "pasien" required>
                    <option value="1">pasien1</option>
                    <option value="2">pasien2</option>
                </select>
                    <!-- <input type="text" class="form-control" id="pasien" name="pasien" required> -->
                    @error('nama')
                    <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
            
    
            {{-- Email --}}
            <div class="m-3">
                <label for="email" class="form-label">Nama Dokter</label>
                <select id="dokter" name = "dokter" required>
                    <option value="1">Dokter1</option>
                    <option value="2">Dokter2</option>
                </select>
              <!-- <input type="text" class="form-control" id="dokter" name="dokter" required> -->
              @error('email')
                <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>

            {{-- Tanggla Lahir --}}
            <div class="m-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" class="form-control" id="status" name="status" required>
                @error('tanggalLahir')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- Skor --}}
            <div class="m-3">
                <label for="suhu" class="form-label">Suhu</label>
                <input type="text" class="form-control" id="suhu" name="suhu" required>
                @error('skor')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            <div class="m-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
                @error('foto')
                    <div class="alert alert-danger">{{$message}}</div>
                @enderror
            </div>
    
            {{-- Tombol Submit --}}
            <button type="submit" class="btn btn-primary m-3">Submit</button>
        </form>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>