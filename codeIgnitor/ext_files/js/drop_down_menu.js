let x = document.querySelector(".settings");
let change = document.querySelectorAll(".settings-nav-d");
x.addEventListener("click", () => {
	for (let i = 0; i < change.length; i++) {
		change[i].classList.toggle("settings-nav-d");
	}
});
