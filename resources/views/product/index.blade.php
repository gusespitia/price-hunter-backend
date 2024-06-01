<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>
 <main>

 <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">   
            <h2>Produts</h2>        
            <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#create">
    Add a New Product
  </button>
  <br>    <br> 
            <div class="table-responsive">
                <table class="table table-striped table-dark">
                    <thead>
                        <tr>                         
                            <th scope="col">Product ID</th>
                            <th scope="col">Product Name</th>                    
                            <th scope="col">Picture</th>
                            <th scope="col">Presentation</th>
                         
                            <th scope="col">Category</th>
                            <th scope="col">Status</th>
                            <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($products as $product)                     
                        <tr class="">
                            <td scope="row">{{$product->id}} </td>
                            <td scope="row">{{$product->product_name}} </td>
                            <td><img src="{{ $product->product_picture }}" alt="{{ $product->product_name }}"> </td>
                            <td>{{ $product->product_weight }}</td>                         
                            <td>{{ $product->category->category_name }}</td>


                            <td>{{ $product->product_status }}</td>
                          
                            <td>
                                   <!-- Button trigger modal -->

                                <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#edit{{$product->id}}">
                                Edit
                              </button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete{{$product->id}}">
                                Delete
                              </button>
                            </td>
                        </tr>
                    @include('product.info')
                        @endforeach
                    </tbody>
                </table>
            </div>
            @include('product.create')
        </div>
        <div class="col-md-2"></div>
    </div>   

 </main>

   


  
</x-app-layout>
    


