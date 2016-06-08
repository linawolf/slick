page {
  cssInline {
      // slick
    {$plugin.slick.carousel.html.id} = TEXT
    {$plugin.slick.carousel.html.id} {
      value (
        .{$plugin.slick.carousel.css.class}{
          margin:{$plugin.slick.carousel.css.margins.item};
        }
        .slick-slide figure {
          margin:0;
        }
        .border {
          border-left: {$plugin.slick.carousel.css.margins.content.left} solid #c0c;
        }
        .slick-header,
        .slick-text {
          display: inline;
          position: absolute;
          z-index: 1;
        }
        .slick-header {
          bottom: {$plugin.slick.carousel.css.header.bottom};
          top: {$plugin.slick.carousel.css.header.top};
        }
        .slick-text {
          bottom: {$plugin.slick.carousel.css.text.bottom};
          top: {$plugin.slick.carousel.css.text.top};
        }
        .slick-header .span,
        .slick-text .span {
        }
        .slick-header .span {
          display: inline;
        }
        .slick-header .span {$plugin.slick.item.view.settings.headerTag} {
          background-color: {$plugin.slick.carousel.css.header.background-color};
          color: {$plugin.slick.carousel.css.header.color};
          font-size: {$plugin.slick.carousel.css.header.font-size};
          font-weight: {$plugin.slick.carousel.css.header.font-weight};
        }
        .slick-text .span {
          display: inline;
        }
        .slick-text .span p {
          background-color: {$plugin.slick.carousel.css.text.background-color};
          color: {$plugin.slick.carousel.css.text.color};
          font-size: {$plugin.slick.carousel.css.text.font-size};
          font-weight: {$plugin.slick.carousel.css.text.font-weight};
        }
        /* color */
        .slick-next:before,
        .slick-prev:before {
          color: {$plugin.slick.carousel.css.colors.arrows};
        }
        .slick-dots li button:before {
          color: {$plugin.slick.carousel.css.colors.dots.default};
        }
        .slick-dots li.slick-active button:before {
          color: {$plugin.slick.carousel.css.colors.dots.active};
        }
        /* position */
        .slick-dots {
          bottom: {$plugin.slick.carousel.css.position.dots.bottom};
          margin-left:0;
          margin-right:0;
        }
        .slick-next {
          right: {$plugin.slick.carousel.css.position.next.right};
        }
        .slick-prev {
          left: {$plugin.slick.carousel.css.position.prev.left};
        }
)
    }
  }
}

