@extends('admin.layout.master')
@section('content')
<main class="content">
				<div class="container-fluid p-0">

					<div class="mb-3">
						<h1 class="h3 d-inline align-middle">Forms</h1>
						<a class="badge bg-dark text-white ms-2" href="upgrade-to-pro.html">
      Get more form examples
        </a>
					</div>
					<div class="row">
						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Input</h5>
								</div>
								<div class="card-body">
									<input type="text" class="form-control" placeholder="Input">
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Textarea</h5>
								</div>
								<div class="card-body">
									<textarea class="form-control" rows="2" placeholder="Textarea"></textarea>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Checkboxes</h5>
								</div>
								<div class="card-body">
									<div>
										<label class="form-check">
            <input class="form-check-input" type="checkbox" value="">
            <span class="form-check-label">
              Option one is this and that&mdash;be sure to include why it's great
            </span>
          </label>
										<label class="form-check">
            <input class="form-check-input" type="checkbox" value="" disabled>
            <span class="form-check-label">
              Option two is disabled
            </span>
          </label>
									</div>
									<div>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option1">
            <span class="form-check-label">
              1
            </span>
          </label>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option2">
            <span class="form-check-label">
              2
            </span>
          </label>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" value="option3" disabled>
            <span class="form-check-label">
              3
            </span>
          </label>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Read only</h5>
								</div>
								<div class="card-body">
									<input class="form-control" type="text" placeholder="Readonly input" readonly>
								</div>
							</div>
						</div>

						<div class="col-12 col-lg-6">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Radios</h5>
								</div>
								<div class="card-body">
									<div>
										<label class="form-check">
            <input class="form-check-input" type="radio" value="option1" name="radios-example" checked>
            <span class="form-check-label">
              Option one is this and that&mdash;be sure to include why it's great
            </span>
          </label>
										<label class="form-check">
            <input class="form-check-input" type="radio" value="option2" name="radios-example">
            <span class="form-check-label">
              Option two can be something else and selecting it will deselect option one
            </span>
          </label>
										<label class="form-check">
            <input class="form-check-input" type="radio" value="option3" name="radios-example" disabled>
            <span class="form-check-label">
              Option three is disabled
            </span>
          </label>
									</div>
									<div>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inline-radios-example" value="option1">
            <span class="form-check-label">
              1
            </span>
          </label>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inline-radios-example" value="option2">
            <span class="form-check-label">
              2
            </span>
          </label>
										<label class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inline-radios-example" value="option3" disabled>
            <span class="form-check-label">
              3
            </span>
          </label>
									</div>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Selects</h5>
								</div>
								<div class="card-body">
									<select class="form-select mb-3">
          <option selected>Open this select menu</option>
          <option>One</option>
          <option>Two</option>
          <option>Three</option>
        </select>

									<select multiple class="form-control">
          <option>One</option>
          <option>Two</option>
          <option>Three</option>
          <option>Four</option>
        </select>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Disabled</h5>
								</div>
								<div class="card-body">
									<div class="mb-3">
										<label class="form-label">Disabled input</label>
										<input type="text" class="form-control" placeholder="Disabled input" disabled>
									</div>
									<div class="mb-3">
										<label class="form-label">Disabled select menu</label>
										<select class="form-control" disabled>
            <option>Disabled select</option>
          </select>
									</div>
									<label class="form-check">
          <input class="form-check-input" type="checkbox" value="" disabled>
          <span class="form-check-label">
            Can't check this
          </span>
        </label>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>

@endsection