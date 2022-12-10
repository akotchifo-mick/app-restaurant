@extends('users.footer')

@section('nav-menu')
<li>
    <form action="{{route('logout')}}" method="POST">
        @csrf
        <button class="btn" type="submit" data-bs-toggle="popover" data-bs-placement="bottom"
            data-bs-content="@lang('Log Out')"> <span>
                {{Auth::user()->lastName. ' '.Auth::user()->firstName }}
                <i class="fa fa-power-off"></i> </span>
        </button>
    </form>
</li>
@endsection

@section('content')
<!-- Content Header Starts -->
    <div >
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
<!-- Content Header Ends -->
@endsection