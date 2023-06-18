@extends('layouts.template')
@section('atas')
@endsection
@section('bawah')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 pb-3">
            <h2 class="judul1">Showing results:</h2>
        </div>
    </div>

    <div>
        <div class="row content">
            <div class="col-xl-12 col-lg-12">
                <div class="row">
                    @foreach($regist_forms as $p)
                    <div class="col-12" id="set_dtl">
                        <div class="p-4 rounded-4 shadow-effect darkcard">
                            <div class="row">
                                {{-- <img width="90 px" src="{{ url('/poster_event/'.$p->eventPoster) }}">
                                <img src="{{ asset('/poster_event/'.$p->eventPoster) }}" class="img-fluid" width=250px></td> --}}
                                <img src="/Logo Icon/profpic.svg" width="150px" alt="">

                            <div class="col-6 judul1">
                                <h4>{{ $p->title }}</h4>
                            </div>

                            <div class="col-12">
                                {{ $p->eventLocation }} - {{ $p->category }}
                            </div>
                            </div>
                            <div class="col border-bottom">
                                <p class="mb-0 text-truncate" style="max-width: 150px;">{{ $p->eventDetail }}</p>
                            </div>

                            <p>
                                <a class="btn bottom-right" data-toggle="modal" data-target="#popupEvent" role="button">Detail</a>
                            </p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
