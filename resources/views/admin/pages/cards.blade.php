@extends('admin.layout.master')
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Cards</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
                            Get more card examples
                              </a>
					</div>
					<div class="row">
						<div class="col-12 col-md-6">
							<div class="card">
								<img class="card-img-top" src="{{asset('admin/img/photos/unsplash-1.jpg')}}" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with image and links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Card link</a>
									<a href="#" class="card-link">Another link</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<img class="card-img-top" src="{{asset('admin/img/photos/unsplash-2.jpg')}}" alt="Unsplash">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with image and button</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with links</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="card-link">Card link</a>
									<a href="#" class="card-link">Another link</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Card with button</h5>
								</div>
								<div class="card-body">
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>
@endsection