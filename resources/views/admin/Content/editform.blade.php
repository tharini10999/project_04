@extends('layouts.back-end.master')

@section('content')

<div class="row g-12">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-12">content</h6>

            <form action="{{route('Content.update',$Content->id)}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-12">

                    <label for="defaultFormControlInput" class="form-label">NAME</label>
                    <input type="text" class="form-control" name="name"  value="{{$Content->name}}"
                         placeholder="กรุณากรอกชื่อสินค้า">

                    <input type="text" class="form-control" name="detail" value="{{$Content->detail}}"
                         placeholder="กรุณากรอกdetail">
                    <div id="defaultFormControlHelp" class="form-text">

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
                            <input
                                class="form-control"
                                type="file"
                                name="image"
                                placeholder="รูปภาพ"
                            />
                        </div>

                </div>
                <div class="mb-3 form-check">
                </div>
                <input type="submit"  value="บันทึก" class="btn btn-primary"></button>
                <a href="{{route('Content.index')}}" class="btn btn-primary">ย้อนกลับ</a>
            </form>
        </div>
    </div>
<!-- Content End -->


<!-- Back to Top -->
</div>
@endsection
