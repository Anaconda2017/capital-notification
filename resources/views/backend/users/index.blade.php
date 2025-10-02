@extends('backend.layouts.app')

@php $pageTitle = 'Users Control'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')
    @component('backend.layouts.header', ['navTitle' => 'Users'])

    @endcomponent

    <section id="dom">

      <div class="col-md-12">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header row no-gutters bg-primary bg-darken-2  align-items-center card-title-bold text-capitalize">
                        <div class="col-md-6">
                            <h4 class="card-title text-white text-center">{{ $pageTitle }}</h4>
                        </div>

                    </div>
                    <div class="card-content collapse show">
                        <div class="card-body card-dashboard table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>price</th>
                                    <th>ACTION</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-bold-500">Michael Right</td>
                                    <td class="text-bold-500">Tahrrir</td>
                                    <td>Going</td>
                                    <td>963 LE</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i></a>
                                        <a href="#"><i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td class="text-bold-500">Morgan Vanblum</td>
                                    <td class="text-bold-500">Pverlyhills</td>
                                    <td>delivered</td>
                                    <td>250 LE</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i></a>
                                        <a href="#"><i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td class="text-bold-500">Tiffani Blogz</td>
                                    <td class="text-bold-500">Haram</td>
                                    <td>Cancelled</td>
                                    <td>150 LE</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i></a>
                                        <a href="#"><i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td class="text-bold-500">Ashley Boul</td>
                                    <td class="text-bold-500">Mohandsen</td>
                                    <td>delivered</td>
                                    <td>223 LE</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i></a>
                                        <a href="#"><i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td class="text-bold-500">Mikkey Mice</td>
                                    <td class="text-bold-500">Faisel</td>
                                    <td>delivered	</td>
                                    <td>550 LE</td>
                                    <td>
                                        <a href="#"><i class="badge-circle badge-circle-info bx bx-edit text-white font-medium-1"></i></a>
                                        <a href="#"><i class="badge-circle badge-circle-danger bx bx-x text-white font-medium-1"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <input type="hidden" name="request_date" id="request_date" value="">

                </div>
        </div>
    </section>
@endsection


