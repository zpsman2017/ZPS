$(document).ready(function () {

	getRecentBlocks();

});

function getRecentBlocks() {

	var settings = {
		"url": "https://explorer.api.bitcoin.com/bch/v1/blocks",
		"method": "GET",
		"timeout": 0,
	};

	$.ajax(settings).done(function (response) {
		console.log(response);
	});

}