@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header with-border">
                                <h3 class="box-title">{{ $showData['student']['name'] }}</h3>
                                <a href="{{ route('student.registration.edit.note', $showData->student_id) }}" style="float: right;"
                                    class="btn btn-rounded btn-success mb-5">Edit Catatan</a>
                            </div>
                            <div class="box-body">
                                
                                    <h4>Catatan :</h4>
                                    <p>{{ $showData["student"]['note'] }}</p>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
