@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">Contact</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{route('Contact.create')}}" class="btn btn-success mx-15"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>images</th>
                <th>Price</th>
                <th>Created_at</th>
                <th>Updated_at</th>
            </thead>
            <tbody class="table-border-bottom-0">
              <tr>
              <td>1</td>
              <td>พิทูเนีย</td>
              <td>พิทูเนีย.jpg</td>
              <td>80 บาท</td>
              <td>2022-07-25 12:46:29</td>
              <td>2022-07-25 12:46:29</td>
              <td>
                <a href="#"><i class='bx bxs-edit'></i></a>
                <a href="#"><i class='bx bx-trash'></i></a>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
 
</div>
@endsection