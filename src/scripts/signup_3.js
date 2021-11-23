async function loadFaculty() {
  faculties = await fetch("../../json/faculty.json");
  faculties_json = await faculties.json();
  for (let i = 0; i < faculties_json.length; i++) {
    document.getElementById("faculty").innerHTML += `
              <option value="${faculties_json[i].nama}" id="${faculties_json[i].id}">${faculties_json[i].nama}</option>
          `;
  }
}

async function loadMajor(faculty_id) {
  majors = await fetch(`../../json/majors/${faculty_id}.json`);
  majors_json = await majors.json();
  let major_from_json = `<option disabled selected value> -- select an option -- </option>`;
  for (let i = 0; i < majors_json.length; i++) {
    major_from_json += `
               <option value="${majors_json[i].nama}" id="${majors_json[i].id}">${majors_json[i].nama}</option>
           `;
    // document.getElementById("major").innerHTML += `
    //           <option value="${majors_json[i].nama}" id="${majors_json[i].id}">${majors_json[i].nama}</option>
    //       `;
  }
  document.getElementById("major").innerHTML = major_from_json;
}

async function loadSubject(major_id) {
  path = `../../json/subjects/${major_id}.json`;
  subjects = await fetch(path);
  subjects_json = await subjects.json();
  subject_from_json = `<option disabled selected value> -- select an option -- </option>`;
  for (let i = 0; i < subjects_json.length; i++) {
    subject_from_json += `<option value="${subjects_json[i].nama}" id="${subjects_json[i].id}">${subjects_json[i].nama}</option>`;
  }
  document.getElementById("subject").innerHTML = subject_from_json;

  let multiple = document.querySelectorAll(".subject");
  if (multiple.length > 1) {
    for (let i = 0; i < multiple.length; i++) {
      multiple[i].innerHTML = subject_from_json;
    }
  }
}

function resetSelectNameIndex() {
  elements = document.querySelectorAll(".subject");
  for (let i = 0; i < elements.length; i++) {
    elements[i].name = `subject_${i + 1}`;
  }
}

loadFaculty();

document.getElementById("faculty").addEventListener("click", async function () {
  loadMajor(this.options[this.selectedIndex].id);
});

document.getElementById("major").addEventListener("click", async function () {
  loadSubject(this.options[this.selectedIndex].id);
});

// icon plus for appending email
document.querySelector(".plus-subject").addEventListener("click", (event) => {
  event.preventDefault();
  div = document.createElement("div");
  div.classList.add("flex-container-row", "mastered-course", "column-gap-20");
  div.innerHTML = `
  <select class='subject width-465' id='subject'>
    ${subject_from_json}
  </select>
  <button class="button-email minus" id="tutorEmailDelete"></button>
  `;
  document.getElementById("tutorSubjects").appendChild(div);

  const allMinusButtons = document.querySelectorAll(".minus");
  resetSelectNameIndex(document.querySelectorAll(".subject"));

  for (let i = 0; i < allMinusButtons.length; i++) {
    allMinusButtons[i].addEventListener("click", (event) => {
      event.preventDefault();
      allMinusButtons[i].parentElement.remove();
      resetSelectNameIndex(document.querySelectorAll(".subject"));
    });
  }
});
