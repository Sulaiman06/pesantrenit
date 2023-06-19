@extends('admin.admin_master')
@section('admin')
    @php
    $totalStudent = DB::table('users')->where('usertype', 'Student')->count();
    $totalEmployee = DB::table('users')->where('usertype', 'Employee')->count();
    $admins = DB::table('users')->where('usertype', 'Admin')->get();
    @endphp
    <div class="content-wrapper">
        <div class="container-full">

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-xl-3 col-6">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <div class="icon bg-primary-light rounded w-60 h-60">
                                    <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                                </div>
                                <div>
                                    <p class="text-mute mt-20 mb-0 font-size-16">Jumlah Siswa</p>
                                    <h3 class="text-white mb-0 font-weight-500">{{ $totalStudent }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="box overflow-hidden pull-up">
                            <div class="box-body">
                                <h3 class="text-white mb-0 font-weight-500">Pesantren IT</h3>
                                <p class="text-mute mt-20 mb-0 font-size-16">Pesantren IT adalah sebuah tempat pendidikan IT Non formal berbasis pesantren. Membekali santrinya dengan Skill IT & Ilmu Agama Serta mengarahkan Skill para santri untuk menggunakannya di jalan Dakwah sesuai dengan pemahaman para Salafusholih.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12">
                        <div class="box">
                            <div class="box-header">
                                <h4 class="box-title align-items-start flex-column">Management</h4>
                            </div>
                            <div class="box-body">
                                <div class="table-responsive">
                                    <table class="table no-border">
                                        <thead>
                                            <tr class="text-uppercase bg-lightest">
                                                <th style="min-width: 250px"><span class="text-fade">name</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">price</span></th>
                                                <th style="min-width: 100px"><span class="text-fade">deposit</span></th>
                                                <th style="min-width: 150px"><span class="text-fade">agent</span></th>
                                                <th style="min-width: 120px"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($admins as $data)
                                            <tr>
                                                <td class="pl-0 py-8">
                                                    <div class="d-flex align-items-center">
                                                        <div class="flex-shrink-0 mr-20">
                                                            <div class="bg-img h-50 w-50"
                                                                style="background-image: url(backend/images/gallery/creative/img-1.jpg)">
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">{{ $data->name }}</a>
                                                            <span class="text-fade d-block">Pharetra, Nulla , Nec, Aliquet</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">Paid</span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">$45,800k</span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">Paid</span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">$45k</span>
                                                </td>
                                                <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">Sophia</span>
                                                    <span class="text-white font-weight-600 d-block font-size-16">Pharetra</span>
                                                </td>
                                                <td class="text-right">
                                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-bookmark-plus"></span></a>
                                                    <a href="#" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                                </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- /.content -->
        </div>
    </div>
@endsection
