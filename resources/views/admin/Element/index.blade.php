@extends('layouts.back-end.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-12">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">เมนูสมาชิก</h6>
                <a href="create_product.html" class="btn btn-success mx-3"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
                <div class="owl-carousel testimonial-carousel">
                    
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/4a.png" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/1a.png" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/2a.png" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="img/3a.png" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">Client Name</h5>
                        <p>Profession</p>
                        <p class="mb-0">Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection