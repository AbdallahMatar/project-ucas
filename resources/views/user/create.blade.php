@extends('layouts.app')

@section('content')
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper ml-5">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>New User</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary p-3">
                  <!-- /.card-header -->

                  @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    {{ $error }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endforeach
                    @endif

                  <!-- form start -->
                  <form action="{{ route('users.store') }}" method="POST" id="create_admin_form" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="name" placeholder="Name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom02">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Email" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationCustom01">Password</label>
                            <input type="text" name="password" value="{{ old('password') }}" class="form-control" id="password" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="text-right mr-1 mb-3">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
                </div>
              <!--/.col (left) -->
              <!-- right column -->
              <div class="col-md-6">

              </div>
              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
  <!-- /.content-wrapper -->
@endsection
