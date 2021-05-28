
 
<x-admin.layout>

  <div class="az-content az-content-dashboard">
    <div class="container">
      <div class="az-content-body">
    <link rel="stylesheet" href="/assets/css/argon.css?v=1.2.0" type="text/css">
   <h2> <a href="/admin/products/create">Create Product</a></h2>

   <!-- Dark table -->
    <div class="row">
        <div class="col">
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Products Table</h3>
            </div>
            <div class="table-responsive">
              <table class="table align-items-center table-dark table-flush ">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col" class="sort" data-sort="sn">SN</th>
                    <th scope="col" class="sort" data-sort="name">Name</th>
                    <th scope="col" class="sort" data-sort="status">Description</th>
                    <th scope="col" class="sort" data-sort="completion">Price</th>
      

                    <th scope="col">Action</th>
                  </tr>
                </thead>
                @foreach ($products as $product)
                <tbody class="list">
                  <tr>
                    <th scope="row">

                          <span class="name mb-0 text-sm">{{ $product->id}}</span>
                 
                    </th>
                

                    <td class="budget">
                        {{ $product->product_name}}
                    </td>
             
                    <td>
                      <span class="badge badge-dot mr-4">
                        <span class="status">{{ substr($product->product_desc,0,50)}}</span>
                      </span>
                    </td>
                    <td class="budget">
                        {{ $product->price}}
                    </td>
          
                 
                    {{-- <td>
                        <a href="/admin/products/edit/{{ $product->id }}">Edit</a>||
                        <a href="/admin/products/delete/{{ $product->id }}">Delete</a>
                    </td> --}}
                    <td>
                      <a href="/admin/products/edit/{{ $product->id }}" class="btn btn-xs btn-primary">Edit</a>
                       <a href="/admin/products/delete/{{ $product->id }}" class="btn btn-xs btn-danger" onclick="return confirm('Are You Sure? Want to Delete It.');">Delete</a> 
                    </td>
                  </tr>
                  @endforeach

                 
                </tbody>
              </table>
            </div>
          </div>
        </div>
 
  </x-admin.layout>



{{-- 
<a href="/admin/products/create">Create Product</a>
<table width="900" align="center">
    <tr>
        <td>SN</td>
        <td>Name</td>
        <td>Description</td>
        <td>Price</td>
        <td>Action</td>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ $product->id}}</td>
        <td>{{ $product->product_name}}</td>
        <td>{{ substr($product->product_desc,0,50)}}</td>
        <td>{{ $product->price}}</td>
        <td>
            <a href="#">Edit</a>||
            <a href="#">Delete</a>
        </td>
    </tr>
    @endforeach
</table> --}}
    

