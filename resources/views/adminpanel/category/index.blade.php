@extends('adminpanel.layouts.master')

@section('head-tag')
    <title>لیست دسته ها</title>

    @section('content')
    <div class="container">
    <div class="content p-3">
    <span class="page-title">لیست دسته ها</span>
    <hr>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">نام دسته</th>
      <th scope="col">دسته والد</th>
      <th scope="col">عملیات</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>
        <a href="#" class="btn btn-primary ms-1">ویرایش</a>
        <button type="button" class="btn btn-danger">حذف</button>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>
         <a href="#" class="btn btn-primary ms-1">ویرایش</a>
         <button type="button" class="btn btn-danger">حذف</button>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>
         <a href="#" class="btn btn-primary ms-1">ویرایش</a>
         <button type="button" class="btn btn-danger">حذف</button>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
    @endsection
    