@extends('layouts.app')

@section('title','Laporan Replacement')

@section('content')

        <a target="_blank" href="/laporan/replacement/pdf" 
        class="btn btn-primary">Cetak PDF</a>
        <br>
        <br>
        <h1>
            Laporan Replacement Class
        </h1>
        <br>
        <table>
            <tr>
                {{-- <th>Nama Lengkap</th>
                <th>Nama Mata Kuliah</th> --}}
                {{-- <th>Kelas</th>
                <th>Program Studi</th>
                <th>Semester</th>
                <th>Tahun Akademik</th>
                <th>Jadwal Tanggal Replacement</th>
                <th>Jadwal Jam Kuliah</th>
                <th>Tanggal Replacement</th>
                <th>Jam Replacement</th>
                <th>Alasan melakukan <i>replacement class</i></th> --}}
            </tr>
            @foreach ($replacement as $rep)
                <div class="container text-left">
                    <br>
                    <div class="row">
                        <div class="col">
                            <b>Nama Lengkap</b>
                        </div>
                        <div class="col">
                            : {{$rep->nama_lengkap}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Nama Mata Kuliah</b>
                        </div>
                        <div class="col">
                            : {{$rep->mata_kuliah}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Kelas</b>
                        </div>
                        <div class="col">
                            : {{$rep->kelas}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Program Studi</b>
                        </div>
                        <div class="col">
                            : {{$rep->prodi}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Semester</b>
                        </div>
                        <div class="col">
                            : {{$rep->semester}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Tahun Akademik</b>
                        </div>
                        <div class="col">
                            : {{$rep->tahun_akademik}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jadwal & Tanggal Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rep->tanggal}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jam Kuliah</b>
                        </div>
                        <div class="col">
                            : {{$rep->jadwal_kuliah}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Tanggal Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rep->tanggal_replacement}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Jam Replacement</b>
                        </div>
                        <div class="col">
                            : {{$rep->jam_replacement}}<br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <b>Alasan</b>
                        </div>
                        <div class="col">
                            : {{$rep->alasan_replacement}}<br>
                        </div>
                    </div>
                    
                </div>
            @endforeach
        </table>

@endsection