@extends('admin.layouts.master')

@section('head-tag')
    <title>ایجاد پرسش</title>
@endsection

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item font-size-12"> <a href="#">خانه</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">بخش محتوی</a></li>
            <li class="breadcrumb-item font-size-12"> <a href="#">پرسش</a></li>
            <li class="breadcrumb-item active font-size-12" aria-current="page"> ایجاد پرسش</li>
        </ol>
    </nav>

    <section class="row">
        <section class="col-12">
            <section class="main-body-container">
                <section class="main-body-container-header">
                    <h5>ایجاد پرسش</h5>
                </section>
                <section class="d-flex justify-content-between align-items-center mt-4 mb-3 border-bottom pb-2">
                    <a href="{{ route('admin.content.faq.index') }}" class="btn btn-info btn-sm">بازگشت</a>
                </section>

                <section class="">
                    <form action="" method="">
                        <section class="row">
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">پرسش</label>
                                    <input type="text" class="form-control form-control-sm">
                                </div>
                            </section>
                            <section class="col-12">
                                <div class="form-group">
                                    <label for="">پاسخ</label>
                                    <textarea name="body" id="body" rows="6" class="form-control form-control-sm"></textarea>
                                </div>
                            </section>


                        </section>

                        <section class="col-12">
                            <button class="btn btn-primary btn-sm">ثبت</button>
                        </section>
                </section>
                </form>
            </section>
        </section>
    </section>
    </section>
@endsection

@section('script')
    <script src="{{ asset('admin-assets/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('body');
    </script>
@endsection
