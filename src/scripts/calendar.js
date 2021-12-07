// instantiate date object
let dt = new Date();

// get current month an year
let currentMonth = dt.getMonth(),
  currentYear = dt.getFullYear();

let selectedDate;
let extraIndex = 0;

// set up dictionary with index as key and month as value
let months = {
  0: "Januari",
  1: "Februari",
  2: "Maret",
  3: "April",
  4: "Mei",
  5: "Juni",
  6: "Juli",
  7: "Agustus",
  8: "September",
  9: "Oktober",
  10: "November",
  11: "Desember",
};

// set up dictionary with index as key and name of a day as value
let day = {
  0: "Minggu",
  1: "Senin",
  2: "Selasa",
  3: "Rabu",
  4: "Kamis",
  5: "Jumat",
  6: "Sabtu",
};

// dictionary to store fill time information e.g. "Selasa, 5 November 2021"
let fullTimeInfo = {};

// get last element that is empty
let prevFirstIndex = {},
  nextLastIndex = {};

// reset all element and value inside fullTimeInfo dictionary
function resetCalendar() {
  for (let i = 1; i <= 5; i++) {
    for (let j = 1; j <= 7; j++) {
      document.getElementById(`row-${i}-col-${j}`).children[0].innerHTML = "";
      document.getElementById(`row-${i}-col-${j}`).children[1].innerHTML = "";
      document.getElementById(`row-${i}-col-${j}`).classList.remove("booked");
    }
  }
  fullTimeInfo = {};
  prevFirstIndex = {};
  nextLastIndex = {};
}

// load calendar
function loadCalendar(month, year) {
  if (month !== null && year !== null) {
    currentMonth = month;
    currentYear = year;
  }
  document.getElementById(
    "month-year"
  ).value = `${months[currentMonth]} ${currentYear}`;

  let daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
  let row = 1;

  for (let i = 1; i <= daysInMonth; i++) {
    let date = new Date(currentYear, currentMonth, i);
    let element;

    // check if index 0 because index 0 is equal to "Minggu"
    if (date.getDay() == 0) {
      element = document.getElementById(`row-${row}-col-7`).children[0];
    } else {
      element = document.getElementById(`row-${row}-col-${date.getDay()}`)
        .children[0];
    }

    if (element !== null) {
      if (i == 1) {
        prevFirstIndex["row"] = row;
        switch (date.getDay()) {
          case 0:
            prevFirstIndex["col"] = 6;
            break;
          case 1:
            prevFirstIndex["col"] = -1;
            break;
          default:
            prevFirstIndex["col"] = date.getDay() - 1;
            break;
        }
      }
      if (i == daysInMonth) {
        nextLastIndex["row"] = row;
        switch (date.getDay()) {
          case 0:
            prevFirstIndex["col"] = 7;
            break;
          default:
            nextLastIndex["col"] = date.getDay() + 1;
            break;
        }
      }

      element.innerHTML = i;
      fullTimeInfo[i] = `${day[date.getDay()]}, ${i} ${
        months[currentMonth]
      } ${currentYear}`;
    }

    if (date.getDay() == 0) {
      row += 1;
    }
  }
  calendarElements = document.querySelectorAll(".calendar__date");
  for (let i = 0; i < calendarElements.length; i++) {
    if (calendarElements[i].children[0].innerText == "") {
      extraIndex++;
    } else {
      break;
    }
  }
  console.log(extraIndex);
}

function fillEmptyElementInCalendar() {
  console.log("prev " + prevFirstIndex["col"]);
  console.log("last " + nextLastIndex["col"]);

  if (prevFirstIndex["col"] >= 0) {
    let daysInMonth = new Date(currentYear, currentMonth, 0).getDate();
    for (let i = prevFirstIndex["col"]; 0 < i; i--) {
      // let date = new Date(currentYear, currentMonth - 1, i);
      let element = document.getElementById(`row-1-col-${i}`);
      element.innerHTML = `${daysInMonth}`.fontcolor("grey");
      daysInMonth -= 1;
    }
  }
  if (nextLastIndex["col"] <= 6) {
    startIndex = 1;
    for (let i = nextLastIndex["col"]; i <= 7; i++) {
      let element = document.getElementById(`row-5-col-${i}`);
      element.innerHTML = `${startIndex}`.fontcolor("grey");
      startIndex += 1;
    }
  }
}

loadCalendar(null, null);

document.getElementById("next-month").addEventListener("click", () => {
  resetCalendar();
  currentMonth += 1;
  if (currentMonth > 11) {
    currentMonth = 0;
    currentYear += 1;
  }
  loadCalendar(currentMonth, currentYear);
});

document.getElementById("prev-month").addEventListener("click", () => {
  resetCalendar();
  currentMonth -= 1;
  if (currentMonth < 0) {
    currentMonth = 11;
    currentYear -= 1;
  }
  loadCalendar(currentMonth, currentYear);
});

calendarElements = document.querySelectorAll(".calendar__date");
for (let i = 0; i < calendarElements.length; i++) {
  if (calendarElements[i].innerHTML !== "") {
    calendarElements[i].addEventListener("click", () => {
      showPopUp(calendarElements[i].children[0].innerHTML);
    });
  }
}

function showPopUp(index) {
  selectedDate = index;
  document.getElementById("available-time").classList.remove("hide");
  document.getElementById("time-info").innerHTML = fullTimeInfo[selectedDate];
}

function hidePopUp() {
  document.getElementById("available-time").classList.add("hide");
}

document
  .getElementById("submit-available-time")
  .addEventListener("click", function (event) {
    // Prevent page from refreshing
    event.preventDefault();
    console.log(selectedDate);
    // Get select element from html page
    startTime = document.getElementById("start").value;
    finishTime = document.getElementById("finish").value;
    // check value
    if (startTime == "default" || finishTime == "default") {
      document.getElementById("warning-message").innerHTML =
        "Silahkan pilih waktu".fontcolor("red");
    } else if (startTime > finishTime) {
      document.getElementById("warning-message").innerHTML =
        "Waktu mulai lebih besar dari waktu selesai".fontcolor("red");
    } else {
      index = parseInt(selectedDate) + extraIndex;
      console.log(`test ${index}`);

      document.getElementById("warning-message").innerHTML = "";
      document
        .querySelectorAll(".calendar__date")
        [index - 1].classList.add("booked");
      document.querySelectorAll(".calendar__date")[
        index - 1
      ].children[1].innerHTML = `${startTime}-${finishTime}`;
      console.log(this);
      hidePopUp();
    }
    document.getElementById("start").selectedIndex = "default";
    document.getElementById("finish").selectedIndex = "default";
  });
