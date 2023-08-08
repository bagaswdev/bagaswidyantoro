@extends('layouts.backend')

@section('title', 'Dashboard')


@section('content')

<div class="col-md-12 col-lg-12">

    {{-- session info --}}

    @if(Session::has('success'))
    <script>
        // Tambahkan skrip SweetAlert ke dalam event window.onload untuk memastikan halaman sepenuhnya dimuat sebelum SweetAlert ditampilkan
        window.onload = function() {
            Swal.fire({
                title: 'Selamat',
                text: '{{ Session::get('success') }}',
                icon: 'success',
                customClass: {
                    confirmButton: 'btn btn-primary waves-effect waves-light'
                },
                buttonsStyling: false
            });
        }
    </script>
    @endif

    {{-- /session info --}}

    <div class="card">
        <div class="d-flex align-items-end row">
            <div class="col-md-6 order-2 order-md-1">
                <div class="card-body my-4">
                    {{-- <h4 class="card-title pb-xl-2">Selamat Datang <strong> {{ Auth::user()->name }}</strong>🎉</h4>
                    --}}
                    <p>Motivasi terbesar saya <span class="fw-semibold">memiliki kemauan untuk terus belajar dan membuat
                            ibu
                            bangga</span>
                    </p>
                    <p>karena keterbatasan waktu dan sedang panik, saya masih belum bisa optimal di praktek ini pak,
                        namun untuk hasil portofolio optimal saya ada di github ya Pak. Terima kasih
                        banyak Pak.</p>
                </div>
            </div>
            <div class="col-md-6 text-center text-md-end order-1 order-md-2">
                <div class="card-body pb-0 px-0 px-md-4 ps-0">
                    <img src="{{ url('backend/assets/img/illustrations/illustration-john-light.png') }}" height="180"
                        alt="View Profile" data-app-light-img="illustrations/illustration-john-light.png"
                        data-app-dark-img="illustrations/illustration-john-dark.png" />
                </div>
            </div>
        </div>
    </div>
    <br>

</div>

@endsection