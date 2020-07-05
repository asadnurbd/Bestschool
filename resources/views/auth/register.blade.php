@extends('layouts.app')

@section('content')
<div class="container" style="margin-bottom: 140px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>
                            <div class="col-md-6">
                              <select style="height:40px;"id="address" type="address" class="form-control @error('area') is-invalid @enderror" name="area"required autocomplete="area">
                                  <option value="#" >Select Area</option>
                                  <option value="Adabor">Adabor</option>
                                  <option value="Badda">Badda</option>
                                  <option value="Banani">Banani</option>
                                  <option value="Bangshal">Bangshal</option>
                                  <option value="Baridhara">Baridhara</option>
                                  <option value="Basabo">Basabo</option>
                                  <option value="Basundhara">Basundhara</option>
                                  <option value="Cantonment">Cantonment</option>
                                  <option value="Chaukbazar">Chaukbazar</option>
                                  <option value="Darus Salam">Darus Salam</option>
                                  <option value="Dhanmondi">Dhanmondi</option>
                                  <option value="Farmgate">Farmgate</option>
                                  <option value="Gulshan">Gulshan</option>
                                  <option value="Hazaribagh">Hazaribagh</option>
                                  <option value="Jatrabari">Jatrabari</option>
                                  <option value="Kafrul">Kafrul</option>
                                  <option value="Kamrangirchar">Kamrangirchar</option>
                                  <option value="Kalabagan">Kalabagan</option>
                                  <option value="Khilgaon">Khilgaon</option>
                                  <option value="Khilkhet">Khilkhet</option>
                                  <option value="Lalbag">Lalbag</option>
                                  <option value="Malibag">Malibag</option>
                                  <option value="Mogbazar">Mogbazar</option>
                                  <option value="Mohakhali">Mohakhali</option>
                                  <option value="Mirpur">Mirpur</option>
                                  <option value="Motijheel">Motijheel</option>
                                  <option value="Nawabganj">Nawabganj</option>
                                  <option value="New Market">New Market</option>
                                  <option value="Paltan">Paltan</option>
                                  <option value="Purbachal">Purbachal</option>
                                  <option value="Ramna">Ramna</option>
                                  <option value="Rampura">Rampura</option>
                                  <option value="Tejgaon">Tejgaon</option>
                                  <option value="Uttara">Uttara</option>
                                  <option value="Wari">Wari</option>

                            </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
