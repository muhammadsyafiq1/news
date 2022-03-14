@extends('layouts.dashboard')

@section('title')
    Tabel kategori
@endsection

@section('content')
<!-- modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form tambah kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="{{route('categories.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Nama Kategori</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- end modal -->


<!-- modal edit -->
<div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{route('edit-kategori')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Nama Kategori</label>
                    <input type="text" name="name" id="name" class="form-control name">
                </div>
            </div>
            <div class="modal-footer">
                <input type="hidden" name="id" class="id" >
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
      </div>
    </div>
</div>
<!-- end modal edit -->

@if(session('status'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-success text-center text-white">
            {{session('status')}}
        </div>
    </div>
</div>
@endif

<div class="row">
    <div class="col-10">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
                    Tambah Kategori
                </button>
                </h5>
                <p>Anda dapat mengatur kategori berita disini.</p>
                <div class="table-container">
                    <table class="table table-bordered" id="table_id">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama Kategori</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach($categories as $category)
                                <tr>
                                    <td>{{$no}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>
                                        <form action="{{route('categories.destroy',$category->id)}}" method="post">
                                            @csrf @method('delete')
                                            <a href="javascript:void()"
                                                data-id="{{$category->id}}"
                                                data-name="{{$category->name}}"
                                                type="button"
                                                class="btn btn-sm  btn-warning button-update"
                                                >
                                                Edit
                                            </a>
                                            <button type="submit" class="btn btn-sm btn-danger " onClick="return confirm('Are you Sure ?')">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @php    
                                $no++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>   
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection


@push('scripts')
    <script>
        $('#table_id').on('click','.button-update', function(){
            let id = $(this).data('id');
            let name = $(this).data('name');
            $('#edit-modal').modal('show');
            $('.name').val(name);
            $('.id').val(id);
        })
    </script>
@endpush