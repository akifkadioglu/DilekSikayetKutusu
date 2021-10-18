@auth
    <nav class="footer bg-dark">
        <div class="ortala">
            <a style="text-decoration:none; color:white;" href="{{ route('cikis') }} ">Çık</a>
        </div>
    </nav>
@endauth
@guest
    <nav class="footer">
        <div class="ortala text-light">
            <a style="color: white; text-decoration:none;" href="{{ route('hocagiris') }} ">Giriş</a>
        </div>
    </nav>
@endguest
<style>
    .footer {
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 50px;
        padding-top: 10px;
    }

    .ortala {
        text-align: center;
    }

</style>
