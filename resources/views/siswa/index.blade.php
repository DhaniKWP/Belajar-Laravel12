<x-layout>
  <h1>Daftar siswa</h1>
    {{-- for each --}}
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
    <x-slot:footer>
      <strong>Siswa index</strong>
    </x-slot:footer>
</x-layout>