<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Products</h2>
              <a href="/">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf

              <input class="form-control" type="search" name="search" placeholder="Search product">
              <input style="background-color: #78CA68;" class="btn btn-success" type="submit" value="Search">

              </form>

            </div>
          </div>

          @foreach($data as $product)
          
          <div class="col-md-4">
            <div class="product-item">
              <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>€{{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart', $product->id)}}" method="POST">

                @csrf
                <input type="number" value="1" min="1" class="form-control" style="width: 100px;" name="quantity">
                <br>
                <input style="background-color: #4090F5;" class="btn btn-primary" type="submit" value="Add Cart">

                </form>

              </div>
            </div>
          </div>


        @endforeach

        @if(method_exists($data, 'links'))
        <div class="d-flex justify-content-center">

        {!! $data->links() !!}

        </div>
        @endif

        </div>
      </div>
    </div>