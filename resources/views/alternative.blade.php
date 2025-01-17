@extends('layouts.base')

@section('content')
<div class="breadcrumbs-box mt-2 rounded rounded-2 bg-white p-2">
  <nav
    style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
    aria-label="breadcrumb">
    <ol class="breadcrumb m-0">
      <li class="breadcrumb-item d-flex gap-2 align-items-center"><i class="ri-team-line me-2"></i>Metode Topsis</li>
      <li class="breadcrumb-item active" aria-current="page">Data Alternatif</li>
    </ol>
  </nav>
</div>
<div class="content-box p-3 mt-3 rounded rounded-2 bg-white">
  <div class="content rounded rounded-2 border border-1 p-3">
    <div class="btn-wrapper mt-2">

      {{-- Error Alert --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif

      <div id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-success"><i
          class="ri-add-box-line"></i> Tambah Alternatif</div>
    </div>
    <div class="produk mt-2 mb-2">
      <table id="example" class="table table-striped mt-3 table-hover w-100">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Kode</th>
            <th>Nama</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody id="tableBody">
          @foreach ($alternatives as $alternative)
          <tr>
            <td>{{$alternative->id}}</td>
            <td>A{{$loop->iteration}}</td>
            <td>{{$alternative->name}}</td>
            <td>
              <div class="btn-wrapper d-flex gap-2">
                <a href="#" data-id="{{$alternative->id}}" data-name="{{$alternative->name}}"
                  class="btn btn-warning text-white btn-sm edit btn-action">
                  <i class="bx bx-edit"></i>
                </a>
                <a href="#" class="btn btn-danger text-white btn-sm delete btn-action"
                  data-name="{{$alternative->name}}" data-id="{{$alternative->id}}">
                  <i class="bx bx-trash"></i>
                </a>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@include('modal.alternativeModal')

@endsection

@push('js')
<script type="text/javascript">
  $(document).on('click', '.edit', function (event){
    event.preventDefault();
    var id = $(this).data('id');
    var name = $(this).data('name');
    var weight = $(this).data('weight'); // Jika diperlukan tambahkan data-weight
    var benefited = $(this).data('benefited'); // Jika diperlukan tambahkan data-benefited
    $('#editmodal').modal('show');
    $('#name-edit').val(name);
    $('#edit-id').val(id);
  });

  $(document).on('click', '.delete', function(event){
    event.preventDefault();
    var id = $(this).data('id');
    var name = $(this).data('name');
    $('#deletemodal').modal('show');
    $('#delete-id').val(id);
    $('.alternative-name').html(name);
  });
</script>
@endpush
