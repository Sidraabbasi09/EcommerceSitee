@extends('Layouts.dashboardscaffold')
@section('content')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Products</h2>
                <a href="{{route('createproductt')}}" class="btn btn-primary">Add New Product</a>
            </div>
            <div class="card">
                <div class="card-body">
                    <table id="category-table" class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Category</th>
                                <th>Description</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($Product as $Product)
                             <tr>
                                    <td>{{ $Product->id }}</td>
                                    <td>{{ $Product->Title }}</td>
                                    <td><img src="{{ asset('images/'.$Product->Image) }}" alt="" style="max-width: 100px; max-height: 100px;"></td>
                                    <td>{{ $Product->Price }}</td>
                                    <td>{{ $Product->Category }}</td>
                                    <td>{{ $Product->Description }}</td>
                                    <td>{{ $Product->status }}</td>
                                    
                                    <td>
                                       <div style="display:flex">
                                            <a href="{{route('editproductform', $Product->id)}}" class="btn btn-sm btn-primary me-3">Edit</a>
                                            <form action="{{ route('deletee', $Product->id) }}" method="POST">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-sm btn-danger" value="delete" />
                                            </form>
                                            
                                        </div> 
                                    </div>
                                    </td>
                                </tr>  
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection

