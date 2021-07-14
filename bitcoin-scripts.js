$(document).ready(function () {

	getLatestHash();

});

function getLatestHash() {

	var settings = {
		"url": "https://blockchain.info/q/latesthash",
		"method": "GET",
		"timeout": 0,
	};

	$.ajax(settings).done(function (response) {
		latestHash = response;
		$("h2").html("Block Hash: " + latestHash);

		getLatestBlockData(latestHash);
	});

}

function getLatestBlockData(hash) {

	var settings = {
		"url": "https://blockchain.info/rawblock/" + hash,
		"method": "GET",
		"timeout": 0,
	  };
	  
	  $.ajax(settings).done(function (response) {
		  printBlockData(response);
	  });

}

function printBlockData(block) {
	console.log(block);

	$("#block-height").html(block.height);
	$("#block-transactions").html(block.n_tx);
}