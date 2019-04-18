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
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                        <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                    </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                        <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                    </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>
    <span class="img-here has-overlay">
                    <img src="https://picsum.photos/159/127" alt="Room to Read is a leading non-profit focused on girls' education and children's literacy in Asia and Africa. Learn more, donate, and get involved.">
                </span>





  </div>
  <div class="impact-block center-block text-center cb-girls-to-impact cb-impact-to-panel">
    <h1>House of Neighborly Service</h1>
    <p>Offering support to San Antonio Westside families through every stage of life.</p>
    <button href="/impact-reach/" class="btn btn-blue btn-large" target="_top">See Our Impact</button>

  </div>

    <script type="text/javascript">



    </script>

    <style>
.impact {
    min-height: 650px;
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
    width: 100%
}

.impact .impact-block {
    background-color: rgba(245, 242, 236, .9);
    position: relative;
    width: 692px;
    height: 256px;
    top: 200px;
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
    </style>
@endsection