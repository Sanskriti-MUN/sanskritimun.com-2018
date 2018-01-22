// instanciate new modal
var modal = new tingle.modal({
	footer: true,
	stickyFooter: false,
	closeMethods: ['overlay', 'button', 'escape'],
	closeLabel: "Close",
	cssClass: ['modal'],
	onOpen: function () {
		console.log('modal open');
	},
	onClose: function () {
		console.log('modal closed');
	},
	beforeClose: function () {
		// here's goes some logic
		// e.g. save content before closing the modal
		return true; // close the modal
		return false; // nothing happens
	}
});


var secModals = [];
for (var i = 0; i < 5; i++) {
	secModals[i] = new tingle.modal({
		footer: true,
		stickyFooter: false,
		closeMethods: ['overlay', 'button', 'escape'],
		closeLabel: "Close",
		cssClass: ['modal'],
		onOpen: function () {
			console.log('modal open');
		},
		onClose: function () {
			console.log('modal closed');
		},
		beforeClose: function () {
			// here's goes some logic
			// e.g. save content before closing the modal
			return true; // close the modal
			return false; // nothing happens
		}
	});
}

var commModals = [];
for (var i = 0; i < 9; i++) {
	commModals[i] = new tingle.modal({
		footer: true,
		stickyFooter: false,
		closeMethods: ['overlay', 'button', 'escape'],
		closeLabel: "Close",
		cssClass: ['modal'],
		onOpen: function () {
			console.log('modal open');
		},
		onClose: function () {
			console.log('modal closed');
		},
		beforeClose: function () {
			// here's goes some logic
			// e.g. save content before closing the modal
			return true; // close the modal
			return false; // nothing happens
		}
	});
}

var secCards = document.querySelectorAll('div.upper-secretariat div.card');
var commCards = document.querySelectorAll('div.committees div.card');

secModals[0].setContent("");
secModals[1].setContent("");
secModals[2].setContent("");
secModals[3].setContent("");
secModals[4].setContent("");

commModals[0].setContent("");
commModals[1].setContent("");
commModals[2].setContent("");
commModals[3].setContent("");
commModals[4].setContent("");
commModals[5].setContent("");
commModals[6].setContent("");
commModals[7].setContent("");
commModals[8].setContent("");

secCards[0].addEventListener("click", function() {secModals[0].open()})
secCards[1].addEventListener("click", function() {secModals[1].open()})
secCards[2].addEventListener("click", function() {secModals[2].open()})
secCards[3].addEventListener("click", function() {secModals[3].open()})
secCards[4].addEventListener("click", function() {secModals[4].open()})

commCards[0].addEventListener("click", function () {commModals[0].open() })
commCards[1].addEventListener("click", function () {commModals[0].open() })
commCards[2].addEventListener("click", function () {commModals[0].open() })
commCards[3].addEventListener("click", function () {commModals[0].open() })
commCards[4].addEventListener("click", function () {commModals[0].open() })
commCards[5].addEventListener("click", function () {commModals[0].open() })
commCards[6].addEventListener("click", function () {commModals[0].open() })
commCards[7].addEventListener("click", function () {commModals[0].open() })
commCards[8].addEventListener("click", function () {commModals[0].open() })