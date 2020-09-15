
        <div class="col-lg-9 py-5">

            <div class="row">


                @foreach($products as $product)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <a href="/produkt"><img class="card-img-top" src="img/karta_samsung.jpg" alt=""></a>
                        <div class="card-body">
                            <h4 class="card-title">
                                <a href="/produkt">{{$product-> name}}</a>
                            </h4>
                            <p class="card-text">{{$product-> details}}</p>
                        </div>
                        <div class="card-footer">
                            <div class="row justify-content-center">
                                <div class="col">
                                    <h5>{{$product -> price}} zł</h5>
                                </div>
                                <a href="#" class="btn btn-warning">Do koszyka
                                    <i class="fas fa-shopping-cart ml-1"></i></a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->
    </div>
    <!-- /.row -->

</div>
