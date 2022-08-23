<section class="section" id="offers">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 text-center">
                <div class="section-heading">
                    <h6>Makanan</h6>
                    <h2>Menu di kawasan Pantai Panjang</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row" id="tabs">
                    <div class="col-lg-12">
                        <div class="heading-tabs">
                            <div class="row">
                                <div class="col-lg-6 offset-lg-3">
                                    <ul>
                                      <li><a href='#tabs-2'><img src="assets/images/tab-icon-02.png" alt="">Minuman</a></a></li>
                                      <li><a href='#tabs-3'><img src="assets/images/tab-icon-03.png" alt="">Makanan</a></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <section class='tabs-content'>
                            {{-- <article id='tabs-1'>
                                
                                <div class="row">
                                    @foreach($data as $data)
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img height="95px" width="70px" src="foodimage/{{$data->image}}" alt="">
                                                          <p>{{$data->description}}</p>
                                                        <div class="price">
                                                            <h6>{{$data->price}}</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-04.png" alt="">
                                                        <h4>Eggs Omelette</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$6.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-05.png" alt="">
                                                        <h4>Dollma Pire</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$5.00</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-06.png" alt="">
                                                        <h4>Omelette & Cheese</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$4.10</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                    {{-- </div> --}}
                                    {{-- @endforeach
                                </div>
                              
                            </article>   --}} 
                            <article id='tabs-2'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">

                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/boba.jpg" alt="">
                                                        <h4>Es Boba Dalgona</h4>
                                                        <p>Es kopi dengan Boba Dalgona</p>
                                                        <div class="price">
                                                            <h6>20k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/kela.png" alt="">
                                                        <h4>Es Degan</h4>
                                                        <p>Es degan Mantap, langsung diambil dari pohon kelapa</p>
                                                        <div class="price">
                                                            <h6>15k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/aneka.jpeg" alt="">
                                                        <h4>Aneka Minuman Dingin</h4>
                                                        <p>Aneka minuman Dingin</p>
                                                        <div class="price">
                                                            <h6>25k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-02.png" alt="">
                                                        <h4>Orange Juice</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>20k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>  
                            <article id='tabs-3'>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="left-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/sea.jpg" alt="">
                                                        <h4>Kepiting</h4>
                                                        <p>Kepiting dengan bumbu manis asin gurih dll</p>
                                                        <div class="price">
                                                            <h6>40k</h6>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/cumi.jpeg" alt="">
                                                        <h4>Cumi Bakar</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>30k</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="row">
                                            <div class="right-list">
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/r.jpg" alt="">
                                                        <h4> Aneka Seafood</h4>
                                                        <p>Ada cumi, kepiting, kerang dll</p>
                                                        <div class="price">
                                                            <h6>$8.50</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="tab-item">
                                                        <img src="assets/images/tab-item-01.png" alt="">
                                                        <h4>Fresh Chicken Salad</h4>
                                                        <p>Lorem ipsum dolor sit amet, consectetur koit adipiscing elit, sed do.</p>
                                                        <div class="price">
                                                            <h6>$9</h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>   
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>