page {
      // For proper comment only
  jsFooterInline {		
	}
		// slick: 60857, 60858, 60859
  jsFooterInline =
  jsFooterInline {
      // slick: #slickgallery1
    60900 = COA
    60900 {
        // For development only!
      XXX9 = TEXT
      XXX9 {
				value = XXX
				wrap  = alert('|');
			}
				// Get uid sof content elements with CTYPE: slickcontent, slickimage or slickitem. Respects the root line.
			10 = CONTENT
			10 {
				table = tt_content
				select {
					 pidInList = this
					 where = (CTYPE = 'slickcontent' OR CTYPE = 'slickimage' OR CTYPE = 'slickitem')
				}
					// slide back up to the siteroot
				slide = -1
					// Set this value to the amount of levels to collect on, or use -1 to collect up to the siteroot
				slide.collect = -1
				renderObj = COA
				renderObj {
					10 = TEXT
					10 {
						field = uid
						noTrimWrap = |function initSlickDocumentReady|() {|

					}
					20 = TEXT
					20 {
						field = uid
						noTrimWrap  = | if (typeof initSlick| === "function") {|
					}
					30 = TEXT
					30 {
						field = uid
						noTrimWrap  = | initSlick|();}}|
					}
					40 = TEXT
					40 {
						field = uid
						noTrimWrap  = | $(document).ready(function () { initSlickDocumentReady|();});|
					}
				}
			}
		}
	}
}