function clickMobileMenu() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}

function clickImageModal(elmnt) {
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the image and insert it inside the modal - use its "alt" text as a caption
	//var img = document.getElementById('myImg');
	var modalImg = document.getElementById("img01");
	var captionText = document.getElementById("caption");


	modal.style.display = "block";
    modalImg.src = elmnt.src;
    captionText.innerHTML = elmnt.alt;
}

function clickModalClose() {
	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// Get the modal
	var modal = document.getElementById('myModal');

    modal.style.display = "none";
}
