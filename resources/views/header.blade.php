{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg px-4 py-3 sticky-top fixed-top shadow-lg bg-secondary">
    <div class="container-fluid">
        <a class="navbar-brand fs-8 mx-2 d-flex align-items-center justify-content-center text-black fw-bold" href="/">
            <img src="https://64.media.tumblr.com/4545a2cb0c84aa134291d68f8d9ed3dd/24cb1a974e617a76-dc/s400x600/9e6598f940f59490445e0245bc9990389e7db4cc.pnj" alt=""
                width="50" style="border-radius:55%;" class="px-2">Forum Aspirasi Masyarakat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mx-auto">
                <a class="nav-link active fs-5 text-black" aria-current="page" href="/">Home</a>
                <a class="nav-link fs-5 text-black" href="/kegiatan-warga">Gallery</a>
                <a class="nav-link fs-5 text-black" href="/history-aspirasi">History Aspirasi</a>
            </div>
            <div class="navbar-nav float-right">
                <a href="{{ route('login') }}" target="_blank" class="d-flex align-items-center text-black"><i
                        class="fa-solid fa-user fa-xl mx-2" style="color: black;"></i>Login</a>
            </div>
        </div>
    </div>
</nav>
{{-- NAVBAR --}}
