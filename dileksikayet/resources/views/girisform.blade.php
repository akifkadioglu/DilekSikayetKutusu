@extends('partials.master')


@section('content')


    <div class="container arala">
        <div class="ortala mb-4">
            <div class="baslik">HOCA</div> Giriş
        </div>
        <form action="{{ route('giris') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6 bosluk"><input type="text" class="form-control" name="username"
                        placeholder="Kullanıcı Adı" required></div>
                <div class="col-sm-6 bosluk"><input type="password" class="form-control" name="password" placeholder="Şifre"
                        required></div>

                <div style="width: 100%" class="butonyer"><button class="btn btn-outline-secondary">Giriş Yap</button>
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
