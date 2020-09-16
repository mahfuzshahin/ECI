@extends('admin.layouts.app-template')
@section('title', 'MPhil Application')
@section('content')
  <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <h4>                         
                <a href="" class="btn btn-primary">Back</a>
            </h4>
            @if(session()->has('FlsMsg'))
                <div class="alert  alert-success alert-dismissible"> 
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {!! session('FlsMsg') !!}
                </div>
            @endif
            <!-- Custom Tabs -->
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active">         
                        <a aria-expanded="true" data-toggle="tab" href="#create-subject"><i class="fa fa-user-plus" aria-hidden="true"></i> Application</a>
                    </li>
                    <!-- <li>
                        <a aria-expanded="false" data-toggle="tab" href="#subject-list"><i class="fa fa-users" aria-hidden="true"></i> Teacher List</a>
                    </li> -->
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="create-subject">
                    <div class="row">
                        <div class="col-md-9">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title"><?= @$heading; ?></h3>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form>
                                    
                                    <div class="box-body">
                                        <div class="row">
                                    
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                                                    <label for="faculty_id">Faculty </label> 
                                                    <input type="text" name="faculty_name" id="faculty_name" class="form-control" value="{{$mphil_app_details->faculty->faculty_name}}" readonly>
                                                    {!! $errors->first('faculty_id','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('department_id') ? 'has-error' : '' }}">
                                                    <label for="department_name">Department</label> 
                                                    <input type="text" name="department_name" id="department_name" class="form-control" value="{{$mphil_app_details->department->department_name}}" readonly>
                                                    {!! $errors->first('department_id','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('full_name') ? 'has-error' : '' }}">
                                                    <label for="name">Researchar's Full Name</label> 
                                                    <input type="text" name="user_name" id="user_name" class="form-control" value="{{$mphil_app_details->user->name}}" readonly>
                                                    {!! $errors->first('user_id','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('father_name') ? 'has-error' : '' }}">
                                                    <label for="father_name">Father's Name</label> 
                                                    <input type="text" name="father_name" id="father_name" class="form-control" value="{{$mphil_app_details->father_name}}" readonly>
                                                    {!! $errors->first('father_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('mother_name') ? 'has-error' : '' }}">
                                                    <label for="mother_name">Mother's Name</label> 
                                                    <input type="text" name="mother_name" id="mother_name" class="form-control" value="{{$mphil_app_details->mother_name}}" readonly>
                                                    {!! $errors->first('mother_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('spouse_name') ? 'has-error' : '' }}">
                                                    <label for="spouse_name">Spouse (If any)</label> 
                                                    <input type="text" name="spouse_name" id="spouse_name" class="form-control" value="{{$mphil_app_details->spouse_name}}" readonly>
                                                    {!! $errors->first('spouse_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>

                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('date_of_birth') ? 'has-error' : '' }}">
                                                    <label for="date_of_birth">Date of Birth</label> 
                                                    <input type="date_of_birth" name="date_of_birth" id="date_of_birth" class="form-control" value="{{$mphil_app_details->date_of_birth}}" readonly>
                                                    {!! $errors->first('date_of_birth','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('nationality') ? 'has-error' : '' }}">
                                                    <label for="nationality">Nationality</label> 
                                                    <input type="text" name="nationality" id="nationality" class="form-control" value="{{$mphil_app_details->nationality}}" readonly>
                                                    {!! $errors->first('nationality','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('occupation') ? 'has-error' : '' }}">
                                                    <label for="occupation">Occupation</label> 
                                                    <input type="text" name="occupation" id="occupation" class="form-control" value="{{$mphil_app_details->occupation}}" readonly>
                                                    {!! $errors->first('occupation','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('office_address') ? 'has-error' : '' }}">
                                                    <label for="office_address">Office Address</label> 
                                                    <input type="text" name="office_address" id="office_address" class="form-control" value="{{$mphil_app_details->office_address}}" readonly>
                                                    {!! $errors->first('office_address','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>SSC Information</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ssc_board') ? 'has-error' : '' }}">
                                                    <label for="phone_number">SSC Board</label> 
                                                    <input type="text" name="ssc_board" id="ssc_board" class="form-control" value="{{$mphil_app_details->ssc_board}}" readonly>
                                                    {!! $errors->first('ssc_board','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('school_name') ? 'has-error' : '' }}">
                                                    <label for="school_name">School Name</label> 
                                                    <input type="text" name="school_name" id="school_name" class="form-control" value="{{$mphil_app_details->school_name}}" readonly>
                                                    {!! $errors->first('school_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ssc_passing_year') ? 'has-error' : '' }}">
                                                    <label for="ssc_passing_year">Education Year</label> 
                                                    <input type="text" name="ssc_passing_year" id="ssc_passing_year" class="form-control" value="{{$mphil_app_details->ssc_passing_year}}" readonly>
                                                    {!! $errors->first('ssc_passing_year','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ssc_result') ? 'has-error' : '' }}">
                                                    <label for="ssc_result">SSC {{ ($mphil_app_details->ssc_grade != NULL) ? 'Grade' : 'Division' }}</label> 
                                                    <input type="text" name="ssc_result" id="ssc_result" class="form-control" value="{{$mphil_app_details->ssc_result}}" readonly>
                                                    {!! $errors->first('ssc_result','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('ssc_subject') ? 'has-error' : '' }}">
                                                    <label for="ssc_subject">Subject</label> 
                                                    <input type="text" name="ssc_subject" id="ssc_subject" class="form-control" value="{{$mphil_app_details->ssc_subject}}" readonly>
                                                    {!! $errors->first('ssc_subject','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ssc_group') ? 'has-error' : '' }}">
                                                    <label for="ssc_group">Group</label> 
                                                    <input type="text" name="ssc_subject" id="ssc_subject" class="form-control" value="{{$mphil_app_details->ssc_group}}" readonly>
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>HSC Information</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('hsc_board') ? 'has-error' : '' }}">
                                                    <label for="hsc_board">HSC Board</label> 
                                                    <input type="text" name="hsc_board" id="hsc_board" class="form-control" value="{{$mphil_app_details->hsc_board}}" readonly>
                                                    {!! $errors->first('hsc_board','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('college_name') ? 'has-error' : '' }}">
                                                    <label for="college_name">College Name</label> 
                                                    <input type="text" name="college_name" id="college_name" class="form-control" value="{{$mphil_app_details->college_name}}" readonly>
                                                    {!! $errors->first('college_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('hsc_passing_year') ? 'has-error' : '' }}">
                                                    <label for="hsc_passing_year">Education Year</label> 
                                                    <input type="text" name="hsc_passing_year" id="hsc_passing_year" class="form-control" value="{{$mphil_app_details->hsc_passing_year}}" readonly>
                                                    {!! $errors->first('hsc_passing_year','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('hsc_result') ? 'has-error' : '' }}">
                                                    <label for="hsc_result">HSC {{ ($mphil_app_details->hsc_grade != NULL) ? 'Grade' : 'Division' }}</label> 
                                                    <input type="text" name="hsc_result" id="hsc_result" class="form-control" value="{{$mphil_app_details->hsc_result}}" readonly>
                                                    {!! $errors->first('hsc_result','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-8">
                                                <div class="form-group {{ $errors->has('phone_number') ? 'has-error' : '' }}">
                                                    <label for="phone_number">Subject</label> 
                                                    <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{$mphil_app_details->date_of_birth}}" readonly>
                                                    {!! $errors->first('phone_number','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('hsc_group') ? 'has-error' : '' }}">
                                                    <label for="hsc_group">Group</label> 
                                                    
                                                    <input type="text" name="hsc_group" id="hsc_group" class="form-control" value="{{$mphil_app_details->hsc_group}}" readonly>
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>Hon's Information</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('hons_university_name') ? 'has-error' : '' }}">
                                                    <label for="hons_university_name">University Name</label> 
                                                    <input type="text" name="hons_university_name" id="hons_university_name" class="form-control" value="{{$mphil_app_details->hons_university_name}}" readonly>
                                                    {!! $errors->first('hons_university_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('hons_passing_year') ? 'has-error' : '' }}">
                                                    <label for="hons_passing_year">Education Year</label> 
                                                    <input type="text" name="hons_passing_year" id="hons_passing_year" class="form-control" value="{{$mphil_app_details->hons_passing_year}}" readonly>
                                                    {!! $errors->first('hons_passing_year','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('hons_result') ? 'has-error' : '' }}">
                                                    <label for="hons_result">Result</label> 
                                                    <input type="text" name="hons_result" id="hons_result" class="form-control" value="{{$mphil_app_details->hons_result}}" readonly>
                                                    {!! $errors->first('hons_result','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('hons_subject_name') ? 'has-error' : '' }}">
                                                    <label for="hons_subject_name">Subject</label> 
                                                    <input type="text" name="hons_subject_name" id="hons_subject_name" class="form-control" value="{{$mphil_app_details->hons_subject_name}}" readonly>
                                                    {!! $errors->first('hons_subject_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>Masters's Information</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ms_university_name') ? 'has-error' : '' }}">
                                                    <label for="ms_university_name">University Name</label> 
                                                    <input type="text" name="ms_university_name" id="ms_university_name" class="form-control" value="{{$mphil_app_details->ms_university_name}}" readonly>
                                                    {!! $errors->first('ms_university_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ms_passing_year') ? 'has-error' : '' }}">
                                                    <label for="phone_number">Passing Year</label> 
                                                    <input type="text" name="ms_passing_year" id="ms_passing_year" class="form-control" value="{{$mphil_app_details->ms_passing_year}}" readonly>
                                                    {!! $errors->first('ms_passing_year','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ms_result') ? 'has-error' : '' }}">
                                                    <label for="ms_result">Result</label> 
                                                    <input type="text" name="ms_result" id="ms_result" class="form-control" value="{{$mphil_app_details->ms_result}}" readonly>
                                                    {!! $errors->first('ms_result','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ms_subject_name') ? 'has-error' : '' }}">
                                                    <label for="ms_subject_name">Subject</label> 
                                                    <input type="text" name="ms_subject_name" id="ms_subject_name" class="form-control" value="{{$mphil_app_details->ms_subject_name}}" readonly>
                                                    {!! $errors->first('ms_subject_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>Masters's Information 2 (If any)</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ms_university_name2') ? 'has-error' : '' }}">
                                                    <label for="ms_university_name2">University Name</label> 
                                                    <input type="text" name="ms_university_name2" id="ms_university_name2" class="form-control" value="{{$mphil_app_details->ms_university_name2}}" readonly>
                                                    {!! $errors->first('ms_university_name2','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ms_passing_year2') ? 'has-error' : '' }}">
                                                    <label for="phone_number">Passing Year</label> 
                                                    <input type="text" name="ms_passing_year2" id="ms_passing_year2" class="form-control" value="{{$mphil_app_details->ms_passing_year2}}" readonly>
                                                    {!! $errors->first('ms_passing_year2','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('ms_result2') ? 'has-error' : '' }}">
                                                    <label for="ms_result2">Result</label> 
                                                    <input type="text" name="ms_result2" id="ms_result2" class="form-control" value="{{$mphil_app_details->ms_result2}}" readonly>
                                                    {!! $errors->first('ms_result2','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('ms_subject_name2') ? 'has-error' : '' }}">
                                                    <label for="ms_subject_name2">Subject</label> 
                                                    <input type="text" name="ms_subject_name2" id="ms_subject_name2" class="form-control" value="{{$mphil_app_details->ms_subject_name2}}" readonly>
                                                    {!! $errors->first('ms_subject_name2','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>MPhil Information (If any)</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('mphil_university') ? 'has-error' : '' }}">
                                                    <label for="mphil_university">University Name</label> 
                                                    <input type="text" name="mphil_university" id="mphil_university" class="form-control" value="{{$mphil_app_details->mphil_university}}" readonly>
                                                    {!! $errors->first('mphil_university','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('mphil_subject') ? 'has-error' : '' }}">
                                                    <label for="ms_subject_name2">Subject</label> 
                                                    <input type="text" name="mphil_subject" id="mphil_subject" class="form-control" value="{{$mphil_app_details->mphil_subject}}" readonly>
                                                    {!! $errors->first('mphil_subject','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('mphil_passing_year') ? 'has-error' : '' }}">
                                                    <label for="mphil_passing_year">Passing Year</label> 
                                                    <input type="text" name="mphil_passing_year" id="mphil_passing_year" class="form-control" value="{{$mphil_app_details->mphil_passing_year}}" readonly>
                                                    {!! $errors->first('mphil_passing_year','<span class="help-block">:message</span>') !!}

                                                    
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <div class="form-group {{ $errors->has('phd_type') ? 'has-error' : '' }}">
                                                    <label for="phd_type">PhD Type</label> 
                                                    <input type="text" name="phd_type" id="phd_type" class="form-control" value="{{$mphil_app_details->phd_type}}" readonly>
                                                    
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>Referee Information 1</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_name') ? 'has-error' : '' }}">
                                                    <label for="reference1_name">Referee Name</label> 
                                                    <input type="text" name="reference1_name" id="reference1_name" class="form-control" value="{{$mphil_app_details->reference1_name}}" readonly>
                                                    {!! $errors->first('reference1_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_designation') ? 'has-error' : '' }}">
                                                    <label for="reference1_designation">Referee Designation</label> 
                                                    <input type="text" name="reference1_designation" id="reference1_designation" class="form-control" value="{{$mphil_app_details->reference1_designation}}" readonly>
                                                    {!! $errors->first('reference1_designation','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_affiliation') ? 'has-error' : '' }}">
                                                    <label for="reference1_affiliation">Referee Affiliation</label> 
                                                    <input type="text" name="reference1_affiliation" id="reference1_affiliation" class="form-control" value="{{$mphil_app_details->reference1_affiliation}}" readonly>
                                                    {!! $errors->first('reference1_affiliation','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_phone') ? 'has-error' : '' }}">
                                                    <label for="phone_number">Mobile Number</label> 
                                                    <input type="number" name="reference1_phone" id="reference1_phone" class="form-control" value="{{$mphil_app_details->reference1_phone}}" readonly>
                                                    {!! $errors->first('reference1_phone','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_email') ? 'has-error' : '' }}">
                                                    <label for="reference1_email">Email Address</label> 
                                                    <input type="text" name="reference1_email" id="reference1_email" class="form-control" value="{{$mphil_app_details->reference1_email}}" readonly>
                                                    {!! $errors->first('reference1_email','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_address') ? 'has-error' : '' }}">
                                                    <label for="reference1_address">Address</label> 
                                                    <input type="text" name="reference1_address" id="reference1_address" class="form-control" value="{{$mphil_app_details->reference1_address}}" readonly>
                                                    {!! $errors->first('reference1_address','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <span style="text-align:left;margin-left:25px"><b>Referee Information 2</b></span>
                                            <hr style="margin-left:20">
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference1_name') ? 'has-error' : '' }}">
                                                    <label for="reference1_name">Referee Name</label> 
                                                    <input type="text" name="reference2_name" id="reference2_name" class="form-control" value="{{$mphil_app_details->reference2_name}}" readonly>
                                                    {!! $errors->first('reference2_name','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference2_designation') ? 'has-error' : '' }}">
                                                    <label for="reference2_designation">Referee Designation</label> 
                                                    <input type="text" name="reference2_designation" id="reference2_designation" class="form-control" value="{{$mphil_app_details->reference2_designation}}" readonly>
                                                    {!! $errors->first('reference2_designation','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference2_affiliation') ? 'has-error' : '' }}">
                                                    <label for="reference2_affiliation">Referee Affiliation</label> 
                                                    <input type="text" name="reference2_affiliation" id="reference2_affiliation" class="form-control" value="{{$mphil_app_details->reference2_affiliation}}" readonly>
                                                    {!! $errors->first('reference2_affiliation','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference2_phone') ? 'has-error' : '' }}">
                                                    <label for="reference2_phone">Mobile Number</label> 
                                                    <input type="number" name="reference2_phone" id="reference2_phone" class="form-control" value="{{$mphil_app_details->reference2_phone}}" readonly>
                                                    {!! $errors->first('reference2_phone','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference2_email') ? 'has-error' : '' }}">
                                                    <label for="reference2_email">Email Address</label> 
                                                    <input type="text" name="reference2_email" id="reference2_email" class="form-control" value="{{$mphil_app_details->reference2_email}}" readonly>
                                                    {!! $errors->first('reference2_email','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                <div class="form-group {{ $errors->has('reference2_address') ? 'has-error' : '' }}">
                                                    <label for="reference2_address">Address</label> 
                                                    <input type="text" name="reference2_address" id="reference2_address" class="form-control" value="{{$mphil_app_details->reference2_address}}" readonly>
                                                    {!! $errors->first('reference2_address','<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div><!-- /.box-body -->
                                    <div class="box-footer text-right">
                                        <!-- <input type="reset" value="Reset" class="btn btn-danger">
                                        <input type="submit" value="Submit" class="btn btn-primary"> -->
                                    </div>
                                
                            </div><!-- /.box -->
                            <!-- Form Element sizes -->
                        </div>


                        <div class="col-md-3">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                </div><!-- /.box-header -->

                                    <div class="box-body">
                                        <div class="form-group">    
                                            <label for="status">Present Address</label>                    
                                            <input type="text" name="present_address" id="status" class="form-control" value="{{$mphil_app_details->present_address}}" readonly/>
                                        </div>
                                        <div class="form-group">    
                                            <label for="status">Permanent Address</label>                    
                                    
                                            <input type="text" name="status" id="status" class="form-control" value="{{$mphil_app_details->permanent_address}}" readonly/>
                                        </div>
                                        <div class="form-group">    
                                        <label for="status">All Educational Certificate</label>                    
                                            <input type="file" name="status" id="status" class="form-control"/>
                                        </div>
                                        <div class="form-group">    
                                        <label for="status">Bank Receipt</label>                    
                                            <input type="file" name="status" id="status" class="form-control"/>
                                        </div>
                                        <div class="form-group">    
                                        <label for="status">Referee Recommendations</label>                    
                                            <input type="file" name="status" id="status" class="form-control"/>
                                        </div>
                                        <div class="form-group">    
                                        <label for="status">NOC, Working Experience & Other related document</label>                    
                                            <input type="file" name="status" id="status" class="form-control"/>
                                        </div>
                                        <div class="form-group">    
                                        <label for="status">Research Proposal</label>                    
                                            <input type="file" name="status" id="status" class="form-control"/>
                                        </div>
                                    </div><!-- /.box-body -->

                                </form>
                            </div><!-- /.box -->
                            <!-- Form Element sizes -->
                        </div>
                    </div>
                    </div>
                </div><!-- /.tab-content -->
            </div><!-- nav-tabs-custom -->
        </div><!-- left column -->
    </div>

@endsection
    