@extends('master.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">  بازديد از کلاس

                                ({{ $looks->total() }})
                            </h3>
                            <div class="card-tools">
                             <a href="{{ route("look.create") }}" class="btn btn-primary">بازدید جدید
                                <i class="ti ti-plus"></i>
                             </a>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive text-nowrap">
                            <table class="table ">
                                <tbody>
                                    <tr>
                                        <th>Id</th>
                                        <th>نام</th>
                                        <th>نام مدرسه</th>
                                        <th>وضعیت </th>
                                        <th>تاریخ </th>
                                        <th>بیشتر</th>
                                    </tr>
                                    @foreach ($looks  as $look )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>
                                            {{ $look->user->name }}
                                            {{ $look->user->family }}
                                        </td>

                                        <td>

                                            {{ $look->school_name }}

                                        </td>

                                        <td>
                                            {{__("arr.". $look->status) }}
                                        </td>

                                        <td>
                                           {{ \Morilog\Jalali\Jalalian::forge($look->created_at) }}
                                        </td>

                                        <td>

                                            <div class="dropdown">
                                                <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">
                                                    @role("admin|observer")
                                                    @if(!$look->note)
                                                    <a class="dropdown-item" href="{{ route('look.note',$look->id) }}">
                                                        <i class="ti ti-notes"></i>
                                                        ثبت یادداشت
                                                    </a>
                                                    @endif

                                                    @endrole
                                                    @role("admin|inspector")
                                                    <a class="dropdown-item" href="{{ route('look.edit',$look->id) }}">
                                                        <i class="ti ti-pencil me-1"></i>
                                                        ویرایش
                                                    </a>
                                                    @endrole
                                                    <a class="dropdown-item" href="{{ route('look.show',$look->id) }}">
                                                        <i class="ti ti-eye"></i>
                                                        جزئیات
                                                    </a>
                                                    {{--  <form action="{{ route("look.destroy",$look->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" >
                                                            <i class="ti ti-trash me-1"></i>
                                                            حذف
                                                        </button>
                                                    </form>  --}}

                                                </div>
                                            </div>
                                            {{--  <a href="{{ route('look.show',$look->id) }}" class="btn btn-primary">بیشتر</a>  --}}
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <div class="pagi">
                                {{ $looks->appends(Request::all())->links('admin.section.pagination') }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection



