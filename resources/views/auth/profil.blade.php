@extends('templates.app')
@section('title')
    Mon Profil
@endsection
@section('content')
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main" style="background-image: url({{ asset('assets/img/bus2.jpeg')}});">
										<img src="assets/img/favicon.png" class="img-circle" alt="Avatar">
										<h3 class="name">{{ $profil->name }}</h3>
										<span class="online-status status-available">{{ $profil->name }}</span> <br>
										<div class="btn-group">
											<a href='{{ route('password.store') }}' class="btn btn-success  mb-2 mr-2">
												<i class="fa fa-edit"></i> Modifier votre mot de passe
											</a>
										</div>
									</div>
									
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Informations Basic</h4>
										<ul class="list-unstyled list-justify">
											<li>Nom complet <span><b>{{ $profil->name }}</b></span></li>
											<li>Adresse <span><b>{{ $profil->address }}</b></span></li>
											<li>Genre <span><b>{{  $profil->gender ==  'm'  ?  'Masculin'  :  'Féminité'    }}</b></span></li>
											<li>Téléphone <span><b>{{ $profil->phone }}</b></span></li>
											<li>Email <span><b>{{ $profil->email }}</b></span></li>
										</ul>
									</div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection