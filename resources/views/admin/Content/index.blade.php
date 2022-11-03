@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">content</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{route('Content.create')}}" class="btn btn-success mx-15"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>Detail</th>
                <th>image</th>
                <th>Created_at</th>
                <th>Updated_at</th>
                <th>Actions</th>
            </thead>
            <tbody class="table-border-bottom-0">
              @foreach ($Content as $item)
              <tr>
                <td>{{ $Content->firstItem()+$loop->index}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->detail}}</td>
                <td>
                    @if(!empty($item->image))
                    <!-- Button -->
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#showImageId{{ $item->id }}">
                        ดูรูปภาพ
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="showImageId{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title text-dark" id="exampleModalLabel">{{ $item->name }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body d-flex justify-content-center">
                                    <img src="{{ asset('Content').'/'.$item->image }}" class="img-thumbnail" alt="#" />
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    <button type="button" class="btn btn-primary btn-sm" disabled>
                        ไม่มีรูปภาพ
                    </button>
                    @endif
                </td>
                <td>{{ $item->image }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                  <a href="{{route('Content.edit',$item->id)}}"><i class='bx bxs-edit'>Edit</i></a>
                  <a href="{{route('Content.delete',$item->id)}}"><i class='bx bx-trash'></i>Delete</a>
                </td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <br>
      {{$Content->links('pagination::bootstrap-5')}}
    </div>

</div>
@endsection
