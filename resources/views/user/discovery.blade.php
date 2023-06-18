@extends('layouts.template')
@section('body')

    <h2>Discovery</h2>

    <form>
        <div class="row">
            <div class="col-7" id="searchbar">
                <input type="text" class="container-fluid" id="search" name="cari" placeholder="Search for your favourite destination" value="{{ old('cari') }}">
            </div>

            <div class="col-2" id="searchbar" action="/dashboard/results" method="GET">
                <button type="submit" class="search-btn" id="search-btn">
                    Search
                </button>
            </div>

            <div class="col-1" id="filter">
                <!--  <iconify-icon icon="ic:outline-notifications-none"></iconify-icon> -->
                <iconify-icon icon="ri:equalizer-line" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 14px; padding: 5px;"></iconify-icon>
            </div>

            <div class="col-1" id="notif">
                <iconify-icon icon="ic:outline-notifications-none" style="font-size: 37px; color: black; background-color: #FFC68F; border-radius: 100%; padding: 5px;"></iconify-icon>
            </div>

            <div class="col-1 btn"  id="mini-profile">
                <!-- <img src="Logo Icon/Mark.svg" alt=""> -->
            </div>
        </div>
    </form>

    <h2>Popular</h2>
        <div class="wrapper">
            @if ($popularEvents->count() > 0)
                @foreach ($popularEvents as $e)
                <a href="/detail-event/{{ $e->id_event }}"><div class="card" id="discover">
                    <img class="card-img-top" src="{{ url('/data_file/'.$e->event_logo)}}" alt="">
                    <div class="card-body">
                        <h6 class="card-title" style="color: #000000;">{{ $e->title }}</h6>
                    </div>
                </div></a>
                @endforeach
                @else
                    <p>No popular events found.</p>
            @endif
        </div>

    <h2>Recommended</h2>

        <div class="wrapper">
            @foreach ($recommendedEvents as $event)
                @if ($recommendedEvents->count() > 0)
                <a href="/detail-event/{{ $event->id_event }}">
                <div class="card" id="discover">
                    <img class="card-img-top" src="{{ url('/data_file/'.$e->event_logo)}}" alt="">
                    <div class="card-body">
                        <h6 class="card-title" style="color: #000000;">{{ $e->title }}</h6>
                    </div>
                </div>
                </a>
                @else
                <p>No recommended events found.</p>
                @endif
            @endforeach
        </div>

        {{-- <h2>Near Me</h2>
        <div class="wrapper" style="margin:0">
            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>

            <div class="card" id="discover">
                <img class="card-img-top" src="Logo Icon/Poster.svg" alt="">
                <div class="card-body">
                    <h6 class="card-title">(Nama Event)</h6>
                </div>
            </div>
        </div> --}}

@endsection
