<section id="mission-section">
    <div  id="mission-wrapper">
    <div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <img id="mission-pic" src="@asset('images/collage.svg')"/>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <h2 class="animated fadeInUp" >Mission Statement</h2>
            <p>{!! get_field('mission_statement') !!}</p>
        </div>
        <div data-aos="fade-up"
{{--     data-aos-offset="200"
 --}}    data-aos-delay="10"
    data-aos-duration="1000"
    data-aos-easing="ease-in-out"
    data-aos-mirror="true"
    data-aos-once="false"
    data-aos-anchor-placement="top-center" class="container capital-campaign-home">
            <h2>{!! get_field('cc_cta_title') !!}</h2>
            <h5 id="cc_cta_subtitle">{!! get_field('cc_cta_subtitle') !!}</h5>
            <button class="cta_button teal" id="cc_cta_button">Invest In Family</button>
        </div>
    </div>
</div>
</div>
</section>