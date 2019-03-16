	// empty statement for proper comments only
lib {
}
	// slick.tx_slick_pages
lib =
lib {
		// empty statement for proper comments only
	slick {
	}
		// tx_slick_pages = CONTENT
	slick =
	slick {
			// table = tt_content
		tx_slick_pages = CONTENT
		tx_slick_pages {
			table = tt_content
			select {
				pidInList = TEXT
				pidInList {
					field = tx_slick_pages
				}
				orderBy = sorting
			}
			renderObj = < tt_content		
		}
	}
}