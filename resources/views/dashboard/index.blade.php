@extends('layouts.main') @section('container')
<div class="wrapper p-4 w-full bg-stone-100">
    <div class="alert-group grid gap-y-4">
        <div class="top-text">
            <h1 class="text-xl uppercase text-stone-500">Dashboard</h1>
            <p class="last-change text-stone-500 text-xs">
                Terakhir diperbarui: 2022-06-23 07:01:41
            </p>
        </div>
        <div class="phone-num w-full h-fit text-white p-3 font-bold bg-green-600">
            <p>NOMOR WA Anda adalah</p>
            <p>
                Pastikan No WA anda Aktif.
                <span class="font-normal">Klik
                    <a href="#" class="bg-white text-black">disini</a> untuk merubahnya</span>
            </p>
        </div>
        <div class="piket w-full h-fit text-white p-3 bg-blue-500">
            <p>
                <span class="font-bold">Piket pada hari ini </span>: Firmansyah
                Ayatullah, S.Kom dan Joni Setiyawan Saputra
            </p>
        </div>
    </div>
    <div class="maincontent flex flex-row gap-x-4 my-4">
        <div class="jamAbsen w-full">
            <div class="card-waktu text-black w-full flex flex-row p-3 drop-shadow-[0_0_5px_rgba(0,0,0,0.4)] bg-white">
                <div class="text w-2/3">
                    <p class=" text-sm capitalize">belum absen (presensi 6:00 - 9:00)</p>
                    <p class="text-2xl"> <span>Waktu Habis</span></p>
                </div>
                <div class="w-1/3 logo grid content-center justify-items-end">
                    <i class="fa-solid fa- fa-3x fa-id-card text-gray-300"></i>
                </div>
            </div>
            <div class="info-kehadiran w-full h-fit drop-shadow-md">
                <div class="top w-full text-white h-auto p-3 bg-red-700 mt-4 font-semibold">
                    <p class="uppercase">persentase kehadiran <span class="persentase">0</span>%</p>
                    <p class="text-xs">Berikut detail rekap kehadiran anda.</p>
                </div>
                <div class="content-kehadiran w-full h-auto p-3  bg-white">
                    <div class="daftar-keterangan text-sm border-2 grid grid-flow-row divide-y">
                        <div class="sakit grid grid-flow-col p-2 px-3">
                            <p class="sakit">sakit</p>
                            <div class="ket grid text-xs justify-items-end">
                                <p class="hari bg-purple-700 p-1 text-white font-semibold rounded-sm px-2">
                                    <span class="hari">0</span> hari
                                </p>
                            </div>
                        </div>
                        <div class="izin grid grid-flow-col p-2 px-3">
                            <p class="izin">izin</p>
                            <div class="ket grid text-xs justify-items-end">
                                <p class="hari bg-yellow-600 p-1 text-white font-semibold rounded-sm px-2">
                                    <span class="hari">0</span> hari
                                </p>
                            </div>

                        </div>
                        <div class="dispen grid grid-flow-col p-2 px-3">
                            <p class="dispensasi">dispensasi</p>
                            <div class="ket grid text-xs justify-items-end">
                                <p class="hari bg-blue-700 p-1 text-white font-semibold rounded-sm px-2">
                                    <span class="hari">0</span> hari
                                </p>
                            </div>

                        </div>
                        <div class="alpha grid grid-flow-col p-2 px-3">
                            <p class="alpha">alpha</p>
                            <div class="ket grid text-xs justify-items-end">
                                <p class="hari bg-red-700 p-1 text-white font-semibold rounded-sm px-2">
                                    <span class="hari">0</span> hari
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="calendar w-full">
            <div class="header bg-purple-900 w-full h-20">

            </div>
            <div id='calendar' class=" p-3 bg-white">
            </div>
        </div>
        <div class="bg-white w-full h-80">
            <div class="header bg-blue-800 text-white p-3">
                <p class="text text-sm">100 Besar</p>
                <p class="kehadiran text-lg">Kehadiran Pertama</p>
            </div>
            <div class="daftarnama h-full w-full overflow-y-scroll">
                <ul class="list-group list-group-flush">
                    @foreach ($kehadiran as $index => $hadir)
                    <li class="list-group-item grid grid-cols-3 ">
                        <div class="img">
                            <img src="https://github.com/mdo.png" alt="" class="rounded-circle w-16">
                        </div>
                        <div class="text col-span-2 grid content-center">
                            <p>{{ $index + 1 }}. {{ $hadir->name }}.</p>
                            <small>{{ $hadir->kelas }} - {{ $hadir->created_at->format('H:i:s') }}</small>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection