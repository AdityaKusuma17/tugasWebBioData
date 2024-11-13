@extends('master.layout')

@section('title', 'Jadwal Perkuliahan')
@section('content')

<div class="section ml-48 h-screen">
  <div class="bungkus-tabel p-5">
    <div class="container p-2 rounded-lg" style="background-color: #111829;">
        <h3>Jadwal Kuliah</h3>
        <div class="overflow-x-auto">
            <table class="text-left w-4/5">
              <!-- head -->
              <thead>
                <tr>
                  <th class="px-4 py-2">Hari</th>
                  <th class="px-4 py-2">Mata Kuliah</th>
                  <th class="px-4 py-2">Jam</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $day => $classes)
                @foreach ($classes as $class)
                <tr>
                  <td class="px-4 py-2">{{$day}}</td>
                  <td class="px-4 py-2">{{$class['matkul']}}</td>
                  <td class="px-4 py-2">{{$class['jam']}}</td>
                </tr>
                @endforeach
                @endforeach
              </tbody>
            </table>
          </div>
    </div>
  </div>
</div>
@endsection