@extends('layouts.template')

@section('body')
    <div class="head-of-DE">
        <h3><b>Bookmarks</b></h3>
    </div>

    <br>

    <div class="content-of-bookmark">
        @foreach ($bookmark as $b)
        <div class="card">
            <div class="card-body">
                <div class="row" style="color: #143362">
                    <div class="col-lg-2">
                        <img src="{{ url('/data_file/'.$b->event_logo) }}" class="rounded" alt="Event Logo of {{ $b->title }}" width="125px" height="125px">
                    </div>
                    <div class="col-lg-9">
                        <h3><b>{{ $b->title }}</b></h3>
                        <p>
                            {{ $b->category }} • {{ $b->event_location }}
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <iconify-icon icon="material-symbols:calendar-month" width="23" height="23" style="vertical-align: -0.3em;"></iconify-icon>
                            {{ $b->start_date }} until {{ $b->end_date }}
                        </p>
                        <p>{{ Str::limit($b->event_detail, 100) }}</p>
                    </div>
                    <div class="col-lg-1">
                        <form action="/bookmark/delete-bookmark" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            @method('POST')
                            <button type="submit" class="bookmark-event">
                                <input type="hidden" name="id_event" id="id_event" value="{{ $b->id_event }}">
                                <iconify-icon icon="maki:cross" style="cursor: pointer; color: #143362"></iconify-icon>
                            </button>
                        </form>
                    </div>
                </div>
                <hr>
                <div class="text-right">
                    <button class="btnkotak">
                        <a href="/detail-event/{{ $b->id_event }}" style="color: var(--biru-paling-tua)">Detail</a>
                </button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection
