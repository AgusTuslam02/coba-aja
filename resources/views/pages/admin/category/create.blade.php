@extends('layouts.admin')

@section('title')

 Category page
    
@endsection
@section('content')
   <!-- Section contant-->
  <div
   class="section-content section-dashboard-home"
   data-aos="fade-up"
  >
   <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title"> TechStore Category</h2>
        <p class="dashboard-subtitle">
          Create New Category
        </p>
      </div>
      <div class="dashboard-content">
        <div class="row">
            <div class="col-md-12">
                @if($errors -> any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf 
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Nama Kategori</label>
                                        <input type="text" name="name" id="" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="">Foto</label>
                                        <input type="file" name="photo" id="" class="form-control" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-right">
                                    <button type="submit" class="btn btn-success px-5"> 
                                            Save Now
                                    </button>
                                </div>
                            </div>
                            
                        </form>
                    </div>    
                </div>
            </div>
        </div>
      </div>
   </div>
 </div>
@endsection
