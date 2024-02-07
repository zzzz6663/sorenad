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
    <h2 class="title_right">سوالات متداول</h2>
    <div >
        <a href="{{ route("faq.create") }}" class="btn btn-success">سوال جدید</a>
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
                    <th>محتوا</th>
                    <th>تاریخ</th>
                    <th>عملیات</th>
                </tr>

            </thead>
            <tbody>
                @foreach ($faqs as $faq )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        {{ $faq->title }}
                    </td>
                    <td>{{ $faq->content }}</td>

                    <td>{{ jdate($faq->created_at)->format("Y-m-d") }}</td>
                    <td>
                        <a href="{{ route("faq.edit",$faq->id) }}" class="btn btn-success">
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
