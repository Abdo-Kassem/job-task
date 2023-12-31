@extends('Admin.layouts.master')

@section('pageTitle') 
    <i class="fa fa-plus-circle"></i> الموظفين
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title"> معلومات الموظف</h3>

            <!-- Start Button  -->
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-white btn-info" href="{{ route('employees.edit' , $employee->id) }}">
                <i class="fas fa-pencil-alt"></i> تعديل</a>
            </div>

            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-white btn-warning" href="{{ route('employees.index') }}">
                <i class="fas fa-reply"></i> رجوع</a>
            </div>
            
        </div>

        <div class="box-body">
                
            <form id="myForm" action="" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}


                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <!-- <label for="exampleInpu style="color:#337ab7"tFile"><b>{{ trans('backend.image') }}</b></label> -->
                            <div class="imagePreview">
                                <img style="width:100%;height:300px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset($employee->avatar) }}" alt="">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-8">
                        
                        <!-- Main Info  -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>الاسم</b></label>
                                    <h4 style="margin:0">{{ $employee->name }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>البريد الالكتروني</b></label>
                                    <h4 style="margin:0">{{ $employee->email }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>رقم التلفون</b></label>
                                    <h4 style="margin:0">{{ $employee->phone }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>العنوان</b></label>
                                <h4 style="margin:0">{{ $employee->address }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>عنوان الوظيفه</b></label>
                                <h4 style="margin:0">{{ $employee->job_title }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>المستوى التعليمي</b></label>
                                <h4 style="margin:0">{{ $employee->education }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>الجنسيه</b></label>
                                <h4 style="margin:0">{{ $employee->nationality }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>النوع</b></label>
                                <h4 style="margin:0">{{ $employee->gender == 1 ? 'ذكر' : 'انثى' }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>المرتب</b></label>
                                <h4 style="margin:0">{{ $employee->salary }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>تاريخ الميلاد</b></label>
                                <h4 style="margin:0">{{ $employee->birth_date }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>تاريخ بداية العمل</b></label>
                                <h4 style="margin:0">{{ $employee->start_date }}</h4>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>تاريخ نهاية العمل</b></label>
                                <h4 style="margin:0">{{ $employee->end_date }}</h4>
                                </div>
                            </div>
                            
                        </div>

                        <hr>

                        <!-- Datetime info -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>تاريخ الانشاء</b></label>
                                    <h4 style="margin:0">
                                        <p>{{ $employee->created_at->format('Y-m-d') }}</p>
                                        <p>{{ $employee->created_at->format('h:i A') }}</p>
                                    </h4>
                                </div>
                            </div>
			                <div class="col-md-6">
                                <div class="form-group">
                                    <label for="first_name" style="color:#337ab7"><b>تاريخ التحديث</b></label>
                                    <h4 style="margin:0">
                                        <p>{{ $employee->updated_at->format('Y-m-d') }}</p>
                                        <p>{{ $employee->updated_at->format('h:i A') }}</p>
                                    </h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                
            </form>
                    
        </div>   

    </div>

@endsection

