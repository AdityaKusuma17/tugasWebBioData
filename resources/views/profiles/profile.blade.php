@extends('master.layout')

@section('title', 'Profile')
@section('content')

<div class="bg-base-200 min-h-screen ml-48 p-12">
    <div class="">
      <div class="flex p-6 rounded-lg" style="background-color: #111829;">
        <img
          src="{{ asset('img/IMG_20240313_221558_904.webp') }}"
          class="w-32 rounded-lg shadow-2xl" />
          {{-- <h3 class="text-4xl font-bold">Profile</h3> --}}
          <div class="overflow-x-auto">
            <table class="table">
              <tbody>
                <!-- row 1 -->
                <tr class="ml-3">
                  <td>Nama :</td>
                  <td> {{ $data['nama']}}</td>
                </tr>
                <!-- row 2 -->
                <tr>
                  <td>NIM :</td>
                  <td>{{ $data['nim']}}</td>
                </tr>
                <!-- row 3 -->
                <tr>
                  <td>Email :</td>
                  <td>{{ $data['email']}}</td>
                </tr>
                <tr>
                  <td>Telepon :</td>
                  <td>{{ $data['telepon']}}</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        {{-- PENGALAMAN --}}
        <div class="pengalaman">
          <h2 class="text-bold text-3xl text-center">pengalaman Kepanitiaan</h2>
          <div class="bungkusnya flex flex-wrap mt-5 p-5 rounded-lg items-center justify-center" style="background-color: #111829;">
            {{-- satu --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">PARASICT XI</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
            {{-- dua --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">TECHFEST</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
            {{-- tiga --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">PEMIRA INSTIKI 2024</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
            {{-- empat --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">Diesnatalis Instiki 2024</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
            {{-- lima --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">Diesteria vol.2</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
            {{-- enam --}}
            <div class="card bg-base-100 w-96 shadow-xl mr-5 mb-5">
                <div class="card-body">
                    <h2 class="card-title">PKKMB INSTIKI 2024</h2>
                    <p>If a dog chews shoes whose shoes does he choose?</p>
                </div>
            </div>
        </div>
       
  </div>

  @endsection