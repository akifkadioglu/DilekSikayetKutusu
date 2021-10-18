@extends('partials.master')


@section('content')


    <div class="container arala">
        <div class="ortala mb-4">
            <div class="baslik">Düzenle</div> Dilek Şikayet
        </div>
        <form action="{{ route('duzenle', $data->id) }}" method="post">
            @csrf
            <div class="row">
                <div class="p-4 m-3">
                    <div style="color: red;text-transform: uppercase;">
                        {{ $data->subject }}
                    </div>
                    <div>
                        {{ $data->address }}
                    </div>
                    <div>
                        {{ $data->text }}
                    </div>
                </div>
                <div class="col-sm-6 bosluk"><input type="text" maxlength="255" class="form-control" name="note" placeholder="Notunuz"
                        value="{{ $data->note }} "></div>
                <div class="col-sm-6 bosluk">
                    <select class="form-control" name="statu" id="">
                        <option value="0">Ayarlamadım</option>
                        <option value="1">Ayarladım</option>
                    </select>
                </div>

                <div style="width: 100%" class="butonyer"><button class="btn btn-outline-secondary">Düzenle</button>
                </div>
            </div>
        </form>
    </div>

@endsection


{{-- ############################################################ css ############################################################ --}}

<style>
    .arala {
        padding-top: 150px;
        padding-bottom: 150px;
    }

    .ortala {
        text-align: center;
    }

    .bosluk {
        padding-bottom: 15px;
    }

    .butonyer {
        text-align: end;
        width: 100%;
    }



    .baslik {
        font-weight: bolder;
        font-size: 50px;
    }

</style>
