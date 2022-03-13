@extends('layouts.dashboard')

@section('title')
    Kelurahaan Langgini
@endsection

@section('content')
<div class="row">
    <div class="col-12">
        <h2 class="page-title">Dashboard</h2>
    </div>
</div>
<div class="row">
    <div class="col-4">
        <div class="card info-card">
            <div class="card-body">
                <h5 class="card-title">Penduduk</h5>
                <div class="info-card-text">
                    <h3>134</h3>
                    
                </div>
                <div class="info-card-icon">
                    <i class="fa fa-users"></i>
                </div>
            </div>
            <div id="sparkline-bar"></div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card">
            <div class="card-body">
                <h5 class="card-title">Berita</h5>
                <div class="info-card-text">
                    <h3>123</h3>
                    
                </div>
                <div class="info-card-icon">
                    <i class="fa fa-list"></i>
                </div>
            </div>
            <div id="sparkline-bar"></div>
        </div>
    </div>
    <div class="col-4">
        <div class="card info-card">
            <div class="card-body">
                <h5 class="card-title">Kunjungan </h5>
                <div class="info-card-text">
                    <h3>792</h3>
                    
                </div>
                <div class="info-card-icon">
                    <i class="fa fa-eye"></i>
                </div>
            </div>
            <div id="sparkline-bar"></div>
        </div>
    </div>
</div>
@endsection