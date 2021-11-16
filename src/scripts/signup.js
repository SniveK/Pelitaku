async function loadProvince() {
  provinces = await fetch("../../json/propinsi.json");
  provinces_json = await provinces.json();
  for (let i = 0; i < provinces_json.length; i++) {
    document.getElementById("province").innerHTML += `
            <option value="${provinces_json[i].id}">${provinces_json[i].nama}</option>
        `;
  }
}

async function loadCity(province_id) {
  path = `../../json/kabupaten/${province_id}.json`;
  cities = await fetch(path);
  cities_json = await cities.json();
  for (let i = 0; i < cities_json.length; i++) {
    document.getElementById("city").innerHTML += `
            <option value="${cities_json[i].id}">${cities_json[i].nama}</option>
        `;
  }
}

async function loadDistrict(city_id) {
  path = `../../json/kecamatan/${city_id}.json`;
  districts = await fetch(path);
  districts_json = await districts.json();
  for (let i = 0; i < districts_json.length; i++) {
    document.getElementById("district").innerHTML += `
            <option value="${districts_json[i].id}">${districts_json[i].nama}</option>
        `;
  }
}

async function loadSubDistrict(district_id) {
  path = `../../json/kelurahan/${district_id}.json`;
  sub_districts = await fetch(path);
  sub_districts_json = await sub_districts.json();
  for (let i = 0; i < sub_districts_json.length; i++) {
    document.getElementById("sub-district").innerHTML += `
            <option value="${sub_districts_json[i].id}">${sub_districts_json[i].nama}</option>
        `;
  }
}

async function getInfoById(path, id) {
  data = await fetch(path);
  data_json = await data.json();
  let val = data_json.find((item) => item.id === id);
  return titleCase(val.nama);
}

function titleCase(str) {
  var splitStr = str.toLowerCase().split(" ");
  for (var i = 0; i < splitStr.length; i++) {
    // You do not need to check if i is larger than splitStr length, as your for does that for you
    // Assign it back to the array
    splitStr[i] =
      splitStr[i].charAt(0).toUpperCase() + splitStr[i].substring(1);
  }
  // Directly return the joined string
  return splitStr.join(" ");
}

var address_dict = {};
var province_id, city_id, district_id, sub_district_id;

loadProvince();

// add cities
document
  .getElementById("province")
  .addEventListener("change", async function () {
    province_id = this.value;
    loadCity(province_id);
    address_dict["provinsi"] = await getInfoById(
      "../../json/propinsi.json",
      province_id
    );
  });

// add district
document.getElementById("city").addEventListener("change", async function () {
  city_id = this.value;
  loadDistrict(city_id);
  address_dict["kabupaten"] = await getInfoById(
    `../../json/kabupaten/${province_id}.json`,
    city_id
  );
});

// add sub-district
document
  .getElementById("district")
  .addEventListener("change", async function () {
    district_id = this.value;
    loadSubDistrict(district_id);
    address_dict["kecamatan"] = await getInfoById(
      `../../json/kecamatan/${city_id}.json`,
      district_id
    );
  });

document
  .getElementById("sub-district")
  .addEventListener("change", async function () {
    sub_district_id = this.value;
    address_dict["kelurahan"] = await getInfoById(
      `../../json/kelurahan/${district_id}.json`,
      sub_district_id
    );
  });
