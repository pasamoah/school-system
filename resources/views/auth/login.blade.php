@extends('layouts.app')

@section('content')


<div class="container">

<div style="width:400px;
        margin: 0 auto;
        margin-top: 80px;">


                <div style="padding: 5px">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div><br>

                        

                            <div class="form-group">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <select class="form-control  @error('password') is-invalid @enderror" name="role" required="">
                                    <option value="Admin">Admin</option>
                                    <option value="Finance">Finance</option>
                                    <option value="Teacher">Teacher</option>
                                </select>
                            </div>
                        

                                <div class="form-check" style="text-align: center;">

                                        <div class="Custom-control-checkbox">
                                          <input type="checkbox" name="remember" value="Remember me" class="Custom-control-input" id="defaultUnchecked" >&nbsp;<label class="Custom-control-label" for="defaultUnchecked">{{ __('Remember Me') }}</label>
                                        </div>
                                    
                                </div>
                            
            

                        <div>
                            <div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    {{ __('Login') }}
                                </button>
                                <hr>

                                    <div style="text-align: center;">
                                    @if (Route::has('password.request'))
                                    <a style="text-decoration: none" class="btn btn-link" href="{{ route('password.request') }}">
                                        <b>{{ __('Forgot Your Password?') }}</b>
                                    </a>
                                @endif
                                    </div>
                            </div>
                        </div>
                    </form>
                </div>
</div>


</div>


@endsection
