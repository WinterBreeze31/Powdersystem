console.log("JavaScript Bulma File launched");

/* =-=-=-=-=-=-=-=-=-=- MODAL -=-=-=-=-=-=-=-=-=-= */

var modalButtons = document.getElementsByClassName('mdl-btn');

function modalActivate(modal) {
	var currentModal = document.getElementById(modal);
	if (currentModal.classList.contains("is-active") == true){
		currentModal.classList.remove("is-active");
	} else {
		currentModal.classList.add("is-active");
		console.log(currentModal.classList)
	}
}
for (let i = 0; i < modalButtons.length; i++) {
	modalButtons[i].addEventListener('click', function(){
		modalActivate(modalButtons[i].getAttribute("data-modal"))
	})
}