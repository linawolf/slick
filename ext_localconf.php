<?php

if ( !defined( 'TYPO3_MODE' ) )
{
  die( 'Access denied.' );
}

/**
 * Include TypoScript for tt_content.slickitem: constants
 */
$slickItemTypoScriptConstants = trim( '
plugin.slick {
  item {
    view {
      templateRootPath = EXT:slick/Resources/Private/Templates/
      partialRootPath = EXT:slick/Resources/Private/Partials/
      layoutRootPath = EXT:slick/Resources/Private/Layouts
      settings {
        headerTag = h4
      }
    }
  }
}
' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $_EXTKEY, 'constants', $slickItemTypoScriptConstants
);


/**
 * Include TypoScript for tt_content.slickitem: setup
 */
$slickItemTypoScriptSetup = trim( '
tt_content.slickitem = FLUIDTEMPLATE
tt_content.slickitem {
  file = {$plugin.slick.item.view.templateRootPath}Item/Render.html
  partialRootPath = {$plugin.slick.item.view.partialRootPath}
  layoutRootPath = {$plugin.slick.item.view.layoutRootPath}
  settings {
    headerTag = {$plugin.slick.item.view.settings.headerTag}
    textTag   = {$plugin.slick.item.view.settings.textTag}
  }
}
' );
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
        $_EXTKEY, 'setup', $slickItemTypoScriptSetup, 43
);

/**
 * Include TypoScript for tt_content.slickcarousel: constants
 */
//$slickCarouselTypoScriptConstants = trim( '
//plugin.slick {
//  carousel {
//    css {
//      class = single-item
//      file {
//        library   = EXT:slick/Resources/Public/JavaScript/slick-1.5.0/slick/slick.css
//        extension = EXT:slick/Resources/Public/CSS/extension.css
//      }
//    }
//    html {
//      id = 62478
//    }
//    javascript {
//      file  = EXT:slick/Resources/Public/JavaScript/slick-1.5.0/slick/slick.js
//      properties {
//        adaptiveHeight  = false
//        arrows          = true
//        autoplay        = true
//        autoplaySpeed   = 3000
//        cssEase         = ease
//        dots            = true
//        fade            = false
//        infinite        = true
//        initialSlide    = 0
//        rows            = 1
//        slidesPerRow    = 1
//        slidesToShow    = 1
//        slidesToScroll  = 1
//        speed           = 3000
//        vertical        = false
//      }
//      responsive {
//        large {
//          breakpoint = 1024
//          settings {
//            autoplaySpeed   = 3000
//            slidesToShow    = 3
//            slidesToScroll  = 3
//          }
//        }
//        medium {
//          breakpoint = 600
//          settings {
//            autoplaySpeed   = 3000
//            slidesToShow    = 2
//            slidesToScroll  = 2
//          }
//        }
//        small {
//          breakpoint = 480
//          settings {
//            autoplaySpeed   = 3000
//            slidesToShow    = 1
//            slidesToScroll  = 1
//          }
//        }
//      }
//    }
//  }
//}
//');
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
//        $_EXTKEY, 'constants', $slickCarouselTypoScriptConstants
//);


/**
 * Include TypoScript for tt_content.slickcarousel: setup
 */
//$slickCarouselTypoScriptSetup = trim( '
//tt_content.slickcarousel < tt_content.shortcut
//tt_content.slickcarousel {
//  wrap = <div class="{$plugin.slick.carousel.css.class}">|</div>
//}
//tt_content.slickslideshow < tt_content.image
//tt_content.slickslideshow {
//    // Remove header
//  10 >
//  20 {
//    layout {
//      default {
//        override  >
//          // Images shouldn\'t get any wrap
//        value     = ###IMAGES###
//      }
//      key {
//        field >
//          // Take the default layout
//        value = default
//      }
//    }
//    rendering {
//      noCaption {
//        allStdWrap {
//          dataWrap >
//          dataWrap = |
//        }
//      }
//      singleNoCaption {
//        allStdWrap {
//          innerWrap {
//            cObject.0.value = |
//          }
//          dataWrap >
//          dataWrap = |
//        }
//      }
//    }
//      // Take the renderMethod singleNoCaption by default
//    renderMethod = singleNoCaption
//  }
//  wrap = <div class="{$plugin.slick.carousel.css.class}">|</div>
//}
//page {
//  cssInline {
//      // slick
//    {$plugin.slick.carousel.html.id} = TEXT
//    {$plugin.slick.carousel.html.id} {
//      value (
//        .{$plugin.slick.carousel.css.class}{
//          margin:{$plugin.slick.carousel.css.margins.item};
//        }
//        .slick-slide figure {
//          margin:0;
//        }
//        .border {
//          border-left: {$plugin.slick.carousel.css.margins.content.left} solid #c0c;
//        }
//        .slick-header,
//        .slick-text {
//          display: inline;
//          position: absolute;
//          z-index: 1;
//        }
//        .slick-header {
//          bottom: {$plugin.slick.carousel.css.header.bottom};
//          top: {$plugin.slick.carousel.css.header.top};
//        }
//        .slick-text {
//          bottom: {$plugin.slick.carousel.css.text.bottom};
//          top: {$plugin.slick.carousel.css.text.top};
//        }
//        .slick-header .span,
//        .slick-text .span {
//        }
//        .slick-header .span {
//          display: inline;
//        }
//        .slick-header .span {$plugin.slick.item.view.settings.headerTag} {
//          background-color: {$plugin.slick.carousel.css.header.background-color};
//          color: {$plugin.slick.carousel.css.header.color};
//          font-size: {$plugin.slick.carousel.css.header.font-size};
//          font-weight: {$plugin.slick.carousel.css.header.font-weight};
//        }
//        .slick-text .span {
//          display: inline;
//        }
//        .slick-text .span p {
//          background-color: {$plugin.slick.carousel.css.text.background-color};
//          color: {$plugin.slick.carousel.css.text.color};
//          font-size: {$plugin.slick.carousel.css.text.font-size};
//          font-weight: {$plugin.slick.carousel.css.text.font-weight};
//        }
//        /* color */
//        .slick-next:before,
//        .slick-prev:before {
//          color: {$plugin.slick.carousel.css.colors.arrows};
//        }
//        .slick-dots li button:before {
//          color: {$plugin.slick.carousel.css.colors.dots.default};
//        }
//        .slick-dots li.slick-active button:before {
//          color: {$plugin.slick.carousel.css.colors.dots.active};
//        }
//        /* position */
//        .slick-dots {
//          bottom: {$plugin.slick.carousel.css.position.dots.bottom};
//          margin-left:0;
//          margin-right:0;
//        }
//        .slick-next {
//          right: {$plugin.slick.carousel.css.position.next.right};
//        }
//        .slick-prev {
//          left: {$plugin.slick.carousel.css.position.prev.left};
//        }
//)
//    }
//  }
//  includeCSS {
//    slickLibrary  = {$plugin.slick.carousel.css.file.library}
//    slickTheme    = {$plugin.slick.carousel.css.file.theme}
//    slickTheme {
//        // constant editor
//      if =
//      if {
//        isTrue = {$plugin.slick.carousel.css.file.theme.if}
//      }
//    }
//  }
//  includeJSFooter {
//    slick = {$plugin.slick.carousel.javascript.file}
//  }
//  jsFooterInline {
//      // slick
//    60807 = COA
//    60807 {
//        // Wrap begin
//      10 = TEXT
//      10 {
//        value (
//          jQuery(document).ready(function(){
//            jQuery(\'.{$plugin.slick.carousel.css.class}\').slick({
//)
//      }
//        // Configuration default
//      20 = TEXT
//      20 {
//        value (
//
//                adaptiveHeight  : {$plugin.slick.carousel.javascript.properties.adaptiveHeight}
//              , arrows          : {$plugin.slick.carousel.javascript.properties.arrows}
//              , autoplay        : {$plugin.slick.carousel.javascript.properties.autoplay}
//              , autoplaySpeed   : {$plugin.slick.carousel.javascript.properties.autoplaySpeed}
//              , cssEase         : \'{$plugin.slick.carousel.javascript.properties.cssEase}\'
//              , dots            : {$plugin.slick.carousel.javascript.properties.dots}
//              , fade            : {$plugin.slick.carousel.javascript.properties.fade}
//              , infinite        : {$plugin.slick.carousel.javascript.properties.infinite}
//              , initialSlide    : {$plugin.slick.carousel.javascript.properties.initialSlide}
//              , rows            : {$plugin.slick.carousel.javascript.properties.rows}
//              , slidesPerRow    : {$plugin.slick.carousel.javascript.properties.slidesPerRow}
//              , slidesToShow    : {$plugin.slick.carousel.javascript.properties.slidesToShow}
//              , slidesToScroll  : {$plugin.slick.carousel.javascript.properties.slidesToScroll}
//              , speed           : {$plugin.slick.carousel.javascript.properties.speed}
//              , vertical        : {$plugin.slick.carousel.javascript.properties.vertical}
//)
//      }
//        // Configuration responsive
//      30 = TEXT
//      30 {
//          // Constant Editor
//        if =
//        if {
//          isTrue = {$plugin.slick.carousel.javascript.responsive.if}
//        }
//        value (
//
//              , responsive: [
//                {
//                    breakpoint: {$plugin.slick.carousel.javascript.responsive.large.breakpoint}
//                  , settings: {
//                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.large.settings.autoplaySpeed}
//                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.large.settings.slidesToShow}
//                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.large.settings.slidesToScroll}
//                  }
//                },
//                {
//                    breakpoint: {$plugin.slick.carousel.javascript.responsive.medium.breakpoint}
//                  , settings: {
//                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.medium.settings.autoplaySpeed}
//                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.medium.settings.slidesToShow}
//                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.medium.settings.slidesToScroll}
//                  }
//                },
//                {
//                    breakpoint: {$plugin.slick.carousel.javascript.responsive.small.breakpoint}
//                  , settings: {
//                      autoplaySpeed: {$plugin.slick.carousel.javascript.responsive.small.settings.autoplaySpeed}
//                    , slidesToShow: {$plugin.slick.carousel.javascript.responsive.small.settings.slidesToShow}
//                    , slidesToScroll: {$plugin.slick.carousel.javascript.responsive.small.settings.slidesToScroll}
//                  }
//                }
//              ]
//)
//      }
//        // Wrap end
//      40 = TEXT
//      40 {
//        value (
//
//            });
//          });
//)
//      }
//    }
//  }
//}
//' );
//\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScript(
//        $_EXTKEY, 'setup', $slickCarouselTypoScriptSetup, 'defaultContentRendering'
//);
