        @extends('master')
        @section('title','Product List')
        @section('content')
    
              <h2 id="related-heading" class="text-lg font-medium text-gray-900">You may also like this </h2>
    
            <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
              @foreach($products as $product)
                <div class="group relative">
                  <div class="min-h-80 aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:aspect-none lg:h-80">
                    <img src="{{ $product->image}}" alt="{{$product->name}}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
                  </div>
                  <div class="mt-4 flex justify-between">
                    <div>
                      <h3 class="text-sm text-gray-700">
                        <a href="{{route('add.to.cart',$product->id)}}">
                          <span aria-hidden="true" class="absolute inset-0"></span>
                            {{$product->name}}
                        </a>
                      </h3>
                      <p class="mt-1 text-sm text-gray-500">{{$product->description}}</p>
                    </div>
                    <p class="text-sm font-medium text-gray-900">{{$product->price}}</p>
                  </div>
                  <div class="mt-6">
                      <a href="{{ route('add.to.cart',$product->id) }}" class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 py-2 px-8 text-sm font-medium text-gray-900 hover:bg-gray-200">Add to bag<span class="sr-only">, Zip Tote Basket</span>
                      </a>
                  </div>  
                </div>
              
              @endforeach
            </div>
          @endsection