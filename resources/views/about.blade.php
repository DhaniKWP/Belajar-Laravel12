<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>About</title>
</head>
<body>
  <h2>Nama saya adalah {{$data}} Dan umur saya Baru {{$umur}} Tahun</h2>
  {{-- if else --}}
  @if ($umur > 18)
    <h3>Kamu sudah dewasa</h3>
  @else
    <h3>Kamu masih anak anak</h3>
  @endif
</body>
</html>