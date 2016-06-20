page {
  jsFooterInline {
      // For proper comment only
    60807 {
    }
      // slick
    60807 = COA
    60807 {
        // Wrap begin
      10 = TEXT
      10 {
        value (
          jQuery(document).ready(function(){
            jQuery('.{$plugin.slick.carousel.css.class}').slick({
)
      }
        // Configuration default
      20 = TEXT
      20 {
        value (

                adaptiveHeight  : {$plugin.slick.carousel.javascript.properties.adaptiveHeight}
              , arrows          : {$plugin.slick.carousel.javascript.properties.arrows}
              , autoplay        : {$plugin.slick.carousel.javascript.properties.autoplay}
              , autoplaySpeed   : {$plugin.slick.carousel.javascript.properties.autoplaySpeed}
              , cssEase         : '{$plugin.slick.carousel.javascript.properties.cssEase}'
              , dots            : {$plugin.slick.carousel.javascript.properties.dots}
              , fade            : {$plugin.slick.carousel.javascript.properties.fade}
              , infinite        : {$plugin.slick.carousel.javascript.properties.infinite}
              , initialSlide    : {$plugin.slick.carousel.javascript.properties.initialSlide}
              , rows            : {$plugin.slick.carousel.javascript.properties.rows}
              , slidesPerRow    : {$plugin.slick.carousel.javascript.properties.slidesPerRow}
              , slidesToShow    : {$plugin.slick.carousel.javascript.properties.slidesToShow}
              , slidesToScroll  : {$plugin.slick.carousel.javascript.properties.slidesToScroll}
              , speed           : {$plugin.slick.carousel.javascript.properties.speed}
              , vertical        : {$plugin.slick.carousel.javascript.properties.vertical}
)
      }
        // Configuration responsive
      30 = TEXT
      30 {
          // Constant Editor
        if =
        if {
          isTrue = {$plugin.slick.carousel.javascript.responsive.if}
        }
        value (

              , responsive: [
                {
                    breakpoint: {$plugin.slick.carousel.javascript.responsive.large.breakpoint}
                  , settings: {
                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.large.settings.autoplaySpeed}
                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.large.settings.slidesToShow}
                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.large.settings.slidesToScroll}
                  }
                },
                {
                    breakpoint: {$plugin.slick.carousel.javascript.responsive.medium.breakpoint}
                  , settings: {
                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.medium.settings.autoplaySpeed}
                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.medium.settings.slidesToShow}
                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.medium.settings.slidesToScroll}
                  }
                },
                {
                    breakpoint: {$plugin.slick.carousel.javascript.responsive.small.breakpoint}
                  , settings: {
                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.small.settings.autoplaySpeed}
                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.small.settings.slidesToShow}
                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.small.settings.slidesToScroll}
                  }
                }
              ]
)
      }
        // Wrap end
      40 = TEXT
      40 {
        value (

            });
          });
)
      }
    }
  }
}

