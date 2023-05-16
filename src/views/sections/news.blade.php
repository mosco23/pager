<!--====================================================
                       NEWS
======================================================-->
<section id="comp-offer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 col-sm-6  desc-comp-offer wow fadeInUp" data-wow-delay="0.2s">
                <h2>Latest News</h2>
                <div class="heading-border-light"></div>
                <button class="btn btn-general btn-green" role="button">See More</button>
            </div>
            @foreach ($tabSection['service']['items'] as $delay => $item)
                <div class="col-md-3 col-sm-6 desc-comp-offer wow fadeInUp" data-wow-delay="{{($delay + 1) * 0.2}}s">
                    <div class="desc-comp-offer-cont">
                        <div class="thumbnail-blogs">
                            <div class="caption">
                                <i class="fa fa-chain"></i>
                            </div>
                            <img src="{{asset('storage/'.$item['image'])}}" class="img-fluid" alt="{{$item['image']}}">
                        </div>
                        <h3>{{$item['title']}}</h3>
                        <p class="desc">
                            {{$item['description']}}
                        </p>
                        <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Learn More</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
