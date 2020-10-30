@extends('layouts.transport')
@section('content')
<div class="headerhome" style="background-image:url({{$page->image}})">
    <div class="container">
      <div class="row">
        <div class="col-md-10 offset-md-1">
          <h1 class="text-center">Compare, and <br>ship your parcels <strong>cheaper</strong>!</h1>

          <div id="rating-form-container">
            <div class="upela-form mt-4">
              <form action="">
                <div class="row row-destination-envoi">
                  <div class="col-lg-6 col-12 col-destination">
                    <div class="destinationbox">
                      <div class="upela-form-title">Your destination</div>
                      <div class="row form-group row-desti">
                        <div class="col-3 text-left">
                          <label class="input-label">Ship from</label>
                        </div>
                        <div class="col-9 text-left">
                          <div class="text-right">
                            <label class="radio-inline"><input type="radio" value="1" name="depart_adresse"
                                checked><span>Residential</span><span class="checkmark"></span></label>
                            <label class="radio-inline"><input type="radio" value="0"
                                name="depart_adresse"><span>Business</span><span class="checkmark"></span></label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Country</label>
                          <div class="custom-select">
                            <select class="form-control" name="depart">
                              <option value=""></option>
                              <option selected>FR</option>
                              <option>IT</option>
                              <option>ES</option>
                              <option>DE</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-9 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Ship from</label>
                          <input type="text" class="form-control" name="depart_ville" placeholder="Zipcode, city">
                        </div>
                      </div>
                      <div class="text-center text-lg-right"><i id="exchange" class="fas fa-exchange-alt"></i></div>
                      <div class="row form-group row-desti">
                        <div class="col-3 text-left">
                          <label class="input-label">Ship to</label>
                        </div>
                        <div class="col-9 text-left">
                          <div class="text-right">
                            <label class="radio-inline"><input type="radio" value="1" name="destination_adresse"
                                checked><span>Residential</span><span class="checkmark"></span></label>
                            <label class="radio-inline"><input type="radio" value="0"
                                name="destination_adresse"><span>Business</span><span
                                class="checkmark"></span></label>
                          </div>
                        </div>
                        <div class="col-lg-3 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Country</label>
                          <div class="custom-select">
                            <select class="form-control" name="depart">
                              <option value=""></option>
                              <option selected>FR</option>
                              <option>IT</option>
                              <option>ES</option>
                              <option>DE</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-9 col-12 text-left">
                          <label class="d-lg-none d-block mt-2" for="">Ship from</label>
                          <input type="text" class="form-control" name="destination_ville"
                            placeholder="Zipcode, city">
                        </div>
                      </div>
                      <div class="row form-group">
                        <div class="col-lg-6 col-12">
                          <label>Shipping date</label>
                          <div class="input-group date-input-group">
                            <input type="text" class="form-control datepicker" id="date_envoi" name="">
                            <div class="input-group-append">
                              <label class="input-group-text" for="date_envoi"><i
                                  class="far fa-calendar-alt"></i></label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6 col-12 col-envoi">
                    <div class="envoibox">
                      <div class="upela-form-title">Your shipment</div>
                      <div class="row form-group">
                        <div class="col-sm-12 text-left mb-3">
                          <div class="envoi_type_cont">
                            <label class="radio-inline envoi_type type_colis"><input type="radio" name="type"
                                checked><span class="colis">Parcel</span>
                              <div class="check"></div>
                            </label>
                            <label class="radio-inline envoi_type type_pli"><input type="radio" name="type"><span
                                class="pli">Envelope</span>
                              <div class="check"></div>
                            </label>
                            <label class="radio-inline envoi_type type_palette"><input type="radio" name="type"><span
                                class="palette">Pallet</span>
                              <div class="check"></div>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="row d-lg-none colis_details_actions mb-3">
                        <div class="col-6 text-left"><label class="input-label">Weight & dimensions</label></div>
                        <div class="col-6 text-right"><a href="javascript:void(0)" class="add_colis"><i
                              class="fas fa-plus-circle"></i>Add a parcel</a></div>
                      </div>
                      <div class="row form-group">
                        <div class="col-sm-12">
                          <div class="row colis_details">
                            <div class="col-sm-2 col-2 colis-detail-info">
                              <label>Qty <i class="fas fa-question-circle" data-toggle="tooltip" data-placement="top"
                                  title="Lorem ipsum"></i></label>
                              <input type="number" class="form-control colis_nb">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Weight (<span class="u_poid">kg</span>) / lbs</label>
                              <input type="number" class="form-control colis_pd">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Length (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_long">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Width (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_lar">
                            </div>
                            <div class="col-sm-2 col-5 colis-detail-info">
                              <label>Hight (<span class="u_mesure">cm</span>)</label>
                              <input type="number" class="form-control colis_haut">
                            </div>
                            <div class="col-sm-2 col-2 col-xs-12 colis-detail-info">
                              <a href="javascript:void(0)" class="remove_colis"><i class="fas fa-trash"></i></a>
                            </div>
                          </div>
                          <div class="row colis_details_actions bottom">
                            <div class="col-lg-6 col-12 text-left"><a href="javascript:void(0)"
                                id="switch_unit">Change units</a></div>
                            <div class="col-lg-5 d-lg-block d-none text-right"><a href="javascript:void(0)"
                                class="add_colis"><i class="fas fa-plus-circle"></i> Add a parcel</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-lg-6 offset-lg-3 col-12 offset-0">
                    <button type="submit" class="btn btn-lg btn-block btn-primary sendcolis">Send my parcel</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="pt-5 pb-5">
    <h2 class="text-center mb-4"><strong>The reliability and service of the leaders</strong> in international express
      delivery</h2>
    <div class="owl-carousel owl-theme">
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_UPS.png" alt="logo ups">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_DHL.png" alt="logo dhl">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_CHRONO.png" alt="logo chronopost">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_FEDEX.png" alt="logo fedex">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_MR.png" alt="logo mondial relay">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_TNT.png" alt="logo tnt">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_DPD.png" alt="logo dpd"></div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/logo-ziegler.png" alt="logo ziegler">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/logo-hesnault.png" alt="logo hesnault">
      </div>

      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_E2G.png" alt="logo easy2go">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_COLISSIMO.png" alt="logo colissimo">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_GLS.png" alt="logo gls">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_FLASH.png" alt="logo flash">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_COLISWEB.png" alt="logo colisweb">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_CORREOS.png" alt="logo correos">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_TIPSA.png" alt="logo tipsa">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_SDA.png" alt="logo sda">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_PUNTO.png" alt="logo punta pack">
      </div>
      <div class="item">
        <img src="./assets/images/Carriers/Logos-Home/LOGO_SEUR.png" alt="logo seur">
      </div>
    </div>
  </section>

  <section class="bg-gray">
    <div class="row row-warehouse">
      <div class="col-md-6 col-12 pr-5 pl-5 pt-5 pb-5">
        <h3 class="pt-4 pb-3">UPELA, the<strong> best way</strong> to ship a parcel!</h3>
        <p class="fz-16 mb-4">Thanks to UPELA exclusive prices, afford the services of the leaders in international
          express delivery while reducing your costs! Do not wait to find out about UPELA, in a few clicks, order your
          <strong>express delivery</strong> on our site.</p>
        <p class="fz-16 mb-4">According to your choice, DHL, FEDEX or UPS will collect your shipment, an enveloppe, a
          <strong>bulky parcel or a pallet</strong> and deliver it to your recipient. UPELA takes care of the
          <strong><a href="https://www.upela.com/en/send-parcel-to-france-41.html">delivery of your parcels in
              France</a></strong>, in <a href="/en/send-parcel-england-europe-35.html">Europe</a>, in <a
            href="https://www.upela.com/en/send-parcel-asia-37.html">Asia</a> and in <a
            href="https://www.upela.com/en/send-parcel-usa-107.html">USA</a>, with full transparency since at any
          moment, you can track your <strong>parcel</strong>.</p>
      </div>
      <div class="col-md-6 col-12 pr-0 pl-0">
        <img src="https://www.upela.comassets/images/warehouse.svg" alt="">
      </div>
    </div>
  </section>

  <section class="pt-5 pb-5">
    <div class="container">
      <h2 class="text-center mt-4 mb-5">Instructions for the use of the UPELA price comparison <strong>for sending
          your parcels</strong></h2>
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="upela-steps">
            <span class="number">1</span>
            <p>In order to send your <strong>mail, parcel or pallet</strong> internationally or in France, complete
              the information requested in the box "Begin sending": select the place of departure and destination in
              the drop-down list (type in the name of the city or the postal code). Tick the "business address" box if
              it is a business address, leave blank if it is a personal address.
            <p></p>Enter the weight and size of your parcel. Choose the date that the carrier can collect your
            consignment. Compare our <strong>carriers rates</strong> by clicking on "compare offers!"</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="upela-steps">
            <span class="number">2</span>
            <p>Here you may access all of our <strong>quotes for express transportation</strong>. These give
              references to the name of the carrier (FedEx, DHL or UPS), the price of shipping (excluding and
              including all taxes), the expected delivery date and the type of carrier.
            <p>If you have a <a href="https://www.upela.com/en/about-upela.html#about-pourquoi-compte-pro">UPELA
                professional account</a>, the <strong>price for parcels, mail and palettes</strong> are even more
              advantageous (the creation of a professional or individual account is free and without obligation).</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="upela-steps">
            <span class="number">3</span>
            <p>Once the method of <strong>express delivery</strong> has been selected, complete all the information
              concerning the sender and the addressee, or select your contacts in the address book. Also indicate the
              desired time period at the place where the consignment must be picked up.
            <p>In the case of <strong>imported parcels</strong>, first check the availability of your correspondent.
              You may also drop off your package at the agency.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-12 offset-md-4">
          <div class="upela-steps">
            <span class="number">4</span>
            <p>A summary page summarises all the information of your consignment. Confirm your order and choose your
              credit card to access the secure online payment. With a pro Upela account you can <a
                href="https://www.upela.com/en/pay-later-by-deferred-payment-99.html">pay for your consignment at a
                later date</a>.</p>
          </div>
        </div>
        <div class="col-md-4 col-12">
          <div class="upela-steps">
            <span class="number">5</span>
            <p>Your order is validated. You can print your transportation documents, view your invoice, view the
              parcel tracking or cancel your consignment. The information of your consignment are sent by email: your
              shipping note, pro-forma invoice (non European Union consignments) and your Upela invoice.
            <p>All you have to do is stick your transport voucher on your package (envelope, parcel or pallet) and
              wait for the courier.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection