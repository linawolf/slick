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
      DEV9 = TEXT
      DEV9 {
				value = XXX
				wrap  = alert('|');
			}
				// Get uid sof content elements with CTYPE: slickcontent, slickfilecollection, slickimage or slickitem. Respects the root line.
			x11 = TEXT
			x11 {
				value (
					var arr = [1, 2, 3, 4];
					var s   = '';
 					for (var i = 0; i < arr.length; i++) {
						s = s + arr[i];
					}
					alert(s); //Ausgabe: '1234'
					
)
			}
			12 = TEXT
			12 {
				value (
					$(document).ready(function () {
						if(Array.isArray(slickUids)){
							for (var i = 0; i < slickUids.length; i++) {
								var initSlickDocumentReadyX = "initSlickDocumentReady" + slickUids[i];
								alert(initSlickDocumentReadyX);
								//initSlickDocumentReadyX();
							}
						}
						if( (typeof obj === "object") && (obj !== null) ) {
							var sortedKeys = Object.keys(obj).sort();
							var first = obj[sortedKeys[0]];
							alert( sortedKeys[0] );
							alert( first );
						}
					});

					var obj = {
						foo123: function () { console.log(arguments); }
					};
					var funcName = "foo"+"123";
					obj[funcName](1, 2, 3);
					
)
			}
			X10 = CONTENT
			X10 {
				table = tt_content
				select {
					 pidInList = this
					 where = (CTYPE = 'slickcontent' OR CTYPE = 'slickfilecollection' OR CTYPE = 'slickimage' OR CTYPE = 'slickitem')
				}
					// slide back up to the siteroot
				slide = -1
					// Set this value to the amount of levels to collect on, or use -1 to collect up to the siteroot
				slide.collect = -1
				renderObj = COA
				renderObj {
						// function initSlickDocumentReadyUid() { if (typeof initSlickUid === "function") { initSlickUid();}}
					10 = COA
					10 {
							// function initSlickDocumentReadyUid() {
						10 = TEXT
						10 {
							field = uid
							noTrimWrap = |function initSlickDocumentReady|() {|

						}
							// if (typeof initSlickUid === "function") {initSlickUid(#);}
						20 = COA
						20 {
								// if (typeof initSlickUid === "function") {
							10 = TEXT
							10 {
								field = uid
								noTrimWrap  = | if (typeof initSlick| === "function") {|
							}
								// initSlickUid(#);
							20 = TEXT
							20 {
								field = uid
								noTrimWrap  = | initSlick|();|
							}
								// }
							30 = TEXT
							30 {
								value	= }
							}
						}
							// }
						30 = TEXT
						30 {
							value	= }
						}
					}
						// $(document).ready(function () { if( boolSlickRandomizeUid == true ) {$('#slickid-Uid').randomize();} }); 
					20 = COA
					20 {
							// $(document).ready(function () { 
						10 = TEXT
						10 {
							value				= $(document).ready(function () {
							noTrimWrap  = | | |
						}
							// if (typeof boolSlickRandomizeUid === "function") {if( boolSlickRandomizeUid == true ){$('#slickid-Uid').randomize();}}
						20 = COA
						20 {
								// if (typeof boolSlickRandomizeUid === "boolean") {
							10 = TEXT
							10 {
								field = uid
								noTrimWrap  = | if (typeof boolSlickRandomize| === "boolean") {|
							}
								// if( boolSlickRandomizeUid == true ){$('#slickid-Uid').randomize();}
							20 = COA
							20 {
									// if( boolSlickRandomizeUid == true )
								10 = TEXT
								10 {
									field = uid
									noTrimWrap  = |if( boolSlickRandomize| == true ) |
								}
									//  {$('#slickid-Uid').randomize();}
								20 = TEXT
								20 {
									field = uid
									noTrimWrap  = |{$('#slickid-|').randomize();} |
								}
							}
								// }
							30 = TEXT
							30 {
								value	= }
							}
						}
							// });
						30 = TEXT
						30 {
							value = });
						}
					}
						// $(document).ready(function () { initSlickDocumentReadyUid();});
					30 = COA
					30 {
							// $(document).ready(function () { 
						10 = TEXT
						10 {
							value				= $(document).ready(function () {
							noTrimWrap  = | | |
						}
							// initSlickDocumentReadyUid();
						20 = TEXT
						20 {
							field = uid
							noTrimWrap  = |initSlickDocumentReady|();|
						}
							// });
						40 = TEXT
						40 {
							value = });
						}
					}
				}
			}
		}
	}
}