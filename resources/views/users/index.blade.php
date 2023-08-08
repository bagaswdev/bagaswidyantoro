@extends('layouts.backend')

@section('title', 'Kelurahan')

@section('content')

<!-- Responsive Datatable -->
<div class="col-md-12 col-lg-12">

    <h3 class="fw-bold py-3 mb-3">
        <span>Data Users</span>
    </h3>

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

    <!-- Bordered Table -->
    <div class="card">
        <div class="card-body">
            {{-- @if (auth()->user()->level == 'SUPERADMIN')
            <div class="d-flex justify-content-end">
                <a href="{{ route('be.kelurahan.create') }}"
                    class="btn btn-primary waves-effect waves-light col-3 mb-4">
                    <span class="tf-icons mdi mdi-plus-box-multiple me-1"></span>Tambah Kelurahan
                </a>
            </div>
            @endif --}}

            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="tabelku">
                    <thead>
                        <tr>
                            {{-- <th style="width: 1%">No</th> --}}
                            <th>Nama</th>
                            <th>Users</th>
                            <th style="width: 2%">Aksi</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <!--/ Bordered Table -->
</div>
<!--/ Responsive Datatable -->

<!-- Elemen Modal -->
<div class="modal fade" id="modalSelengkapnya" data-bs-backdrop="static" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header mb-3">
                <h4 class="modal-title" id="backDropModalTitle">Data Lengkap Users</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <dl class="row mb-0">
                    <dt class="col-sm-4 mb-3 text-nowrap fw-semibold text-heading">Nama</dt>
                    <dd class="col-sm-1">:</dd>
                    <dd class="col-sm-7 nama"></dd>

                    <dt class="col-sm-4 mb-3 text-nowrap fw-semibold text-heading">Usia</dt>
                    <dd class="col-sm-1">:</dd>
                    <dd class="col-sm-7 usia"></dd>

                    <dt class="col-sm-4 mb-3 text-nowrap fw-semibold text-heading">Kota</dt>
                    <dd class="col-sm-1">:</dd>
                    <dd class="col-sm-7 kota"></dd>

                </dl>
            </div>
            <div class="modal-footer">


                <a href="" class="edit-ajax btn btn-sm btn-primary btn-block waves-effect waves-light">
                    <span class="tf-icons mdi mdi-circle-edit-outline me-1"></span>EDIT
                </a>

                <form class="form-hapus hapus-ajax" action="" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger waves-effect waves-light konfirmasi-hapus">
                        <span class="tf-icons mdi mdi-trash-can-outline me-1"></span>HAPUS
                    </button>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection


@section('script')
<script>
    var datatables = $('#tabelku').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{  route('be.datatables.users')   }}',
          columns: [
              { data: 'nama', name: 'nama' },
              { data: 'usia', name: 'usia' },
              { data: 'kota', name: 'kota' },
              { data: 'action', name: 'action' },
          ]
        });
      // Tangani klik pada tombol "Selengkapnya"
      $('#tabelku').on('click', '.btn-label-primary', function() {
          var url = $(this).data('url');
          // Simpan ID yang sesuai ke dalam modal Bootstrap
          $('#modalSelengkapnya').data('url', url);
      });

      // Tangani event shown.bs.modal
      $('#modalSelengkapnya').on('shown.bs.modal', function() {
        var url = $(this).data('url');
        // Lakukan permintaan AJAX ke endpoint yang mengembalikan data berdasarkan ID
        $.ajax({
            url: url,
            type: 'GET',
            success: function(response) {
                // Tampilkan data di dalam modal sesuai dengan struktur HTML yang diinginkan
                $('.nama').text(response.nama);
                $('.usia').text(response.usia);
                $('.kota').text(response.kota);
                
                // Mengisi atribut href pada elemen dengan kelas .edit-ajax
                var encryptedId = response.encryptedId;
                var editUrl = "{{ route('users.edit', ['id' => ':id']) }}";
                editUrl = editUrl.replace(':id', encryptedId);
                $('.edit-ajax').attr('href', editUrl);
                
                // Mengisi atribut action pada elemen dengan kelas .hapus-ajax
                var deleteUrl = "{{ route('users.destroy', ['id' => ':id']) }}";
                deleteUrl = deleteUrl.replace(':id', encryptedId);
                $('.hapus-ajax').attr('action', deleteUrl);
                
            },
            error: function(xhr) {
                // Tangani kesalahan jika terjadi
                // console.log(xhr.responseText);
            }
        });

    });
</script>
@endsection