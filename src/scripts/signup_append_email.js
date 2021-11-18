// icon plus for appending email
document.querySelector(".plus").addEventListener("click", (event) => {
  event.preventDefault();
  div = document.createElement("div");
  div.classList.add("flex-container-row", "mastered-course", "column-gap-20");
  div.innerHTML = `
    <input class="email width-465" type="email" placeholder="E-mail" id="tutorEmail">
    <button class="button-email minus" id="tutorEmailDelete"></button>
    `;
  document.getElementById("tutorEmails").appendChild(div);

  const allMinusButtons = document.querySelectorAll(".minus");

  for (let i = 0; i < allMinusButtons.length; i++) {
    allMinusButtons[i].addEventListener("click", (event) => {
      event.preventDefault();
      allMinusButtons[i].parentElement.remove();
    });
  }
});
