<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="/">view all products <i class="fa fa-angle-right"></i></a>

              <form action="{{url('search')}}" method="get" class="form-inline" style="float: right; padding: 10px;">

              @csrf

              <input class="form-control" type="search" name="search" placeholder="Search product">
              <input class="btn btn-success" type="submit" value="Search">

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