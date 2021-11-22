async function loadMajor() {
  major = await fetch("../../json/major.json");
  major_json = await major.json();
  for (let i = 0; i < major_json.length; i++) {
    document.getElementById("major").innerHTML += `
              <option value="${major_json[i].id}">${major_json[i].nama}</option>
          `;
  }
}

async function loadSubject(major_id) {
  path = `../../json/subjects/${major_id}.json`;
  subjects = await fetch(path);
  subjects_json = await subjects.json();
  subject_from_json = "";
  for (let i = 0; i < subjects_json.length; i++) {
    subject_from_json += `<option value="${subjects_json[i].id}">${subjects_json[i].nama}</option>`;
  }
  document.getElementById("subject").innerHTML = subject_from_json;

  let multiple = document.querySelectorAll(".subject");
  if (multiple.length > 1) {
    for (let i = 0; i < multiple.length; i++) {
      multiple[i].innerHTML = subject_from_json;
    }
  }
}

loadMajor();

document.getElementById("major").addEventListener("click", async function () {
  let major_id = this.value;
  loadSubject(major_id);
});

// icon plus for appending email
document.querySelector(".plus-subject").addEventListener("click", (event) => {
  event.preventDefault();
  div = document.createElement("div");
  div.classList.add("flex-container-row", "mastered-course", "column-gap-20");
  div.innerHTML = `
  <select class="subject width-465" name="subject" id="subject">
    ${subject_from_json}
  </select>
  <button class="button-email minus" id="tutorEmailDelete"></button>
  `;
  document.getElementById("tutorSubjects").appendChild(div);

  const allMinusButtons = document.querySelectorAll(".minus");

  for (let i = 0; i < allMinusButtons.length; i++) {
    allMinusButtons[i].addEventListener("click", (event) => {
      event.preventDefault();
      allMinusButtons[i].parentElement.remove();
    });
  }
});
