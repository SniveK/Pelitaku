var index=2;
document.querySelector(".plus-subject").addEventListener("click", (event) => {
  event.preventDefault();
  addLink();
});

function addLink(str){
  div = document.createElement("div");
  div.classList.add("flex-container-row", "column-gap-20");
  if(str==null){
    str="";
  }
  div.innerHTML = `
  <input class="link" id="link" name="link_`+index+`" type="text" placeholder="Link/url file" id="link" value="`+str+`"></input>
  <button class='button-email minus' id="tutorEmailDelete"></button>
  `;
  index++;
  document.getElementById("linkFile").appendChild(div);
  const allMinusButtons = document.querySelectorAll(".minus");
  resetSelectNameIndex(document.querySelectorAll(".link"));
  for (let i = 0; i < allMinusButtons.length; i++) {
    allMinusButtons[i].addEventListener("click", (event) => {
      event.preventDefault();
      allMinusButtons[i].parentElement.remove();
      resetSelectNameIndex(document.querySelectorAll(".link"));
    });
  }
}

function resetSelectNameIndex() {
  elements = document.querySelectorAll(".subject");
  for (let i = 0; i < elements.length; i++) {
    elements[i].name = `subject_${i + 1}`;
  }
}