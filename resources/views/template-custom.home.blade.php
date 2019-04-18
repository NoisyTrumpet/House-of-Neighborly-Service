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
            var r = Math.floor(Math.random() * (overlay.length - 1));
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
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/1.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/2.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/3.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/4.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/5.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/6.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/7.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/8.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/9.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/10.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/11.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/12.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/13.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/14.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/15.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/16.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/17.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/18.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/19.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                        <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/20.jpg" alt="House of Neighborly Service">
                    </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/21.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/22.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/23.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/24.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                        <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/25.jpg" alt="House of Neighborly Service">
                    </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/26.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/27.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/28.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/29.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/30.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/31.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/32.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/33.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/34.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/35.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/36.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/37.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/38.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/39.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/40.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/49.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/42.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/43.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/44.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/45.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/46.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/47.jpg" alt="House of Neighborly Service">
                </span>
    <span class="img-here has-overlay">
                    <img class="hvr-grow" src="/wp-content/themes/hns/resources/assets/images/faces/48.jpg" alt="House of Neighborly Service">
                </span>







  </div>
  <div class="impact-block center-block text-center cb-girls-to-impact cb-impact-to-panel">
    <h1 style="font-family: 'Open Sans'; font-weight: 800;">House of Neighborly Service</h1>
    <p style="font-family: 'Gentium Basic';">Offering support to San Antonio Westside families through every stage of life.</p>
{{--     <button href="/impact-reach/" class="btn btn-blue btn-large" target="_top">See Our Impact</button>
 --}}
  </div>

  <style>
    /* Home Page */
.impact {
    min-height: 850px;
    position: relative;
    overflow: hidden
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
    width: 100%
}

.impact .impact-image-wrapper span img {
    max-width: 100%;
    height: 100%;
    width: 100%;
    &:before {
        content: '';
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-image: linear-gradient(to bottom right,#002f4b,#dc4225);
    opacity: .6;
    }
}


.impact .impact-block {
    background-color: rgba(245, 242, 236, .9);
    position: relative;
    width: 692px;
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
    color: #127f98;
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
    color: #127f98;
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