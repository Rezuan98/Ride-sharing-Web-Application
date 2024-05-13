@extends('admin.admin_Dashboard')


@section('admin')

<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
          {{-- <a href="{{route('add.property')}}" class="btn btn-inverse-info">Add Property</a> --}}
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
  <div class="card-body">
    <h6 class="card-title">All Passengers</h6>
   
    <div class="table-responsive">
      <table id="dataTableExample" class="table">
        <thead>
          <tr>
            <th>Serial</th>
            <th>Passenger Name:</th>
            <th>User Address</th>
            <th> Mobile</th>
            <th>Email</th>
            <th>Image</th>
           
            <th>Action</th>
            
          </tr>
        </thead>
        <tbody>
          @foreach($users as $key => $item)
          <tr>
            <td>{{ $key+1 }}</td>
           
            <td>{{ $item->name }}</td> 
            <td>{{ $item->city }}</td> 
            <td>{{ $item->phone }}</td> 
            <td>{{ $item->email }}</td> 
            <td><img src="{{ asset('images/userimages/' . $item->image) }}" style="width:70px; height:65px;"></td> 
            <td> 
         
            </td> 
            <td> </td> 
            <td>
              {{-- <a href="{{ route('details.property',$item->id) }}" class="btn btn-inverse-info"> <i data-feather="eye" title="Edit">  </i> </a> --}}
<a href="#" class="btn btn-inverse-warning"> <i data-feather="edit" title="Edit">  </i> </a>
<a href="#" class="btn btn-inverse-danger" id="delete"> <i data-feather="trash-2" title="Edit">  </i>  </a>
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

</div>



@endsection