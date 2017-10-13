tt_content.slickcarousel >
tt_content.slickcarousel2 >
tt_content.slickcarousel3 >

tt_content.slickcarousel =< lib.contentElement
tt_content.slickcarousel {
	templateName = Slickcarousel
	stdWrap {
		editIcons = tt_content: header [header_layout], records
		editIcons {
			iconTitle.data = LLL:EXT:fluid_styled_content/Resources/Private/Language/FrontendEditing.xlf:editIcon.shortcut
		}
	}
	settings {
		slickcarouselid = slickcarousel1
	}
	variables {
		shortcuts = RECORDS
		shortcuts {
			source.field = records
			tables = {$styles.content.shortcut.tables}
		}
	}
  //wrap = <div id="slickcarousel" class="{$plugin.slick.carousel.css.class}">|</div>
}

tt_content.slickcarousel2 =< lib.contentElement
tt_content.slickcarousel2 {
	templateName = Slickcarousel
  wrap = <div id="slickcarousel2" class="{$plugin.slick.carousel.css.class}">|</div>
}

tt_content.slickcarousel3 =< lib.contentElement
tt_content.slickcarousel3 {
	templateName = Slickcarousel
  wrap = <div id="slickcarousel3" class="{$plugin.slick.carousel.css.class}">|</div>
}