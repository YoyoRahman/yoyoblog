@extends('admin.layouts.master')
@section('title', 'نمایش دسته بندی - یویو بلاگ')

@section('content')
    <main class="app-main">
        <div class="app-content-header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="mb-0">نمایش دسته بندی</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-content">
            <div class="container-fluid">
                <div class="card mb-4">
                    <div class="card-header">
                        <h4 class="card-title">نمایش دسته بندی ؟؟؟ </h4>
                    </div>
                    <div class="card-body">
                        <table class= "table table-bordered table-light">
                            <tr>
                                <th style="width: 15%">عنوان دسته بندی</th>
                                <td>تلفن همراه</td>

                            </tr>
                            <tr>
                                <th style="width: 15%">دسته بندی والد</th>
                                <td>محصولات دیجیتال</td>

                            </tr>
                            <tr>
                                <th style="width: 15%">توضیحات </th>
                                <td>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                    است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                    فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                    زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                    نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو
                                    در زبان فارسی ایجاد کرد</td>

                            </tr>
                            <tr>
                                <th style="width: 15%">تاریخ ایجاد</th>
                                <td>1404/05/10</td>

                            </tr>
                            <tr>
                                <th style="width: 15%">تاریخ ویرایش</th>
                                <td>1404/05/12</td>

                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-outline-secondary">
                        <i class="bi bi-chevron-left me-2"></i>بازگشت
                    </a>
                </div>
            </div>
        </div>
        </div>
    </main>
@endsection
