@extends('layouts.back-end.master')

@section('content')

    <div class="row g-12">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-12">Menu</h6>

                <form action="{{ route('Menu.update', $id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="mb-12">

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">เลือกประเภท</label>
                            <select name="id_type" class="form-control">
                                <option value="{{ $manu->type->id }}">{{ $manu->type->name }}</option>
                                @foreach ($type as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
                            <input
                                class="form-control"
                                type="file"
                                name="image"
                                placeholder="รูปภาพ"
                            />
                        </div>

                        <input type="text" class="form-control" name="name" value="{{$manu->name}}" >

                        <input type="text" class="form-control" name="price"
                                value="{{$manu->price}}">

                        <div id="defaultFormControlHelp" class="form-text">
                        <input type="text" class="form-control" name="detail" value="{{ $manu->detail }}">
                        <div id="defaultFormControlHelp" class="form-text">

                    </div>
                    <div class="mb-3 form-check">
                    </div>
                    <input type="submit"  value="บันทึก" class="btn btn-primary"></button>
                    <a href="{{route('Menu.index')}}" class="btn btn-primary">ย้อนกลับ</a>
                </form>
            </div>
        </div>
    <!-- Content End -->


    <!-- Back to Top -->
    </div>

@endsection
