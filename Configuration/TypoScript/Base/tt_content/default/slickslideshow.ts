tt_content.slickslideshow < tt_content.image
tt_content.slickslideshow {
    // Remove header
  10 >
  20 {
    layout {
      default {
        override  >
          // Images shouldn\'t get any wrap
        value     = ###IMAGES###
      }
      key {
        field >
          // Take the default layout
        value = default
      }
    }
    rendering {
      noCaption {
        allStdWrap {
          dataWrap >
          dataWrap = |
        }
      }
      singleNoCaption {
        allStdWrap {
          innerWrap {
            cObject.0.value = |
          }
          dataWrap >
          dataWrap = |
        }
      }
    }
      // Take the renderMethod singleNoCaption by default
    renderMethod = singleNoCaption
  }
  wrap = <div class="{$plugin.slick.carousel.css.class}">|</div>
}