@extends('layouts.back-end.master')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="row g-12">
        <div class="col-sm-12 col-xl-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">เมนูสมาชิก</h6>
                <div class="owl-carousel testimonial-carousel">
                    
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="{{asset('back-end/img/4a.png')}}" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">นางสาวธาริณี  สนิทสตรี  </h5>
                        <p>Ms. Tharini  Sanitsatree</p>
                        <p><b>สถานศึกษา:วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์(Pongsawadi Technological College.)</b></p>
                                                <p><b>สาขาวิชา:เทคโนโลยีสารสนเทศ(Information Technology Program .)</b></p>
                                                <p>ระดับชั้น:ปวช.3/4</p><p>เลขที่:22</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="{{asset('back-end/img/2a.png')}}" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">นายปรีติยาธร พงษ์โสภณ</h5>
                        <p>Mr. Preetiyatorn Pongsophon.</p>
                        <p><b>สถานศึกษา:วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์(Pongsawadi Technological College.)</b></p>
                        <p><b>สาขาวิชา:เทคโนโลยีสารสนเทศ(Information Technology Program .)</b></p>
                                                <p>ระดับชั้น:ปวช.3/4</p> <p>เลขที่:28</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="{{asset('back-end/img/3a.png')}}" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">นายภูวนาถ แก้วสังข์</h5>
                        <p>Mr. Poovanat Kaewsung.</p>
                        <p><b>สถานศึกษา:วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์(Pongsawadi Technological College.)</b></p>
                                                <p><b>สาขาวิชา:เทคโนโลยีสารสนเทศ(Information Technology Program .)</b></p>
                                                <p>ระดับชั้น:ปวช.3/4</p><p>เลขที่:29</p>
                    </div>
                    <div class="testimonial-item text-center">
                        <img class="img-fluid rounded-circle mx-auto mb-4" src="{{asset('back-end/img/1a.png')}}" style="width: 100px; height: 100px;">
                        <h5 class="mb-1">นายชัยพร เทียนทิพย์</h5>
                        <p>Mr. Chiyapong  Thantip.</p>
                        <p><b>สถานศึกษา:วิทยาลัยเทคโนโลยีพงษ์สวัสดิ์(Pongsawadi Technological College.)</b></p>
                        <p><b>สาขาวิชา:เทคโนโลยีสารสนเทศ(Information Technology Program .)</b></p>
                        <p>ระดับชั้น:ปวช.3/4</p><p>เลขที่:01</p>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>
@endsection