@include('vendor.adminlte.master')
<form class="form-horizontal ml-5 mt-3 mb-5">
    <div class="form-group row">
      {{-- Name field --}}
      <div class="input-group mb-3 ml-3 col-6">
          <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
              value="{{ old('name') }}" placeholder="{{ __('adminlte::adminlte.full_name') }}" autofocus>

          <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-user {{ config('adminlte.classes_auth_icon', '') }}"></span>
              </div>
          </div>

          @error('name')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>
    <div class="form-group row">
      {{-- Email field --}}
      <div class="input-group mb-3 ml-3 col-6">
          <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
              value="{{ old('email') }}" placeholder="{{ __('adminlte::adminlte.email') }}">

          <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-envelope {{ config('adminlte.classes_auth_icon', '') }}"></span>
              </div>
          </div>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

    <div class="form-group row">
            {{-- Password field --}}
      <div class="input-group mb-3  ml-3 col-6">
          <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
              placeholder="{{ __('adminlte::adminlte.password') }}">

          <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
              </div>
          </div>

          @error('password')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>

      {{-- Confirm password field --}}
      <div class="input-group mb-3 ml-3 col-6">
          <input type="password" name="password_confirmation"
              class="form-control @error('password_confirmation') is-invalid @enderror"
              placeholder="{{ __('adminlte::adminlte.retype_password') }}">

          <div class="input-group-append">
              <div class="input-group-text">
                  <span class="fas fa-lock {{ config('adminlte.classes_auth_icon', '') }}"></span>
              </div>
          </div>

          @error('password_confirmation')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
      </div>
    </div>

            {{-- Register button --}}
      <button type="submit" class="col-4 mb-3 ml-3 rounded shadow-xl btn btn-block {{ config('adminlte.classes_auth_btn', 'btn-flat btn-primary') }}">
          <span class="fas fa-user-plus"></span>
          Update Login Detail
          <!--{{ __('adminlte::adminlte.register') }}-->
      </button>
      <hr class="mb-3">

    <div class="form-group row">
      <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputName2" placeholder="Name">
      </div>
    </div>
    <div class="form-group row">
      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
      </div>
    </div>
    <div class="form-group row">
      <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <div class="checkbox">
          <label>
            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
          </label>
        </div>
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-sm-2 col-sm-10">
        <button type="submit" class="btn btn-danger">Submit</button>
      </div>
    </div>
</form>