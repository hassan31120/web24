@extends('admin.layouts.main')
@section('dash')
الأسئلة
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3 row">
                        <div class="col-6">
                            <h5 class="text-white text-capitalize ps-3" style="margin-right: 10px">إضافة سؤال جديد</h5>
                        </div>
                        <div class="col-6" style="position: relative;"><a href="{{ route('admin.questions') }}"
                                style="position: absolute; left: 2%" class="btn btn-primary">عرض الأسئلة</a></div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <div class=" container-fluid">
                            <!--form section-->
                            <section class="vh-100 gradient-custom sectionFormDIR">
                                <div class="container py-5 h-100">
                                    <div class="row justify-content-center align-items-center h-100">
                                        <div class="col-12 col-lg-9 col-xl-7">
                                            <div class="card shadow-2-strong card-registration"
                                                style="border-radius: 15px;">
                                                <div class="card-body p-4 p-md-5">
                                                    <form action="{{ route('admin.question.update', $question->id) }}" method="POST" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="question"
                                                                        style="font-size: 18px">السؤال</label>
                                                                    <input type="text" name="question" id="question"
                                                                        class="form-control form-control-lg formborderCSS" required value="{{ $question->question }}" />
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12 mb-4">
                                                                <div class="form-outline">
                                                                    <label class="form-label" for="answer"
                                                                        style="font-size: 18px">الإجابة</label>
                                                                    <textarea name="answer" id="answer" cols="30" rows="5"
                                                                        class="form-control form-control-lg formborderCSS" required> {{ $question->answer }} </textarea>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="mt-4 pt-2 text-center">
                                                            <input class="btn btn-primary btn-lg" type="submit"
                                                                value="تعديل" />
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--endform section-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
