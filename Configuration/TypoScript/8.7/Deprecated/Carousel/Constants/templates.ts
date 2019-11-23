plugin.slick {
  carousel {
    templates {
        # cat=Slick - Carousel - Templates/150/101; type=string; label=templates:Path to the templates (with an ending slash).
      templateRootPath = EXT:slick/Resources/Private/Fluid/FluidStyledContent/Templates/
        # cat=Slick - Carousel - Templates/150/102; type=string; label=partials:Path to the partials (with an ending slash).
      partialRootPath = EXT:slick/Resources/Private/Fluid/FluidStyledContent/Partials/
        # cat=Slick - Carousel - Templates/150/103; type=string; label=layouts:Path to the layouts (with an ending slash).
      layoutRootPath = EXT:slick/Resources/Private/Fluid/FluidStyledContent/Layouts/
      settings {
          # cat=Slick - Carousel - Templates/150/201; type=options[div,h1,h2,h3,h4,h5,h6,p,span,];  label= Header tag:HTML tag. I.e: h2. If you leave it empty, there won't be any wrap.
				headerTag = h1
      }
    }
  }
}
