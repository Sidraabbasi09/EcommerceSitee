@extends('Layouts.dashboardscaffold')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center mb-4">Edit Product</h4>
            <form action="{{route('updateproductform', ['id' => $Product->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" id="Title" name="Title" value="{{$Product->Title}}">
                </div>
                <!-- Thumbnail Field -->
                <div class="form-group">
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" id="Price" name="Price" value="{{$Product->Price}}">
                </div>
                <div class="form-group">
                    <label for="Image">Image:</label>
                    <input type="file" class="form-control" id="Image"   name="Image" value="{{$Product->Image}}">
                </div>
                <div class="form-group">
                    <label for="name">Category:</label>
                    <input type="text" class="form-control" id="Category" name="Category" value="{{$Product->Category}}" >
                </div>
                <div class="form-group">
                    <label for="name">Description:</label>
                    <input type="text" class="form-control" id="Description" name="Description" value="{{$Product->Description}}">
                </div>
                <!-- Status Field -->
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Update</button>
               
            </form> 
        </div>
    </div>
</div>
    
@endsection

