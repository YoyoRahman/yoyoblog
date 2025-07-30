@extends('admin.layouts.master')

@section('title', ' دسته بندی ها -یویو بلاگ')

@section('content')

    <main class="app-main"> <!--begin::App Content Header-->
        <div class="app-content-header"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">دسته بندی ها</h3>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                دسته بندی ها
                            </li>
                        </ol>
                    </div>
                </div> <!--end::Row-->
            </div> <!--end::Container-->
        </div> <!--end::App Content Header--> <!--begin::App Content-->
        <div class="app-content"> <!--begin::Container-->
            <div class="container-fluid"> <!--begin::Row-->
                <div class="row">

                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="card-tools">
                                <a href="{{ route('admin.category.create') }}" class="btn btn-success">
                                    <i class="bi bi-plus"></i>
                                    افزودن
                                </a>
                            </div>
                        </div> <!-- /.card-header -->
                        <div class="card-body px-0">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th style="width: 5%">#</th>
                                        <th>عنوان </th>
                                        <th>والد</th>
                                        <th width="18%">عملیات</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>مقالات عملی</td>
                                        <td>منوی اصلی</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i
                                                    class="bi bi-eye-fill text-white"></i></a>
                                            <a href="#" class="btn btn-warning">
                                                <i class="bi bi-pencil-fill text-white"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger" onclick="deleteItem(this)"
                                                data-url="#" data-title="" data-token="{{ csrf_token() }}"><i
                                                    class="bi bi-trash text-white"></i></button>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>مقالات عملی</td>
                                        <td>منوی اصلی</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i
                                                    class="bi bi-eye-fill text-white"></i></a>
                                            <a href="#" class="btn btn-warning">
                                                <i class="bi bi-pencil-fill text-white"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger" onclick="deleteItem(this)"
                                                data-url="#" data-title="" data-token="{{ csrf_token() }}"><i
                                                    class="bi bi-trash text-white"></i></>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>مقالات عملی</td>
                                        <td>منوی اصلی</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i
                                                    class="bi bi-eye-fill text-white"></i></a>
                                            <a href="#" class="btn btn-warning"><i
                                                    class="bi bi-pencil-fill text-white"></i></a>
                                            <button type="button" class="btn btn-danger" onclick="deleteItem(this)"
                                                data-url="#" data-title="" data-token="{{ csrf_token() }}"><i
                                                    class="bi bi-trash text-white"></i></>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td>1.</td>
                                        <td>مقالات عملی</td>
                                        <td>منوی اصلی</td>
                                        <td>
                                            <a href="#" class="btn btn-primary"><i
                                                    class="bi bi-eye-fill text-white"></i></a>
                                            <a href="#" class="btn btn-warning">
                                                <i class="bi bi-pencil-fill text-white"></i>
                                            </a>
                                            <button type="button" class="btn btn-danger" onclick="deleteItem(this)"
                                                data-url="#" data-title="" data-token="{{ csrf_token() }}"><i
                                                    class="bi bi-trash text-white

                                                    "></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!-- /.card-body -->
                        <div class="card-footer">

                            <ul class="pagination pagination float-end">
                                <li class="page-item"> <a class="page-link" href="#">&laquo;</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">1</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">2</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">3</a> </li>
                                <li class="page-item"> <a class="page-link" href="#">&raquo;</a> </li>
                            </ul>
                        </div>
                    </div> <!-- /.card -->
                </div> <!-- /.col -->
            </div> <!--end::Row-->
        </div> <!--end::Container-->
        </div> <!--end::App Content-->
    </main> <!--end::App Main--> <!--begin::Footer-->
@endsection
