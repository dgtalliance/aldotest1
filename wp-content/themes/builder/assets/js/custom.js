document.querySelector(".more").addEventListener("click", function () {
	const button = this;
	const details = document.querySelector(".details");

	if (button.classList.contains("active")) {
		button.classList.remove("active");
		button.textContent = "Learn More";
		details.style.height = `${details.scrollHeight}px`;
		setTimeout(() => {
			details.style.height = "0";
		}, 10);
	} else {
		button.classList.add("active");
		button.textContent = "View Less";
		details.style.height = "0";
		details.classList.add("expanding");
		setTimeout(() => {
			details.style.height = `${details.scrollHeight}px`;
			details.classList.remove("expanding");
		}, 10);
	}
});
