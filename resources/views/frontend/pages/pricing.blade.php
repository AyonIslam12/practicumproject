@extends('frontend.master')


@section('content')

<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
        <div class="col-md-12 ftco-animate">
            <div class="car-list">
                <table class="table">
                    <thead class="thead-primary">
                      <tr class="text-center">
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th class="bg-primary heading">Per Hour Rate</th>
                        <th class="bg-dark heading">Per Day Rate</th>
                        <th class="bg-black heading">Leasing</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-1.jpg') }});"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                        </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->

                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-2.jpg') }});"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->

                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-3.jpg') }});"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->

                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-4.jpg') }});"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->


                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-5.jpg') }})"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->


                      <tr class="">
                          <td class="car-image"><div class="img" style="background-image:url({{ asset('frontend_assets/images/car-6.jpg') }})"></div></td>
                        <td class="product-name">
                            <h3>Cheverolet SUV Car</h3>
                            <p class="mb-0 rated">
                                <span>rated:</span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                                <span class="ion-ios-star"></span>
                            </p>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 10.99</span>
                                    <span class="per">/per hour</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 60.99</span>
                                    <span class="per">/per day</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>

                        <td class="price">
                            <p class="btn-custom"><a href="#">Rent a car</a></p>
                            <div class="price-rate">
                                <h3>
                                    <span class="num"><small class="currency">$</small> 995.99</span>
                                    <span class="per">/per month</span>
                                </h3>
                                <span class="subheading">$3/hour fuel surcharges</span>
                            </div>
                        </td>
                      </tr><!-- END TR-->
                    </tbody>
                  </table>
              </div>
        </div>
    </div>
    </div>
</section>
@stop
