<table id="example" class="table table-striped mt-3 table-hover w-100">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Kode</th>
      <th>Nama</th>
      <th>Bobot</th>
      <th>Jenis</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody id="tableBody">
    @foreach ($criteria as $criterion)
    <tr>
      <td>{{$criterion->id}}</td>
      <td>C{{$loop->iteration}}</td>
      <td>{{$criterion->name}}</td>
      <td>{{$criterion->weight}}</td>
      <td>{{$criterion->benefited == 1 ? 'Benefit' : 'Cost'}}</td>
      <td>
        <div class="btn-wrapper d-flex gap-2">
          <a href="#" data-id="{{$criterion->id}}" data-name="{{$criterion->name}}" data-weight="{{$criterion->weight}}"
            data-benefited="{{$criterion->benefited}}" class="btn btn-warning text-white btn-sm edit btn-action">
            <i class="bx bx-edit"></i>
          </a>
          <a href="#" class="btn btn-danger text-white btn-sm delete btn-action" data-name="{{$criterion->name}}"
            data-id="{{$criterion->id}}">
            <i class="bx bx-trash"></i>
          </a>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
