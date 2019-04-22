{{--
  Template Name: Home Page Template
--}}

@extends('layouts.app')
@section('content')
{{-- 	@include('partials.page-header')
 --}}
<style>
    </style>
    <script type="text/javascript">
 var $window = $(window);
    var hijack = $('.hijack'), hasHijack = hijack.length > 0;
    var isMobile = $window.width() <= 991;
    var imagesLoaded = false;
    var impactReady = true,
        svgUseAnimation = { literacy2girls: true, girls2impact: true, girls2panel: true, impact2panel: true, panel2button: true },
        animationReady = {
            literacy: false,
            literacyConnect: false,
            girlEducation: false,
            girlEducationConnect: false,
            impact: false,
            impactConnect: false,
            donationConnect: false
        },
        svgAnimation = 1;

    function paintHomepage() {

        // impact
        if (!animationReady.impact) {
            if (position.impact <= scrollTop) {
                window.impactInterval = setInterval(function () {
                    removeImpactOverlay();
                }, 10);
                animationReady.impact = true;
            }
        }

    }

    function paintHomepageInstantly() {
        window.impactInterval = setInterval(function () {
            removeImpactOverlay();
        }, 10);

    }

    $(window).on('load', function () {
        var m = $window.width() <= 991;
        if (isMobile !== m) {
            svgCircle();
            isMobile = m;
        }
        paintHomepageInstantly();
    });

    $window.on('scroll', function (e) {
        if (imagesLoaded) {
            if (!isPagePainted()) {
                paintHomepage();
            }
        }
    });

    function removeImpactOverlay() {
        var overlay = $('.impact').find('.has-overlay');
        if (overlay.length) {
            var r = Math.floor(Math.random() * (overlay.length - 7));
            if (overlay.get(r)) {
                $(overlay.get(r)).removeClass('has-overlay');
            }

        } else {
            clearInterval(window.impactInterval);
            impactReady = true;
        }
    }
    </script>
<section class="impact">
  <div class="impact-image-wrapper">
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face1.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face2.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face3.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face4.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face5.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face6.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face7.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face8.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face9.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face10.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face11.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face12.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face13.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face14.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face15.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face16.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face17.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face18.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face19.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                        <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face20.jpg" alt="House of Neighborly Service">
                    </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face21.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face22.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face23.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face24.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                        <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face25.jpg" alt="House of Neighborly Service">
                    </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face26.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face27.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face28.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face29.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face30.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face31.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face32.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face33.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face34.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face35.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face36.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face37.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face38.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face39.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face40.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face49.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face42.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face43.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face44.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face45.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face46.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face47.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/face48.jpg" alt="House of Neighborly Service">
                </span>
  </div>
  <div class="impact-block center-block text-center cb-girls-to-impact cb-impact-to-panel">
    <h1 style="font-family: 'Open Sans'; font-weight: 800;">House of Neighborly Service</h1>
    <p style="font-family: 'Gentium Basic';">{!! get_field('hero_subtitle')!!}</p>
{{--     <button href="/impact-reach/" class="btn btn-blue btn-large" target="_top">See Our Impact</button>
 --}}
  </div>
</section>
<div  id="mission-wrapper">
    <div class="row">
        <div class="col-4">
            <img id="mission-pic" src="@asset('images/collage.svg')"/>
        </div>
        <div class="col-8">
            <h2>Mission Statement</h2>
            <p>{!! get_field('mission_statement') !!}</p>
        </div>
        <div class="container capital-campaign-home">
            <h2>{!! get_field('cc_cta_title') !!}</h2>
            <h5 id="cc_cta_subtitle">{!! get_field('cc_cta_subtitle') !!}</h5>
            <button class="cta_button teal" id="cc_cta_button">Invest In Family</button>
        </div>
    </div>

</div>


  <style>
    html {
  font-size: 16px;
}
@media screen and (min-width: 320px) {
  html {
    font-size: calc(16px + 6 * ((100vw - 320px) / 680));
  }
}
@media screen and (min-width: 1000px) {
  html {
    font-size: 22px;
  }
}

.cta_button{
    padding-top: 1rem;
    padding-bottom: 1rem;
    padding-left: 2rem;
    padding-right: 2rem;

}

.teal{
    background-color: rgb(112, 169, 161);
}

.menu-item a{
    font-family: 'Open Sans';
    text-transform: uppercase;
    color: rgb(46, 98, 127)!important;
    font-weight: 600;
}
    /* Home Page */

    /* Mission Statement */
    #mission-wrapper{
        background-color: #2E627F;
        padding-top: 3rem;
        padding-bottom: 3rem;
        width: 100%;
    }

    .capital-campaign-home{
        padding-top: 3rem;
        padding-bottom: 3rem;
    }
    .capital-campaign-home h2{
        font-family: 'Open Sans';
        font-weight: 800;
        color: #ffffff;
        text-align: center;
/*        text-transform: uppercase;
*/    }
    #cc_cta_subtitle{
        font-family: 'Gentium Basic';
        font-weight: 300;
        color: #ffffff;
        text-align: center;
        max-width: 75%;
        display: block;
        margin: 0 auto;
    }

    .white{
        color: #ffffff;
    }

    #mission-wrapper .col-8 h2{
        font-family: 'Open Sans';
        font-weight: 800;
        color: #ffffff;
        text-align: center;
        text-transform: uppercase;
    }

    #mission-wrapper .col-8 p{
        font-family: 'Gentium Basic';
        font-weight: 100;
        color: #ffffff;
        text-align: left;
        max-width: 75%;
        display: block;
        margin: 0 auto;
    }

    #mission-pic{
        max-width: 70%;
        margin: 0 auto;
        display: block;
    }
    /* Home Hero*/
.impact{
    min-height: 750px;
    position: relative;
    overflow: hidden
}
.impact-image-wrapper{
    height: 100%;
}

@media(max-width:991px) {
    .impact {
        min-height: 500px
    }
}

@media(max-width:767px) {
    .impact {
        min-height: 308px
    }
}

@media only screen and (max-device-width:667px)and (-webkit-device-pixel-ratio:2) {
    .impact {
        min-height: 297px
    }
}

@media screen and (min-device-width:414px)and (-webkit-device-pixel-ratio:3) {
    .impact {
        min-height: 287px
    }
}

@media(max-width:330px) {
    .impact {
        min-height: 286px
    }
}

.impact .impact-image-wrapper {
    display: flex;
    flex-flow: row wrap;
    left: 0;
    position: absolute;
    top: 0
}

.impact .impact-image-wrapper span {
    flex-basis: calc(8.33333333%);
    position: relative
}

@media(max-width:1230px) {
    .impact .impact-image-wrapper span {
        flex-basis: calc(10%)
    }
}

@media(max-width:991px) {
    .impact .impact-image-wrapper span {
        flex-basis: calc(12.5%)
    }
}

.impact .impact-image-wrapper span.has-overlay:before {
    background: rgba(23, 202, 243, .08);

    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%
}

.impact .impact-image-wrapper span.has-overlay:after {
    background: rgba(40, 40, 40, .35);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;

}

.impact .impact-image-wrapper span img {
    max-width: 100%;
    height: 100%;
    width: 100%;
}


.impact .impact-block {
    background-color: rgba(46, 98, 127, .8);

    position: relative;
    width: 1000px;
    height: 256px;
    top: 250px;
    z-index: 21;
    display: block;
    margin: 0 auto;

}

@media(max-width:991px) {
    .impact .impact-block {
        min-height: 10px;
        height: auto;
        width: 100%;
        max-width: 75%;
        top: 80px;
        padding: 60px 0;
        margin-left: 15%
    }
}

@media(max-width:767px) {
    .impact .impact-block {
        top: 40px;
        padding: 44px 0
    }
}

.impact .impact-block h1 {
    color: #ffffff;
    font-size: 63px;
    letter-spacing: -.71px;
    text-align: center;
    display: block;
    margin: 0;
    padding-top: 45px;
    line-height: 63px;
    font-weight: 600
}

@media(max-width:991px) {
    .impact .impact-block h1 {
        font-size: 36px;
        padding-top: 0
    }
}

@media(max-width:767px) {
    .impact .impact-block h1 {
        font-size: 24px;
        line-height: 28px;
        padding-top: 0
    }
}

.impact .impact-block p {
    font-size: 28px;
    color: #ffffff;
    text-align: center;
    margin: 14px 0 0 0;
    line-height: 28px;
    font-family: proxima-nova, sans-serif;
    font-weight: 400
}

@media(max-width:991px) {
    .impact .impact-block p {
        font-size: 22px
    }
}

@media(max-width:767px) {
    .impact .impact-block p {
        font-size: 16px;
        line-height: 18px
    }
}

.impact .impact-block .btn-blue {
    margin-top: 19px;
    letter-spacing: 1.5px
}

@media(max-width:991px) {
    .impact .impact-block .btn-blue {
        bottom: -115px;
        padding: 18px 14px;
        left: -5%;
        margin-top: 0;
        position: absolute;
        float: left;
        width: 110%
    }
}

@media(max-width:767px) {
    .impact .impact-block .btn-blue {
        bottom: -75px;
        padding: 10px 14px
    }
}

.img-here:after{
    background: rgba(112, 169, 161, .5);
    content: "";
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%

}

/*.img-here:{
    -webkit-filter: grayscale(100%);  Safari 6.0 - 9.0
  filter: grayscale(100%);
}*/

/* Grow */
.hvr-grow {
    display: inline-block;
    vertical-align: middle;
    transform: translateZ(0);
    box-shadow: 0 0 1px rgba(0, 0, 0, 0);
    backface-visibility: hidden;
    -moz-osx-font-smoothing: grayscale;
    transition-duration: 0.3s;
    transition-property: transform;
}

.hvr-grow:hover,
.hvr-grow:focus,
.hvr-grow:active {
    transform: scale(1.1);
}
  </style>

@endsection