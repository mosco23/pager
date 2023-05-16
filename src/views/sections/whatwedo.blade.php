<!--====================================================
                     WHAT WE DO
======================================================-->
<section class="what-we-do bg-gradiant">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <h3>What we Do</h3>
                <div class="heading-border-light"></div>
                <p class="desc">We partner with clients to put recommendations into practice. </p>
            </div>
            <div class="col-md-9">
                <div class="row">
                    @foreach ($tabSection['whatwedo']['items'] as $item)
                        <div class="col-md-4  col-sm-6">
                            <div class="what-we-desc">
                                <i class="fa fa-briefcase"></i>
                                <h6>{{$item['title']}}</h6>
                                <p class="desc">{{$item['description']}}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
