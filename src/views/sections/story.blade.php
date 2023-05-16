<!--====================================================
                      STORY
======================================================-->
<section id="story">
    <div class="container">
        <div class="row title-bar">
            <div class="col-md-12">
                <h1 class="wow fadeInUp">Our Success Tranformation Story</h1>
                <div class="heading-border"></div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="story-himg">
                    <img src="img/image-4.jpg" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="story-desc">
                    <h3>How to grow world with Us</h3>
                    <div class="heading-border-light"></div>
                    <p>Everyone defines success differently – as much as there are people, there are different opinions.
                        Number one in our priority list is the success of our students, alumni and their employers. We
                        work hard in the name of the success of our alumni – being among the best and holding the high
                        employment rate. Many desktop publishing packages and web page editors now use Lorem Ipsum..
                    </p>
                    <p>You can find some thoughts on success from our students and alumni here – every story is unique,
                        but this is what success is. Everybody sees it differently. Many desktop publishing packages and
                        web page editors now use Lorem Ipsum.</p>
                    <p class="text-right" style="font-style: italic; font-weight: 700;"><a href="#">Businessbox</a></p>
                    <div class="title-but"><button class="btn btn-general btn-green" role="button">Read More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($tabSection['story']['items'] as $delay => $item)
            <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-delay="{{($delay + 1) * 0.1}}s">
                <div class="story-descb">
                    <img src="{{asset('storage/'.$item['image'])}}" class="img-fluid" alt="{{ $item['image'] }}">
                    <h6>{{$item['title']}}</h6>
                    <p>{{$item['description']}}</p>
                    <a href="#"><i class="fa fa-arrow-circle-o-right"></i> Read More</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
';'