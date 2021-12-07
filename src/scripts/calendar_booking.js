// instantiate date object
let dt = new Date();

// get current month an year
let currentMonth = dt.getMonth(),
  currentYear = dt.getFullYear();

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
      document.getElementById(`row-${i}-col-${j}`).innerHTML = "";
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
      element = document.getElementById(`row-${row}-col-7`);
    } else {
      element = document.getElementById(`row-${row}-col-${date.getDay()}`);
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
      if (data.includes(i)) {
        element.classList.add("booked");
      }
      fullTimeInfo[i] = `${day[date.getDay()]}, ${i} ${
        months[currentMonth]
      } ${currentYear}`;
    }

    if (date.getDay() == 0) {
      row += 1;
    }
  }
}

// function fillCalendar(month, year) {
//   data.forEach((element) => {
//     // for()
//   });
// }

loadCalendar(month_php - 1, year_php);
// loadCalendar(null, null);
// fillCalendar();

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
  if (!calendarElements[i].classList.toString().includes("booked")) {
    calendarElements[i].addEventListener("click", () => {
      showPopUp(calendarElements[i].innerHTML);
    });
  }
}

function showPopUp(index) {
  document.getElementById("set-time").classList.remove("hide");
  document.getElementById("time-info").innerHTML = fullTimeInfo[index];
}

function hidePopUp() {
  document.getElementById("set-time").classList.add("hide");
  console.log("masuk");
}
