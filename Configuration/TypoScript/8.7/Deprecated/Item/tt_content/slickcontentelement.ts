tt_content {
	slickitem = FLUIDTEMPLATE
	slickitem {
		templateName = Slickcontentelement
		templateRootPaths {
			10 = {$plugin.slick.item.templates.10.templateRootPath}
			20 = {$plugin.slick.item.templates.20.templateRootPath}
		}
		partialRootPaths {
			10 = {$plugin.slick.item.templates.10.partialRootPath}
			20 = {$plugin.slick.item.templates.20.partialRootPath}
		}
		layoutRootPaths {
			10 = {$plugin.slick.item.templates.10.layoutRootPath}
			20 = {$plugin.slick.item.templates.20.layoutRootPath}
		}
			// headerTag, media.lazyLoading
		settings =
		settings {
			headerTag = {$plugin.slick.item.templates.settings.headerTag}
			media.lazyLoading = {$styles.content.image.lazyLoading}
		}
	}
}