<x-layout>
  <h2>Nama saya adalah {{$data}} Dan umur saya Baru {{$umur}} Tahun</h2>
  {{-- if else --}}
  @if ($umur > 18)
    <h3>Kamu sudah dewasa</h3>
  @else
    <h3>Kamu masih anak anak</h3>
  @endif
  <x-slot:footer>
    <strong>About</strong>
  </x-slot:footer>
</x-layout>