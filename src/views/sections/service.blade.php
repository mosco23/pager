<!--====================================================
                   SERVICE-HOME
======================================================-->
<section id="service-h">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="service-himg">
                    <iframe src="https://www.youtube.com/embed/754f1w90gQU?rel=0&amp;controls=0&amp;showinfo=0"
                        frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-h-desc">
                    <h3>We are Providing great Services</h3>
                    <div class="heading-border-light"></div>
                    <p>Businessbox offer the full spectrum of services to help organizations work better. Everything
                        from creating standards of excellence to training your people to work in more effective ways.
                    </p>
                    <div class="service-h-tab">
                        <nav class="nav nav-tabs" id="myTab" role="tablist">
                            @foreach ($tabSection['service']['items'] as $delay => $item)
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-expanded="true">
                                    {{$item['title']}}
                                </a>
                            @endforeach
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @foreach ($tabSection['service']['items'] as $delay => $item)
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <p>
                                        {{$item['description']}}
                                    </p>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
