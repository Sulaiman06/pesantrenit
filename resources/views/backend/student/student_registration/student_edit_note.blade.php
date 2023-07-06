@extends('admin.admin_master')
@section('admin')
    <div class="content-wrapper">
        <div class="container-full">
            <section class="content">
                <div class="box">
                    <div class="box-header with-border">
                        <h4 class="box-title">Ubah Catatan {{ $editData['student']['name'] }}</h4>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col">
                                <form method="post" action="{{ route('update.note.student.registration', $editData->student_id) }}">
                                    @csrf
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <h5>Catatan :</h5>
                                            <div class="controls">
                                                <textarea name="note" cols="35" rows="6" class="form-control">{{ $editData['student']['note'] }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-info mb-5" value="Simpan Perubahan">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection