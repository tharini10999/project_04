@extends('layouts.back-end.master')

@section('content')

    <div class="row g-12">
        <div class="col-sm-12 col-xl-6">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-12">content</h6>

                <form action="{{ route('Content.insert') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="mb-12">

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">กรุณากรอกชื่อสินค้า</label>
                            <input type="text" class="form-control" name="name" placeholder="กรุณากรอกชื่อสินค้า">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">กรุณากรอกชื่อวิทยาศาสตร์</label>
                            <input type="text" class="form-control" name="detail" placeholder="กรุณากรอกชื่อวิทยาศาสตร์">
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">รูปภาพ</label>
                            <input
                                class="form-control"
                                type="file"
                                name="image"
                                placeholder="รูปภาพ"
                                required
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
