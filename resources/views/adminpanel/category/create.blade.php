@extends('adminpanel.layouts.master')

@section('head-tag')
<title>دسته بندی جدید</title>

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <form>
            <div class="content p-3">
        <span class="page-title">دسته جدید</span>
        <hr>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="mb-3">
                  <label for="category_name" class="form-label">نام دسته</label>
                  <input type="text" name="category_name" class="form-control" id="category_name" placeholder="عنوان دسته جدید">
                </div>
            </div>
            <div class="col-12 col-md-6">
            <label for="category_parent" class="form-label">دسته والد </label>
            <select id="category_parent" class="form-select" aria-label="Default select example">
                <option selected>بدون والد</option>
                 <option value="1">One</option>
                 <option value="2">Two</option>
                 <option value="3">Three</option>
            </select>
            </div>
            </div>
            <hr class="mt-3">
            <button class="btn btn-success ms-1">ذخیره</button>
            <a href="#" class="btn btn-secondary">انصراف</a>
        </div>
        </div>
    </div>
</div>

@endsection
