@extends('admin_n.dashboard')
@section('content')

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">داده ها</h3>
        </div>

        @if(session('message'))
        <div  class="alert alert-success alert-dismissible  show" role="alert">
            <strong style="margin-right: 10px;">   {{session('message')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
@endif


        <!-- /.box-header -->
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>توضیحات </th>
                    <th>نام دکمه</th>
                    <th>لینک</th>
                    <th>تصویر</th>
                    <th>نمایش</th>
                    <th colspan="3">فعالیت</th>
                </tr>
                </thead>
                <tbody>
                @foreach($slider as $key=>$itme)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$itme->title}}
                    </td>
                    <td>{{$itme->description}}</td>
                    <td> {{$itme->btn_name}}</td>
                    <td>{{$itme->btn_link}}</td>
                    <td><img src="{{asset("img/$itme->image")}}" width="190" height="150"/></td>
                    <td class="show-slide" data-show-id="{{$itme->id}}">
                        @if($itme->show)
                            <span class="text-success"><i class="fa fa-check half-x" style="font-size:1.5em;"></i></span>
                            @else
                            <span class="text-danger"><i class="fa fa-times half-x" style="font-size:1.5em;"></i></span>
@endif

                    </td>

                    <td>
                        <a href="{{url("app/cmsadmin/admin/sliders/$itme->id/edit")}}" title="Edit">  <i class="fa fa-edit half-x" style="font-size:1.5em;"></i></a></td>
                    <td>

                        <form id="slider-{{$itme->id}}" class="danger" action="{{url("app/cmsadmin/admin/sliders/$itme->id")}}" method="post" >
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="button" class="btn btn-link" data-id="{{$itme->id}}">
                                <i class="fa fa-trash half-x text-danger" style="font-size:1.5em;"></i>

                            </button>
                        </form>


                    </td>
                    <td class="show" data-show-id="{{$itme->id}}">
                        @if($itme->show)
                            <a onclick="markTask({{$itme->id}})" title=" نمایش" style="cursor: pointer"><i class="fa fa-times-circle text-danger" style="font-size:1.5em;"></i></a>
                        @else
                            <a onclick="markTask({{$itme->id}})" title="عدم نمایش" style="cursor: pointer"><i class="fa fa-check-circle text-success half-x" style="font-size:1.5em;"></i></a>
                        @endif
                    </td>
                </tr>
@endforeach
                </tbody>
                <tfoot>
                <tr>
                    <th>ردیف</th>
                    <th>عنوان</th>
                    <th>توضیحات </th>
                    <th>نام دکمه</th>
                    <th>لینک</th>
                    <th>تصویر</th>
                    <th>نمایش</th>
                    <th colspan="4">فعالیت</th>
                </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>

            </div></div></section>


    @endsection
