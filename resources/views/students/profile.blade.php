@extends('layouts.master')

@section('title') Enrollment @endsection
@section('css')

<!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('libs/summernote/summernote.min.css') }}">
    <link href="{{ URL::asset('/libs/datatables/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontEnrolment/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('frontEnrolment/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/educate.css') }}">

    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
    
    {{-- <link rel="stylesheet" type="text/css" href="{{ URL::asset('libs/tinymce/skins/ui/oxide/skin.min.css') }}"> --}}

@endsection
@section('content')

    @component('common-components.breadcrumb')
        @slot('title') Profile - {{ $enrolment->first_name }} @endslot
        @slot('title_li') Welcome to {{ Auth::user()->name }} @endslot


    @endcomponent
    <!-- boton que envia a la vista de lista -->
    <div class="row">
        <div class="col-auto mr-auto"></div>
        <div class="col-auto">
            <a href="{{ route('dashboard') }}" class="badge badge-secondary mb-2 p-2">Go Back</a>
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <div class="card text-center py-4">
                <div class="card-body">
                    <img src="https://ui-avatars.com/api/?background=random&rounded=true&format=svg&name={{$enrolment->first_name ." ". $enrolment->last_name}}" alt="" class="rounded-circle img-responsive mt-2" width="128" height="128"> 
                    <h4 class="mb-0 mt-2">{{$enrolment->first_name ." ". $enrolment->last_name}}</h4>
                    <p class="text-muted font-14 capita">Student</p>
                    <div class="text-left mt-3">
                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Age</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{ $age . " years old" }}</span>
                        </div>

                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Mobile</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{$enrolment->home_phone}}</span>
                        </div>

                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Email</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{$enrolment->parent_email}}</span>
                        </div>

                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Date of Birth</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{$enrolment->date_of_birth}}</span>
                        </div>
                        
                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Address</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{$enrolment->adress}}</span>
                        </div>

                        <div class=" bg-white rounded mt-1">
                            <span class=" text-primary">Post Code</span>
                        </div>
                        <div class="bg-white border-bottom border-primary pb-1 ">
                            <span class="text-dark font-size-15">{{$enrolment->post_code}}</span>
                        </div>
                    </div>
                </div> <!-- end card-body -->
            </div>
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Student Information</h4>
                    <p class="card-title-desc">In this section you can view all the information of the student enrollment</p>
                    <div id="accordion">
                        <div class="card mb-1 shadow-none">
                            <a href="#collapseFour" class="text-white collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                <div class="card-header bg-primary text-white" id="headingOne">
                                    <i class='bx bx-user align-middle font-size-25'></i><span class="align-middle font-size-15">Student Information</span> 
                                </div>
                            </a>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-8">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Student Name</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->first_name.' '.$enrolment->last_name}}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Student Age</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$age}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-6">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Home Phone</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->home_phone}}</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Date of Birth</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->date_of_birth}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-5">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Address</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->adress}}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Suburb</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->suburb}}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Post Code</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->post_code}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Language Spoken at Home</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->language_home}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 shadow-none">
                            <a href="#collapseFive" class="text-white collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                <div class="card-header bg-primary text-white" id="headingOne">
                                    <i class='bx bx-home align-middle font-size-25'></i><span class="align-middle font-size-15">Parent Information</span> 
                                </div>
                            </a>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Parent Name</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->parent_name}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">I Am</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->parent_iam}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-6">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Parent Mobile</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->parent_mobile}}</span>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Parent Address</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->parent_adress}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Parent Email</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->parent_email}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 shadow-none">
                            <a href="#collapseOne" class="text-white collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                <div class="card-header bg-primary text-white" id="headingOne">
                                    <i class='bx bx-user align-middle font-size-25'></i><span class="align-middle font-size-15">In Case of Emergency</span> 
                                </div>
                            </a>
    
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-3">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Name</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->emergency_name}}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Relationship to Student</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->emergency_relation}}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Phone Number</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->emergency_mobile}}</span>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Home Phone</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->emergency_phone}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card mb-1 shadow-none">
                            <a href="#collapseTwo" class="text-white collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                <div class="card-header bg-primary text-white" id="headingOne">
                                    <i class='bx bx-file align-middle font-size-25'></i><span class="align-middle font-size-15">School Information</span> 
                                </div>
                            </a>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row my-3">
                                        <div class="col-8">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">School Attending</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->school}}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Grade</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->grade}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-8">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Teacher Name</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->teacher_name}}</span>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">Mobile Phone</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15">{{$enrolment->teacher_mobile}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row my-3">
                                        <div class="col-12">
                                            <div class=" bg-white rounded mb-1">
                                                <span class=" text-primary">I am happy for my child´s school teacher to contact or be contacted by Educate</span>
                                            </div>
                                            <div class="bg-white border-bottom border-primary pb-1 ">
                                                <span class="text-dark font-size-15 capita">{{$enrolment->teacher_contact}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-0 shadow-none">
                            <a href="#collapseThree" class="text-white collapsed" data-toggle="collapse" aria-expanded="false" aria-controls="collapseOne">
                                <div class="card-header bg-primary text-white" id="headingOne">
                                    <i class='bx bx-money align-middle font-size-25'></i><span class="align-middle font-size-15">Payment</span> 
                                </div>
                            </a>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                <div class="card-body">
                                    <div class="row bg-primary py-2 rounded">
                                        <div class="col-12">
                                            <div class="  rounded mb-1">
                                                <span class=" text-white">Payment</span>
                                            </div>
                                            <div class=" border-bottom border-primary pb-1 ">
                                                <span class="text-white font-size-15">{{$enrolment->payment}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span>Log In Details - Student</span>
                </div>
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-6">
                            <div class=" bg-white rounded mb-1">
                                <span class=" text-primary">Login Email</span>
                            </div>
                            <div class="bg-white border-bottom border-primary pb-1 ">
                                <span class="text-dark font-size-15">{{$enrolment->first_name.'.'.$enrolment->last_name}}@myeducatetutoring.com </span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class=" bg-white rounded mb-1">
                                <span class=" text-primary">Login Password</span>
                            </div>
                            <div class="bg-white border-bottom border-primary pb-1 ">
                                <span class="text-dark font-size-15">tutoring.{{$enrolment->last_name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <span>Log In Details - Parent/Guardian</span>
                </div>
                <div class="card-body">
                    <div class="row my-3">
                        <div class="col-6">
                            <div class=" bg-white rounded mb-1">
                                <span class=" text-primary">Login Email</span>
                            </div>
                            <div class="bg-white border-bottom border-primary pb-1 ">
                                <span class="text-dark font-size-15">{{$enrolment->parent_email}}</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class=" bg-white rounded mb-1">
                                <span class=" text-primary">Login Password</span>
                            </div>
                            <div class="bg-white border-bottom border-primary pb-1 ">
                                <span class="text-dark font-size-15">tutoring.{{$enrolment->parent_name}}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>





@endsection


@section('script')



    <!-- Required datatable js -->
    <script src="{{ URL::asset('/libs/datatables/datatables.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/jszip/jszip.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ URL::asset('/libs/summernote/summernote.min.js') }}"></script>

    <!-- Datatable init js -->
    <script src="{{ URL::asset('/js/pages/datatables.init.js') }}"></script>
    <script src="{{ URL::asset('/js/pages/form-editor.init.js') }}"></script>

    <script src="{{ URL::asset('libs/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ URL::asset('js/pages/form-validation.init.js') }}"></script>
    <script src="{{ URL::asset('js/pages/form-advanced.init.js') }}"></script>
    <!-- script de funcionamiento de los select -->
    <script src="{{ URL::asset('js/enrolment2/jquery-migrate.min.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/hs-toggle-state.min.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/select2.full.min.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/hs-file-attach.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/jquery.mask.min.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/toastr.min.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/hs.core.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/hs.validation.js') }}"></script>
    <script src="{{ URL::asset('js/enrolment2/hs.select2.js') }}"></script>



@endsection
