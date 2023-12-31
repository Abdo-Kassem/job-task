@extends('Admin.layouts.master')

@section('pageTitle') 
    <i class="fa fa-plus-circle"></i> تعديل بيانات الموظف 
@endsection

@section('content')

    <div class="box">

        <div class="box-header with-border">
            <h3 class="box-title">ادخل المعلومات</h3>

            <!-- Start Button  -->
            <div class="button-page-header" style="margin-top:5px">
                <a class="btn btn-block btn-warning" href="{{ route('employees.index') }}" style='color:white'>
                    <i class="fa fa-reply fa-fw fa-lg" ></i> رجوع
                </a>
            </div>
            
        </div>

        <div class="box-body">
                
            <form id="myForm" action="{{ route('employees.update',$employee->id) }}" method="POST" class="userForm" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('put') }}

                <!-- Start Row  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><b>الاسم</b></label>
                            <input type="text" name="name" id="name" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" value="{{ old('name',$employee->name) }}">
                            @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name"><b>الايميل</b></label>
                            <input type="email" name="email" id="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email',$employee->email) }}">
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone"><b>رقم التلفون</b></label>
                            <input type="number" name="phone" id="phone" class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone',$employee->phone) }}">
                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address"><b>العنوان</b></label>
                            <input type="text" name="address" id="address" class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" value="{{ old('address',$employee->address) }}">
                            @if ($errors->has('address'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('address') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="job_title"><b>عنوان الوظيفه</b></label>
                            <input type="text" name="job_title" id="job_title" class="form-control {{ $errors->has('job_title') ? 'is-invalid' : '' }}" value="{{ old('job_title',$employee->job_title) }}">
                            @if ($errors->has('job_title'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('job_title') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="education"><b>المستوى التعليمي</b></label>
                            <input type="text" name="education" id="education" class="form-control {{ $errors->has('education') ? 'is-invalid' : '' }}" value="{{ old('education',$employee->education) }}">
                            @if ($errors->has('education'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('education') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nationality"><b>الجنسيه</b></label>
                            <select name="nationality" id="nationality" class="form-control">
                                <option value=''>لو سمحت اختر الجنسيه</option>
                                @foreach($nationalities as $nationality)
                                <option value="{{ $nationality }}" {{ $employee->nationality == $nationality ? 'selected' : '' }}>{{ $nationality }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('nationality'))
                                <span class="invalid-feedback" role="alert" style='display:block'>
                                    <strong>{{ $errors->first('nationality') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="gender"><b>النوع</b></label>
                            <select name="gender" id="gender" class="form-control">
                                <option value=''>لو سمحت اختر النوع</option>   
                                <option value="1" {{ $employee->gender == 1 ? 'selected' : '' }}>ذكر</option>
                                <option value="0" {{ $employee->gender == 0 ? 'selected' : '' }} >انثى</option>
                            </select>
                            @if ($errors->has('gender'))
                                <span class="invalid-feedback" role="alert" style='display:block'>
                                    <strong>{{ $errors->first('gender') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="salary"><b>المرتب</b></label>
                            <input type="number" name="salary" id="salary" class="form-control {{ $errors->has('salary') ? 'is-invalid' : '' }}" value="{{ old('salary',$employee->salary) }}">
                            @if ($errors->has('salary'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('salary') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="birth_date"><b>تاريخ الميلاد</b></label>
                            <input type="date" name="birth_date" id="birth_date" class="form-control {{ $errors->has('birth_date') ? 'is-invalid' : '' }}" value="{{ old('birth_date',$employee->birth_date) }}">
                            @if ($errors->has('birth_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('birth_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="start_date"><b>تاريخ بداية العمل</b></label>
                            <input type="date" name="start_date" id="start_date" class="form-control {{ $errors->has('start_date') ? 'is-invalid' : '' }}" value="{{ old('start_date',$employee->start_date) }}">
                            @if ($errors->has('start_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('start_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="end_date"><b>تاريخ نهاية العمل</b></label>
                            <input type="date" name="end_date" id="end_date" class="form-control {{ $errors->has('end_date') ? 'is-invalid' : '' }}" value="{{ old('end_date',$employee->end_date) }}">
                            @if ($errors->has('end_date'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('end_date') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="row">
                    
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="exampleInputFile"><b>الصوره</b></label>
                            <input type="file" name="avatar" id="exampleInputFile" style="padding: 10px;height:45px" class="form-control image {{ $errors->has('avatar') ? 'is-invalid' : '' }}">
                            @if ($errors->has('avatar'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('avatar') }}</strong>
                                </span>
                            @endif
                            <div class="imagePreview">
                                <img style="width:250px;height:200px;margin-top:5px;object-fit:contain" class="image-preview img-thumbnail" src="{{ asset($employee->avatar) }}" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="text-center" style="margin-top:30px">
                            <button type="submit" class="btn btn-primary btn-block w-100" style="font-size:16px"><i class="fa fa-check fa-fw fa-lg"></i>تحديث</button>
                        </div>
                    </div>
                    
                </div>
                <!-- End Row  -->

                
            </form>
                    
        </div>    

    </div>

@endsection
