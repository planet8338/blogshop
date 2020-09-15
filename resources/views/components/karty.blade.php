

<!-- Karty -->
    <div class="album bg-light col-sm-12 py-5">
        <div class="container">
            <div class="row row-cols-lg-8 d-flex justify-content-center wow fadeIn">

            @foreach($products as $product)
                <div class="card" style="width: 18rem;">
                    <a href="/produkt">
                    <img src="img/karta_samsung.jpg" class="card-img-top" alt="product"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$product -> name}}</h5>
                        <p class="card-text">{{$product -> details}}</p>
                    </div>

                    <div class="card-footer bg-transparent">
                        <div style="text-align: center;">
                        <h3><b>{{$product -> price}}</b> zł</h3>
                        <a href="#" class="btn btn-warning justify-content-center">Do koszyka
                            <i class="fas fa-shopping-cart ml-1"></i></a></div>
                    </div>
                </div>


                @endforeach



        </div>
    </div>
    </div>

