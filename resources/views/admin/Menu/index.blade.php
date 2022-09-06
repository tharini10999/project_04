@extends('layouts.back-end.master')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card">
        <h5 class="card-header">เมนูสมาชิก</h5>
        <div class="table-responsive text-nowrap">
            <a href="{{route('Menu.create')}}" class="btn btn-success mx-15"><i class='bx bxs-plus-circle'></i> เพิ่มข้อมูล</a>
          <table class="table mt-4">
            <thead class="table-dark">
              <tr>
                <th>No</th>
                <th>Name</th>
                <th>images</th>
                <th>Price</th>
                <th>Created_at</th>
                <th>Updated_at</th>
              </tr>
            </thead>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>1</td>
            <td>พิทูเนีย</td>
            <td>พิทูเนียe.jpg</td>
            <td>80 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>2</td>
            <td>กล้วยไม้ดิน</td>
            <td>กล้วยไม้ดิน.jpg</td>
            <td>80 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>3</td>
            <td>แพงพวย</td>
            <td>แพงพวย.jpg</td>
            <td>80 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>4</td>
            <td>พระจันทร์ครึ่งซีก</td>
            <td>ระจันทร์ครึ่งซีก.jpg</td>
            <td>90 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>5</td>
            <td>หน้าวัว</td>
            <td>หน้าวัว.jpg</td>
            <td>90 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>6</td>
            <td>คล้าพญาคล้าทอง</td>
            <td>คล้าพญา.jpg</td>
            <td>90 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>7</td>
            <td>หนวดปลาดุกแคระ</td>
            <td>หนวดปลา.jpg</td>
            <td>90 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>8</td>
            <td>เตยด่าง</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>9</td>
            <td>คล้านกยูงรำ-แพน</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>10</td>
            <td>เสน่ห์จันทร์แดง</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>11</td>
            <td>พลูงาช้าง</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>12</td>
            <td>ไทรใบสัก</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>13</td>
            <td>บอนเซล</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>14</td>
            <td>ลิ้นมังกร</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>15</td>
            <td>ยิมโน</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>16</td>
            <td>ถังทอง</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
            <a href="#"><i class='bx bx-trash'></i></a>
            </td>
            <tbody class="table-border-bottom-0">
            <tr>
            <td>17</td>
            <td>กุหลาบหิน</td>
            <td>iphone.jpg</td>
            <td>45,990 บาท</td>
            <td>2022-07-25 12:46:29</td>
            <td>2022-07-25 12:46:29</td>
            <td>
            <a href="create_treemenu.html"><i class='bx bxs-edit'></i></a>
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