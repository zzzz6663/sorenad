@extends('master.site')
{{-- @section('header')
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1> لیست کاربران</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  @endsection  --}}
@section('content')
<div class="card-header d-flex justify-content-between">
    <h2 class="title_right">دسته بندی آگهی</h2>
    <div >
        <a href="{{ route("cat.create") }}" class="btn btn-success">دسته بندی جدید</a>
    </div>
</div>
<br>
<div id="">
    <div class="flex dashbord_table admin_dashboard_table_xs">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>عنوان</th>
                    <th>وضعیت </th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($cats as $cat )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $cat->name }}
                    </td>
                    <td>
                        <span class="text tooltiper text-{{ $cat->active?"success":"danger" }} " title="کاب {{ $cat->active?"فعال":"غیر فعال" }}">
                            <i class="fa-solid tooltiper
                                 {{ $cat->active?"fa-badge-check":"fa-circle-xmark" }} ">
                                </i>
                        </span>
                    </td>
                    <td>{{ jdate($cat->created_at)->format("Y-m-d") }}</td>
                    <td>
                        <a href="{{ route("cat.edit",$cat->id) }}" class="btn btn-success">
                            <i class="fa-solid fa-pen"></i>
                        </a>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>
    </div>

</div>
@endsection
