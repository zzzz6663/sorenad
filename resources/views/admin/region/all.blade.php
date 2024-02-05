@extends('master.admin')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title"> منطقه ها
                                ({{ $regions->total() }})
                            </h3>
                            <div class="card-tools">
                             <a href="{{ route("region.create") }}" class="btn btn-primary">منطقه جدید
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
                                        <th>بازدید کلاس</th>
                                        <th>بازدید مدرسه</th>
                                        <th>وضعیت </th>
                                        <th>بیشتر</th>
                                    </tr>
                                    @foreach ($regions  as $region )
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $region->name }}
                                        </td>
                                        <td>
                                            {{ $region->visits->count() }}
                                        </td>

                                        <td>
                                            {{ $region->looks->count() }}
                                        </td>
                                        <td>
                                          <span class="alert alert-{{ $region->deleted_at?"danger":"success" }}">
                                          <i class="ti {{ $region->deleted_at?" ti-square-rounded-x-filled":"ti-checks" }}"></i>
                                        </span>
                                        </td>
                                        {{--  <td>
                                           {{ \Morilog\Jalali\Jalalian::forge($region->created_at) }}
                                        </td>  --}}

                                        <td>

                                            <div class="dropdown">
                                                <button class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown" type="button" aria-expanded="false">
                                                    <i class="ti ti-dots-vertical"></i>
                                                </button>
                                                <div class="dropdown-menu" style="">

                                                    @if($region->deleted_at)
                                                    <a class="dropdown-item" href="{{ route("active.region",$region->id) }}">
                                                        <i class="ti ti-activity"></i>
                                                        فعال
                                                    </a>
                                                    @else
                                                    <a class="dropdown-item" href="{{ route('region.edit',$region->id) }}">
                                                        <i class="ti ti-pencil me-1"></i>
                                                        ویرایش
                                                    </a>
                                                    <form action="{{ route("region.destroy",$region->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button class="dropdown-item" >
                                                            <i class="ti ti-trash me-1"></i>
                                                            حذف
                                                        </button>
                                                    </form>
                                                    @endif

                                                </div>
                                            </div>
                                            {{--  <a href="{{ route('region.show',$region->id) }}" class="btn btn-primary">بیشتر</a>  --}}
                                        </td>
                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <div class="pagi">
                                {{ $regions->appends(Request::all())->links('admin.section.pagination') }}
                            </div>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
@endsection



