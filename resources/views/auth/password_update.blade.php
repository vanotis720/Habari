@extends('templates.app')
@section('title')
    Modification du mot de passe
@endsection
@section('content')
    <!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<h3 class="page-title">Modification du mot de passe</h3>
                    <div class="col-sm-6">
                        <div class="panel">
                            @if (session('error'))
                                <div class="alert alert-danger text-center msg" id="error">
                                    <strong>{{ session('error') }}</strong>
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success text-center msg" id="error">
                                    <strong>{{ session('success') }}</strong>
                                </div>
                            @endif
                            @if (session('msg'))
                                <div class="alert alert-info text-center msg" id="error">
                                    <strong>{{ session('msg') }}</strong>
                                </div>
                            @endif
                            <div class="panel-body">
                                @if(session('alert'))
                                    <div class="alert alert-info text-center" alt="alert">
                                        {{ session('alert') }}
                                    </div>
                                @endif
                               {{-- @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif --}}
                                <form class="form-auth-small" action="{{ route('password.store', $destination) }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label for="password" class="control-label">Nouveau mot de passe</label>
                                        <input type="password" id="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Entrer le nouveau mot de passe" required>
                                        @error('password')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password_confirmation" class="control-label">Confirmation</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Confirmer le mot de passe" required>
                                        @error('password_confirmation')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm btn-block">Valider et Mettre a jour</button>
                                </form>
                            </div>
                        </div>
                    </div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
@endsection