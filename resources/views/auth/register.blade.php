@extends('layouts.app')

@section('content')


<style type="text/css">
    #registerdesign{

        width: 400px;
        height: 400px;
        margin: 0 auto; 
        margin-top: 20px; 
}

::placeholder{

    font-size: 12px
}

    .rform{

        outline: none;
        border: none;
        background-color: #f6f6f6;
        margin: 5px;
        width: 350px;
        height: 50px;
        padding: 15px;
        border: 1px solid gray;
        margin-left:20px ;
    }

    .rform:focus{
        border: 1px solid blue;
    }
</style>

@if($user -> isEmpty())

<div style="text-align: center; font-size: 23px">Welcome to E-Systems Management Software,<br> Kindly Register and Explore.</div>
    
    <div id="registerdesign">
        <form method="POST" action="{{ route('register') }}">
                        @csrf

                            <div>
                                <input id="reference" type="number" name="reference" value="{{ old('name') }}"  placeholder="Generate reference" class="rform @error('reference') is-invalid @enderror" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" class="rform @error('name') is-invalid @enderror" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                            <div>
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" class="rform @error('email') is-invalid @enderror">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <select class="rform  @error('password') is-invalid @enderror" name="role" required="" hidden="">
                                    <option value="Admin">Admin</option>
                                </select>
                            <div>
 


                            </div>
                       


                            <div>
                                <input id="password" type="password" name="password" required autocomplete="new-password" class="rform @error('password') is-invalid @enderror" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div>

                            
                                <input id="password-confirm" type="password" class="rform @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            
                        </div><hr>

                        
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 350px;margin-left:20px">
                                    {{ __('Register') }}
                                </button>
                            
                    </form>
    </div>

@else

    <?php 

    header("Location:http://esystem.de/login", true, 301);
    exit();

    ?>
    
@endif


@endsection
