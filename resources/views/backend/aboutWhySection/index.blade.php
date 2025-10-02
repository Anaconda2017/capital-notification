@extends('backend.layouts.app')

@php $pageTitle = 'Why Egec Section'; @endphp

@section('title')
    {{ $pageTitle }}
@endsection

@push('css')
    <style>

    </style>
@endpush

@section('content')

    
          <div class="row">
              <div class="col-md-12">
              @if(Session::has('flash_message'))
              <div class="alert alert-success">
                  {{ Session::get('flash_message') }}
              </div>
              @endif
                <div class="card">
                  <div class="card-header card-header-primary">
                      <div class="row align-items-center">
                          <div class="col-md-8 col-4">
                              <h4 class="card-title text-white">{{ $pageTitle }} </h4>
                          </div>
                          <div class="col-md-4 col-8 text-right">
                            <a class="btn btn-white btn-round" href="{{ route('aboutWhySection.create') }}">Why section</a>
                          </div>
                      </div>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      @if(count($rows))
                      <table class="table table-striped table-bordered">
                        <thead class=" text-primary">
                          <th>
                            #
                          </th>
                          <th>
                            Title in English
                          </th>
                          <th>
                            Title in Arabic 
                          </th>
                          <th>
                            Control
                          </th>
                        </thead>
                        <tbody>
                      @foreach($rows as $client)
                          <tr>
                          <td>
                          {{$client->id}}
                            </td>
                            <td>
                            {{$client->ar_title}}
                            </td>
                            <td>
                              {{ $client->ar_title }}
                            </td>  
                            
                            <td class="td-actions row justify-content-center py-5 no-gutters">
                              <div class="col-6">
                                  <a href="{{ route('aboutWhySection.edit', $client->id) }}">
                                      <button title="" class="btn btn-icon rounded-circle btn-info" type="button" data-original-title="Edit Why section" rel="tooltip">
                                      <i class="material-icons">edit</i>
                                      </button>
                                  </a>
                              </div>
                          </td>
                          
                          </tr>
                      @endforeach
                        </tbody>
                      </table>
                     
                      @else
                      <h3 class="text-center">No Why Section Found</h3>
                  @endif
                    </div>
                  </div>
                </div>
              </div>
          </div>
    
@endsection