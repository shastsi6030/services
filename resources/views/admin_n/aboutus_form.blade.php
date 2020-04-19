@extends('admin_n.dashboard')
@section('content')
    @include("admin_n.fragments.errors")
    <div class="box box-info">
        <div class="box-header">
            <h3 class="box-title">ویرایش درباره ما

            </h3>
            <!-- tools box -->
            <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
            <!-- /. tools -->
        </div>
        <!-- /.box-header -->
        <div class="box-body pad">
            <form action="{{url("app/cmsadmin/admin/aboutus/$about_us->id")}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($about_us->id)
                    {{method_field("PUT")}}
                @endif
                <label>عنوان</label>
                <input class="form-control input-lg" name="head" type="text" placeholder="عنوان" value="{{$about_us->head ?? old("head")}}">
                <br>
                <label>متن عنوان</label>
                <input class="form-control input-lg" name="head_text" type="text" placeholder="متن عنوان" value="{{$about_us->head_text ?? old("head_text")}}">
                <br>
                <label>متن قرمز</label>
                <input class="form-control input-lg" name="red_text" type="text" placeholder="متن قرمز" value="{{$about_us->red_text ?? old("head_text")}}">
                <br>
                <label>نام دکمه</label>
                <input class="form-control input-lg" name="btn_name" type="text" placeholder="نام دکمه" value="{{ $about_us->btn_name ?? old("btn_name")}}">
                <br>
                <label>لینک</label>
                <input class="form-control input-lg" name="btn_link" type="text" placeholder="لینک" value="{{ $about_us->btn_link ?? old("btn_link")}}">
                <br>


                <br/><br/><br/>
                <label>متن</label>
                <textarea  id="mytextarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" name="text" rows="10" cols="80">{{ $about_us->text ?? old("text")}}</textarea>

                <br>

                <div class="form-group">
                    <label for="exampleInputFile">تصویر</label>
                    <input name="main_image" type="file" value="{{ $about_us->main_image ?? old("main_image")}}" id="exampleInputFile">

                    <p class="help-block">متن راهنما</p>
                </div>


                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">ارسال</button>
                </div>

            </form>
        </div>
    </div>

@endsection
