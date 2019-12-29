
     <script src="./js/main.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="js/lightslider.js"></script> -->
    <script src="js/lazysizes.min.js" async=""></script>
    <!-- ==================================================================================== -->

    <!-- Submit the Form to Google Using "AJAX" -->
    <script data-cfasync="false" type="text/javascript" src="js/main.js"></script>


    <!-- ==================================================================================== -->
    <!-- <script src="js/lightslider.js"></script> -->
    <!-- ==================================================================================== -->

    <!-- LIGHT SLIDER -->

    <!-- slider MAIN -->
    <script>
        $('.slider__main').lightSlider({
            gallery: false,
            item: 1,
            auto: true,
            loop: true,
            pager: true,
            pause: 12000,
            speed: 3000,
            slideMargin: 10,
            controls: true,
            mode: "slide",
            addClass: "slider__main",
            onSliderLoad: function () {
                $('#autoWidth').removeClass('cS-hidden');
            }
        });

        // -----------------------------------------------------
        $(document).ready(function () {
            $("#lightSlider").lightSlider({

                item: 3,
                pager: false,
                slideMargin: 10,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            item: 1,
                            slideMove: 1
                        }
                    }
                ]
            });

        });

        // ------------------------------------------  sta drugu kazu o nama
        $(document).ready(function () {
            $(".image-gallery").lightSlider({

                item: 3,
                pager: false,
                slideMargin: 10,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            item: 1,
                            slideMove: 1
                        }
                    }
                ]
            });

        });

        $(document).ready(function () {
            $(".image-gallery-2").lightSlider({

                item: 3,
                pager: false,
                slideMargin: 10,
                easing: 'cubic-bezier(0.25, 0, 0.25, 1)',
                speed: 600,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            item: 2,
                            slideMove: 1,
                            slideMargin: 6,
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            item: 1,
                            slideMove: 1
                        }
                    }
                ]
            });

        });
    </script>

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v5.0&appId=572662936644956&autoLogAppEvents=1">
    </script>