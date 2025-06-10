<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Halaman Siswa</title>
</head>
<body>
  <h1>Daftar siswa</h1>
  @foreach ( $data as $item )
    <ul>
      <li>{{$item['nama']}}, {{$item['umur']}}, {{$item['id']}}</li>
    </ul>
  @endforeach
  {{-- <ul>
    <li>{{$data[0]['nama']}}, {{$data[0]['umur']}}, {{$data[0]['id']}}</li>
    <li>{{$data[1]['nama']}}, {{$data[1]['umur']}}, {{$data[1]['id']}}</li>
    <li>{{$data[2]['nama']}}, {{$data[2]['umur']}}, {{$data[2]['id']}}</li>
  </ul> --}}
</body>
</html>