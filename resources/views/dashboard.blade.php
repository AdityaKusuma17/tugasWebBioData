@extends('master.layout')

@section('content')
    <!-- Main Content -->
        <div class="p-12 ml-48">
            <h2 class="text-2xl font-semibold">Selamat Datang di Halaman Dashboard</h2>
            <div class="statistik">
                <div class="stats shadow">
                    <div class="stat">
                      <div class="stat-figure text-primary">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          class="inline-block h-8 w-8 stroke-current">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                      </div>
                      <div class="stat-title">Semester saat ini</div>
                      <div class="stat-value text-primary text-center">3</div>
                    </div>
                  
                    <div class="stat">
                      <div class="stat-figure text-secondary">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          class="inline-block h-8 w-8 stroke-current">
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                      </div>
                      <div class="stat-title">SKS yang di tempuh saat ini</div>
                      <div class="stat-value text-secondary text-center">24</div>
                    </div>
                    <div class="stat">
                      <div class="stat-figure text-secondary">
                        <div class="avatar online">
                          <div class="w-16 rounded-full">
                            <img src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                          </div>
                        </div>
                      </div>
                      <div class="stat-value">86%</div>
                      <div class="stat-title">Tasks done</div>
                      <div class="stat-desc text-secondary">31 tasks remaining</div>
                    </div>
                  </div>
            </div>
            <section class="mt-10">
                <div class="flex w-full flex-col lg:flex-row">
                    <div class="card bg-base-300 rounded-box grid h-32 flex-grow place-items-center p-2">
                        <div class="radial-progress text-primary" style="--value:70;" role="progressbar">70%</div>
                        <p>Poin SKP</p>
                    </div>
                    <div class="divider lg:divider-horizontal">OR</div>
                    <div class="card bg-base-300 rounded-box grid h-32 flex-grow place-items-center p-2">
                        <div class="radial-progress text-primary" style="--value:70;" role="progressbar">70%</div>
                        <p>Win Rate</p>
                    </div>
                </div>
            </section>
            <div class="senang mt-10 p-5 rou" style="background-color: #111829;">
                <h2>Persentase Kebahagiaan</h2>
                <div class="mt-5">
                    <input type="range" min="0" max="100" value="25" class="range" step="25" class="mt-5"/>
                </div>
                <div class="flex w-full justify-between px-2 text-xs">
                    <span>
                        | <br>
                        <p>tidak senang</p>
                    </span>
                    <span>
                        | <br>
                        <p>sedikit senang</p>
                    </span>
                    <span>
                        | <br>
                        <p>biasa aja</p>
                    </span>
                    <span>
                        | <br>
                        <p>senang</p>
                    </span>
                    <span>
                        | <br>
                        <p>senang sekali</p>
                    </span>  
                    </div>
                </div>
        </div>
   
   
@endsection

@section('styles')
<style>
    /* Jika Anda ingin menambahkan styling khusus, Anda bisa menambahkannya di sini */
</style>
@endsection