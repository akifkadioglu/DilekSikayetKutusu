@extends('partials.master')
@section('content')
    @auth
        <div class="container kac">
            @foreach ($data as $item)
                <div class="form-control navbar mb-3">
                    <div class="col-sm-2">{{ $item->subject }}</div>
                    <div class="col-sm-2">{{ $item->address }}</div>
                    <div class="col-sm-2">{{ $item->statu }}</div>
                    <div class="col-sm-2">{{ $item->note }}</div>
                    <a href="{{ route('duzenleform', $item->id) }} "><button
                            class="btn btn-outline-secondary">Düzenle</button></a>
                </div>
            @endforeach
        </div>
    @endauth
    @guest
        @php
        if (isset($_COOKIE['adres'])) {
            $adres = $_COOKIE['adres'];
        } else {
            $deger = uniqid();
            setcookie('adres', $deger, time() + 2629743);
        }

        @endphp
        <div class="container arala">
            <form action="{{ route('dilekekle') }} " method="post">
                @csrf
                <div class="form">
                    <input type="text" maxlength="255" class="form form-control" placeholder="Konu" name="subject">
                </div>
                <input type="hidden" @if (isset($deger))
                value="{{ $deger }} "
            @else
                value="{{ $adres }} "
                @endif name="address">

                <div class="form my-5">
                    <textarea name="text" maxlength="60000" class="form form-control" id="" cols="30"
                        placeholder="Sorununuz ya da Dileğiniz" rows="10"></textarea>
                </div>
                <div style="text-align: end">
                    <button class="btn btn-outline-secondary">gönder</button>
                </div>
            </form>
        </div>
    @endguest

@endsection
<style>
    .form {
        width: 100%;
    }

    .arala {
        margin-top: 200px;
    }

    .kac {
        margin-top: 100px;
    }

</style>
