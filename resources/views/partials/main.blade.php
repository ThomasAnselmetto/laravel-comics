@extends('layouts.app')
@section('main')
<section>
    <div class="container">
      <div class="shop-card">
        <img
          src="{{Vite::asset("public/images/buy-comics-digital-comics.png")}}"
          alt="buy-comics"
        />
        <h5>DIGITAL COMICS</h5>
      </div>
      <div class="shop-card">
        <img src="{{Vite::asset("public/images/buy-comics-merchandise.png")}}" />
        <h5>DC MERCHANDISE</h5>
      </div>
      <div class="shop-card">
        <img
          src="{{Vite::asset("public/images/buy-comics-subscriptions.png")}}"
          alt="shop-locator"
        />
        <h5>SUBSCRIPTION</h5>
      </div>
      <div class="shop-card">
        <img
          src="{{Vite::asset("public/images/buy-comics-shop-locator.png")}}"
          alt="subscription"
        />
        <h5>COMIC SHOP LOCATOR</h5>
      </div>
      <div class="shop-card">
        <img src="{{Vite::asset("public/images/buy-dc-power-visa.svg")}}" />
        <h5>DC POWER VISA</h5>
      </div>
    </div>
  </section>
@endsection