@extends('layout.app')
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


    <div id="registerdesign">

    	<div class="col-sm-8 col-6">
                        <h4 class="page-title">New User</h4>
                    </div>


        <form method="POST" action="{{URL::to('/register/new')}}" enctype="multipart/form-data">
                        @csrf

                            <div>
                                <input id="reference" type="number" name="reference" value="{{ old('name') }}"  placeholder="Generate reference" class="form-control rform @error('reference') is-invalid @enderror" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div>
                                <input id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Name" class="form-control rform @error('name') is-invalid @enderror" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                            <div>
                                <input id="email" type="email"  name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" class="form-control rform @error('email') is-invalid @enderror">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <select class="form-control rform  @error('password') is-invalid @enderror" name="role" required="">
                                    <option value="Admin">Admin</option>
                                    <option value="Teacher">Teacher</option>
                                    <option value="Finance">Finance</option>
                                </select>
                            <div>
 


                            </div>
                       


                            <div>
                                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control rform @error('password') is-invalid @enderror" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                       

                        <div>

                            
                                <input id="password-confirm" type="password" class="form-control rform @error('password') is-invalid @enderror" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                            
                        </div>

                        <div>
                        	<label>Profile Image</label>

                                <input type="file" class="form-control rform @error('file') is-invalid @enderror" name="image" placeholder="Confirm Password" required autocomplete="new-password">
                            
                        </div>
                        <hr>

                        
                                <button type="submit" class="btn btn-primary btn-lg btn-block" style="width: 350px;margin-left:20px">
                                    {{ __('Add User') }}
                                </button>
                            
                    </form>
    </div>


@endsection