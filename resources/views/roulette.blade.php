@extends('layouts.subpagelayout')
@section('content')

<meta name="csrf_token" content="{{ csrf_token() }}" />
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Loteria
      <small>Sprawdź swoje szczęście</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="{{ route('homepage') }}">Home</a>
      </li>
      <li class="breadcrumb-item active">Loteria</li>
    </ol>
    <!-- Page Content -->
    @auth
    <script>sessionStorage.clear();</script>
    @endauth
    <div class="row">
        <div class="col-lg-2 mb-4 mt-4">
    <div class="controls">
        <button class="btn btn-primary" onclick="startRoulette()">Zagraj</button>
    </div>
        </div>
        <div class="col-lg-2 ">
            <div id="reward"></div>
        </div>
        <div class="col-lg-4">
            <div id="displayRewards"></div>
        </div>
    </div>
    <!-- Music -->
    
        <div class="card mb-4">
            <div class="card-header">
                <h3>Podkład muzyczny</h3>
            </div>
            <div class="card-body" style="background-color: #faf1fe">
                <div class="row">
                <div class="col-lg-3">
                    <h5>Polonez A-dur op. 40 no. 1</h5>
                    <small class="text-muted">F. Chopin</small>
                    <audio autoplay id="polonezadur" src="sounds/polonez_a_dur_op_40_no_1.mp3"></audio>
                </div>
                <div class="col-lg-3">
                    <h5>Walc a-moll B.150 op. posth.</h5>
                    <small class="text-muted">F. Chopin</small>
                    <audio autoplay id="walcamoll" src="sounds/walc_a_moll.mp3"></audio>
                </div>  
                <div class="col-lg-3">
                    <h5>Walc op. 69 no. 2</h5>
                    <small class="text-muted">F. Chopin</small>
                    <audio autoplay id="walcop69no2" src="sounds/walc_op_69_no_2.mp3"></audio>
                </div>
                <div class="col-lg-3">
                    <h5>Nokturn cis-moll no. 20</h5>
                    <small class="text-muted">F. Chopin</small>
                    <audio autoplay id="nokturn" src="sounds/nokturn_cis_moll.mp3"></audio>
                </div>             
            </div>
                <div class="row">
                    <div class="col-lg-3">
                        <hr>
                        <button class="btn btn-primary" onclick="playMusic('polonezadur')">Słuchaj</button>
                        <button class="btn btn-primary" onclick="stopMusic('polonezadur')">Stop</button>                        
                    </div>
                    <div class="col-lg-3">
                        <hr>
                        <button class="btn btn-primary" onclick="playMusic('walcamoll')">Słuchaj</button>
                        <button class="btn btn-primary" onclick="stopMusic('walcamoll')">Stop</button>                       
                    </div>
                    <div class="col-lg-3">
                        <hr>
                        <button class="btn btn-primary" onclick="playMusic('walcop69no2')">Słuchaj</button>
                        <button class="btn btn-primary" onclick="stopMusic('walcop69no2')">Stop</button>                       
                    </div>
                    <div class="col-lg-3">
                        <hr>
                        <button class="btn btn-primary" onclick="playMusic('nokturn')">Słuchaj</button>
                        <button class="btn btn-primary" onclick="stopMusic('nokturn')">Stop</button>                        
                    </div>                  
                </div>
            </div>
            <div class='card-footer text-muted'>
                Wszystkie utwory zostały wykonane przez: Sylwester Kot
            </div>
        </div>
    
  </div>
<script src="<?php echo asset("js/roulette.js"); ?>"></script>
@endsection