$(function() {
	"use strict";
	
	
	    $('#fancy-file-upload').FancyFileUpload({
			params: {
				action: 'fileuploader'
			},
			maxfilesize: 2000000
		});
		
		
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	
	
	});