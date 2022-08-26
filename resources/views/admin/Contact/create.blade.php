@extends('layouts.back-end.master')
@section('content')
<div class="row g-4">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-4">Basic Form</h6>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp"
                        placeholder="กรุณากรอกประเภทสินค้า">
                    <div id="emailHelp" class="form-text">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="กรุณากรอกประเภทสินค้า">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="กรุณากรอกประเภทสินค้า">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="กรุณากรอกประเภทสินค้า">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1"
                    placeholder="กรุณากรอกประเภทสินค้า">
                <div class="mb-3 form-check">
                </div>
                <button type="submit" class="btn btn-primary">บันทึก</button>
                <button type="submit" class="btn btn-primary">ย้อนกลับ</button>
            </form>
        </div>
    </div>
<!-- Content End -->


<!-- Back to Top -->
</div>
@endsection