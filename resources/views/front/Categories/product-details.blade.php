@extends('front.layouts.master')
@section('content')
    <div class="page-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h3>Modern Warfare® II</h3>
                    <span class="breadcrumb"><a href="#">Home</a> > <a href="#">Shop</a> >Name Of Product:
                        {{ $product->name }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="single-product section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="{{ $product->image }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <h4>Name: {{ $product->name }}</h4>
                    <h2>price:</h2> <span class="price">{{ $product->price }}</span>
                    <p><strong>Description:</strong> {{ $product->description }}</p>
                    <form action="{{ route('cart.add', ['productId' => $product->id]) }}" method="POST">
                        @csrf
                        <label for="quantity">Quantity:</label>
                        <input type="number" name="quantity" id="quantity" value="1" min="1">
                        <button type="submit">Add to Cart</button>
                    </form>
                    <ul>
                        <li><span>Game ID:</span> COD MMII</li>
                        <li><span>Genre:</span> <a href="#">Action</a>, <a href="#">Team</a>, <a
                                href="#">Single</a></li>
                        <li><span>Multi-tags:</span> <a href="#">War</a>, <a href="#">Battle</a>, <a
                                href="#">Royal</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="sep"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="more-info">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tabs-content">
                        <div class="row">
                            <div class="nav-wrapper ">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                                            data-bs-target="#description" type="button" role="tab"
                                            aria-controls="description" aria-selected="true">Description</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="reviews-tab" data-bs-toggle="tab"
                                            data-bs-target="#reviews" type="button" role="tab" aria-controls="reviews"
                                            aria-selected="false">Reviews (3)</button>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="description" role="tabpanel"
                                    aria-labelledby="description-tab">
                                    <p>You can search for more templates on Google Search using keywords such as "templatemo
                                        digital marketing", "templatemo one-page", "templatemo gallery", etc. Please tell
                                        your friends about our website. If you need a variety of HTML templates, you may
                                        visit Tooplate and Too CSS websites.</p>
                                    <br>
                                    <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan
                                        activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean
                                        shorts edison bulb poutine next level humblebrag la croix adaptogen. Hashtag poke
                                        literally locavore, beard marfa kogi bruh artisan succulents seitan tonx waistcoat
                                        chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of bitters
                                        asymmetrical gluten-free art party raw denim chillwave tousled try-hard succulents
                                        street art.</p>
                                </div>
                                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                    <p>Coloring book air plant shabby chic, crucifix normcore raclette cred swag artisan
                                        activated charcoal. PBR&B fanny pack pok pok gentrify truffaut kitsch helvetica jean
                                        shorts edison bulb poutine next level humblebrag la croix adaptogen. <br><br>Hashtag
                                        poke literally locavore, beard marfa kogi bruh artisan succulents seitan tonx
                                        waistcoat chambray taxidermy. Same cred meggings 3 wolf moon lomo irony cray hell of
                                        bitters asymmetrical gluten-free art party raw denim chillwave tousled try-hard
                                        succulents street art.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
