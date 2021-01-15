@extends('layouts.dashboard')

@section('title')

 TechStore dashboard Product detail
    
@endsection
@section('content')
   <!-- Section contant-->
   <div
   class="section-content section-dashboard-home"
   data-aos="fade-up"
 >
   <div class="container-fluid">
     <div class="dashboard-heading">
       <h2 class="dashboard-title">Add New Product</h2>
       <p class="dashboard-subtitle">Create your own product</p>
     </div>
     <div class="dashboard-content">
       <div class="row">
         <div class="col-12">
            @if($errors -> any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            @endif
           {{-- route  ke dashboard bermasalah ketika submit & belum masuk ke DB --}}
           <form action="{{ route('dashboard-product-store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="users_id" value="{{ Auth::user()->id }}">
             <div class="card">
               <div class="card-body">
                 <div class="row">
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="name">Product Name</label>
                       <input
                         type="text"
                         class="form-control"                         
                         name="name"
                       />
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="price">Price</label>
                       <input
                         type="number"
                         class="form-control"
                         name="price"
                       />
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                       <label for="category">Category</label>
                       <select name="categories_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                     </div>
                   </div>

                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="description">Description</label>
                       <textarea
                         name="description"
                         id="editor"
                       ></textarea>
                     </div>
                   </div>
                   <div class="col-md-12">
                     <div class="form-group">
                       <label for="thumbnails">Thumbnails</label>
                       <input
                         type="file"
                         name="photo"                               
                         class="form-control"
                         
                       />
                       <p class="text-muted">
                         Anda dapat memilih lebih dari satu file</p>
                       </p>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col text-right">
                 <button
                   type="submit"
                   class="btn btn-success btn-block px-5"
                 >
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
@endsection

@push('addon-script')
  <script src="https://cdn.ckeditor.com/4.15.1/standard/ckeditor.js"></script>
  <script>
    CKEDITOR.replace("editor");
  </script>
@endpush