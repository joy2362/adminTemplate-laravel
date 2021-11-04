@extends('admin.layout.master')
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Buttons</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Get more button examples
                             </a>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Basic Buttons</h5>
									<h6 class="card-subtitle text-muted">Default Bootstrap buttons style.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary">Primary</button>
										<button class="btn btn-secondary">Secondary</button>
										<button class="btn btn-success">Success</button>
										<button class="btn btn-danger">Danger</button>
										<button class="btn btn-warning">Warning</button>
										<button class="btn btn-info">Info</button>
									</div>
									<div>
										<button class="btn btn-primary" disabled>Primary</button>
										<button class="btn btn-secondary" disabled>Secondary</button>
										<button class="btn btn-success" disabled>Success</button>
										<button class="btn btn-danger" disabled>Danger</button>
										<button class="btn btn-warning" disabled>Warning</button>
										<button class="btn btn-info" disabled>Info</button>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Sizes</h5>
									<h6 class="card-subtitle text-muted">Fancy larger or smaller buttons.</h6>
								</div>
								<div class="card-body text-center">
									<div class="mb-3">
										<button class="btn btn-primary btn-sm">Small</button>
										<button class="btn btn-primary">Medium</button>
										<button class="btn btn-primary btn-lg">Large</button>
									</div>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title">Button Group</h5>
									<h6 class="card-subtitle text-muted">Button group components.</h6>
								</div>
								<div class="card-body">
									<h6 class="card-subtitle mb-2 text-muted">Horizontal button group</h6>
									<div class="btn-group btn-group-lg mb-3" role="group" aria-label="Large button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group mb-3" role="group" aria-label="Default button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>
									<br>
									<div class="btn-group btn-group-sm mb-4" role="group" aria-label="Small button group">
										<button type="button" class="btn btn-secondary">Left</button>
										<button type="button" class="btn btn-secondary">Middle</button>
										<button type="button" class="btn btn-secondary">Right</button>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Button toolbar</h6>
									<div class="btn-toolbar mb-4" role="toolbar" aria-label="Toolbar with button groups">
										<div class="btn-group me-2" role="group" aria-label="First group">
											<button type="button" class="btn btn-secondary">1</button>
											<button type="button" class="btn btn-secondary">2</button>
											<button type="button" class="btn btn-secondary">3</button>
											<button type="button" class="btn btn-secondary">4</button>
										</div>
										<div class="btn-group me-2" role="group" aria-label="Second group">
											<button type="button" class="btn btn-secondary">5</button>
											<button type="button" class="btn btn-secondary">6</button>
											<button type="button" class="btn btn-secondary">7</button>
										</div>
										<div class="btn-group" role="group" aria-label="Third group">
											<button type="button" class="btn btn-secondary">8</button>
										</div>
									</div>

									<h6 class="card-subtitle mb-2 text-muted">Vertical button group</h6>
									<div class="btn-toolbar">
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
											<button type="button" class="btn btn-primary">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
											<button type="button" class="btn btn-success">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
											<button type="button" class="btn btn-warning">Button</button>
										</div>
										<div class="btn-group-vertical me-2" role="group" aria-label="Vertical button group">
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
											<button type="button" class="btn btn-danger">Button</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

@endsection