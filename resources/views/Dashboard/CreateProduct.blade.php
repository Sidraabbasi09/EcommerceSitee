@extends('Layouts.dashboardscaffold')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h4 class="text-center mb-4">Add New Product Here</h4>
            <form action="{{route('storeproductt')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Name Field -->
                <div class="form-group">
                    <label for="name">Title:</label>
                    <input type="text" class="form-control" id="Title" name="Title">
                </div>
                <!-- Thumbnail Field -->
                <div class="form-group">
                    <label for="name">Price:</label>
                    <input type="text" class="form-control" id="Price" name="Price">
                </div>
                <div class="form-group">
                    <label for="Image">Image:</label>
                    <input type="file" class="form-control" id="Image"   name="Image">
                </div>
                <div class="form-group">
                    <label for="name">Category:</label>
                    <input type="text" class="form-control" id="Category" name="Category">
                </div>
                <div class="form-group">
                    <label for="name">Description:</label>
                    <input type="text" class="form-control" id="Description" name="Description">
                </div>
                <!-- Status Field -->
                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Submit</button>
               
            </form>
        </div>
    </div>
</div>
    
@endsection

