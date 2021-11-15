<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<div class="text-center">
    <a href="https://ictjuara.000webhostapp.com">
        <img class="gambar" src="https://ictjuara.000webhostapp.com/asset/ict-juara.png" alt="Logo-brand">
    </a>
</div>

<div class="text-center" style="padding: 0 0 100px 0;">
    <h2>List data wisata</h2>
    {{-- <p style="font-size: medium;">Jumlah wisata saat ini adalah : {{ $data->count() }} </p> --}}
    <div class="card mt-4 py-4 px-5">
        <div class="scroll">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Image</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Nama wisata</th>
                        <th scope="col">Buka</th>
                        <th scope="col">Kota</th>
                        <th scope="col">Provinsi</th>
                        <th scope="col">Latitude</th>
                        <th scope="col">Longitude</th>
                    </tr>

                </thead>
                <tbody>
                    @foreach ($data as $wisata)
                        <tr>
                            <td><img src="{{ $wisata['image'] }}" width="100px" alt="Icon Wisata"></td>
                            <td scope="col">{{ $wisata['kategori_id'] }}</td>
                            <td scope="col">{{ $wisata['nama_wisata'] }}</td>
                            <td scope="col">{{ $wisata['waktu_buka'] }}</td>
                            <td scope="col">{{ $wisata['kota'] }}</td>
                            <td scope="col">{{ $wisata['provinsi'] }}</td>
                            <td scope="col">{{ $wisata['latitude'] }}</td>
                            <td scope="col">{{ $wisata['longitude'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
