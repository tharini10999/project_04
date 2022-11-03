@extends('layouts.back-end.master')
@section('content')
<div class="row g-12">
    <div class="col-sm-12 col-xl-6">
        <div class="bg-secondary rounded h-100 p-4">
            <h6 class="mb-12">Type</h6>
            <form action="{{ route('Type.update', $id) }}" method="post">
                @csrf
                <div class="mb-12">
                    <label for="defaultFormControlInput" class="form-label">NAME</label>
                    <input type="text" class="form-control" name="name" value="{{ $item->name }}"
                    placeholder="ชื่อประเภท" >
                    <div id="defaultFormControlHelp" class="form-text">
                    </div>
                    <div class="mb-3 form-check">
                    </div>
                 </div>
                <input type="submit" value="บันทึก" class="btn btn-primary"></button>
                <a href="{{route('Type.index')}}" class="btn btn-primary">ย้อนกลับ</a>
            </form>
        </div>
    </div>
<!-- Content End -->


<!-- Back to Top -->
</div>
@endsection
