@extends('backend.layouts.app')

@php $pageTitle = 'Dashboard Control'; @endphp

@section('title')
  {{ $pageTitle }}
@endsection

@section('content')

            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-xl-2 col-sm-6"></div>    
                    <div class="col-xl-4 col-sm-6">
						
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<i class="fa-solid fa-users"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">Total Number of Users</p>
										<h4 class="mb-0"> {{ $users }}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-sm-6">
						
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<i class="fa-solid fa-user-check"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">Total Number of Active Users</p>
										<h4 class="mb-0"> {{ $subcategory }}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-2 col-sm-6"></div> 
					
					<div class="col-xl-2 col-sm-6"></div> 
					
					<div class="col-xl-4 col-sm-6">
						
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<i class="fa-regular fa-file"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">Total Number of Protocols</p>
										<h4 class="mb-0"> {{ $protocolScopes }}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-4 col-sm-6">
						
						<div class="widget-stat card">
							<div class="card-body p-4">
								<div class="media ai-icon">
									<span class="me-3 bgl-primary text-primary">
										<!-- <i class="ti-user"></i> -->
										<i class="fa-regular fa-image"></i>
									</span>
									<div class="media-body">
										<p class="mb-1">Total Number of Newsletters</p>
										<h4 class="mb-0"> {{ $newsletters }}</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="col-xl-2 col-sm-6"></div> 
                    
                    
  
                  
  
                </div>
              </div>

@endsection

@push('js')
    <script>

    </script>
@endpush
