mod.wizards.newContentElement.wizardItems.slick {
	header = Slick
	elements {
		carousel1 {
			iconIdentifier = app-slick
			// icon = ../typo3conf/ext/t3slick/Resources/Public/Icons/orbit.gif
			title = Slick Slider Carousel 1
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. You can take every content element. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 1].
			tt_content_defValues {
				CType = slickcarousel
				frame_class= 62476
				header = Slick Slider Carousel 1
			}
		}
		carousel2 {
			iconIdentifier = app-slick
			// icon = ../typo3conf/ext/t3slick/Resources/Public/Icons/orbit.gif
			title = Slick Slider Carousel 2
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. You can take every content element. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 2].
			tt_content_defValues {
				CType = slickcarousel2
				frame_class= 62476
				header = Slick Slider Carousel 2
			}
		}
		carousel3 {
			iconIdentifier = app-slick
			// icon = ../typo3conf/ext/t3slick/Resources/Public/Icons/orbit.gif
			title = Slick Slider Carousel 3
			description = Slick carousel is the container of the slick slider. You can enter items for sliding. You can take every content element. The corresponding category in the Constant Editor of this carousel is [Slick Carousel 3].
			tt_content_defValues {
				CType = slickcarousel3
				frame_class= 62476
				header = Slick Slider Carousel 3
			}
		}
		item {
			iconIdentifier = app-slick
			// icon = ../typo3conf/ext/t3slick/Resources/Public/Icons/orbit.gif
			title = Slick Slider Item
			description = Content element slick item: image with header and prompt. Optimised for the slick slider carousel. The corresponding category in the Constant Editor of this item is [Slick item].
			tt_content_defValues {
				CType = slickitem
				header = Item for the slick slider carousel
			}
		}
	}
	show := addToList(*)
}
