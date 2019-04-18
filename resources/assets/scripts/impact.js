import $ from 'jquery';

var impactReady = false,
                            svgUseAnimation = {
                                literacy2girls: true,
                                literacy2tab: true,
                                girls2change: true,
                                girls2tab: true,
                                panel2button: true
                            },
                            animationReady = {
                                literacy2tab: false,
                                literacy2girls: false,
                                girls2tab: false,
                                girls2change: false,
                                impact: true,
                                panel2button: false
                            },
                            svgAnimation = 1,
                            svgAnimationLong = 4;

                            // impact
                            if (!animationReady.impact) {
                                if (position.impact <= scrollTop /* + $window.height() / 2*/ ) {
                                    window.impactInterval = setInterval(function() {
                                        removeImpactOverlay();
                                    }, 10);
                                    animationReady.impact = true;
                                }
                            }
                            window.impactInterval = setInterval(function() {
                                removeImpactOverlay();
                            }, 10);
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