@extends('layout.master', [
    'page_title' => 'Sửa thông tin danh mục sản phẩm | Seafashion Admin Page',
    'current_menu' => 'collection_manager',
    'current_sub_menu' => 'edit',
])
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">edit</i>
                </div>
                <div class="card-content">
                    <h4 class="card-title">SỬA DANH MỤC SẢN PHẨM</h4>
                    @if ($errors->any())
                        <div class="alert alert-rose">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    <form method="post" action="/admin/collection/{{$obj->id}}" class="form-horizontal">
                        @method('PUT')
                        {{csrf_field()}}
                        <div class="card-content">
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Tên</label>
                                <div class="col-sm-4">
                                    <div class="form-group label-floating is-empty{{$errors->has('name')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="name" class="form-control{{$errors->has('name')?' error':''}}" value="{{$obj->name}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Mô tả</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('description')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="description" class="form-control{{$errors->has('description')?' error':''}}" value="{{$obj->description}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-sm-2 label-on-left">Ảnh đại diện</label>
                                <div class="col-sm-8">
                                    <div class="form-group label-floating is-empty{{$errors->has('thumbnail')?' has-error':''}}">
                                        <label class="control-label"></label>
                                        <input type="text" name="thumbnail" class="form-control{{$errors->has('thumbnail')?' error':''}}" value="{{$obj->thumbnail}}">
                                        <span class="material-input"></span></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-10">
                                    <button type="submit" value="Submit" class="btn btn-fill btn-success">Lưu
                                        <div class="ripple-container"></div>
                                    </button>
                                    <button type="reset" value="Reset" class="btn btn-fill btn-rose">Làm lại
                                        <div class="ripple-container"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection