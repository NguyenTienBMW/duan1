@extends('admin::layouts.master')

@section('content')
 <div class="page-header">
 <ol class="breadcrumb">
  <li><a href="{{route('admin.home')}}">Trang chủ</a></li>
  <li><a href="{{route('admin.get.list.category')}}">Danh mục</a></li>
  <li class="active">Thêm mới</li>
</ol>
 </div>
  <div class="">
 @include("admin::category.form")
  </div>
    </div>
    <button type="submit" class="btn btn-success">Lưu thông tin</button>
  </form>        
  </div>
@stop