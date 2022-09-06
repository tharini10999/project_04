@extends('layouts.back-end.master')
@section('content')
<div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form action="{{route('Contact.insret')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" name="create" id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="กรุณากรอกประเภทสินค้า">
                    <div id="emailHelp" class="form-text">
                    </div>
                </div>
                </div>
                <input type="submit"  value="บันทึก" class="btn btn-primary"></button>
                <a href="{{route('Contact.index')}}" class="btn btn-primary">ย้อนกลับ</a>
            </form>
        </div>
    </div>
<!-- Content End -->


<!-- Back to Top -->
</div>
@endsection