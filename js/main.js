function changeTheme() {
  const el = document.querySelector("html");
  if (el.dataset.theme == "night") el.dataset.theme = "cmyk";
  else el.dataset.theme = "night";

  localStorage.setItem("theme", el.dataset.theme);
}

window.addEventListener("load", () => {
  const owlCarousel = $(".owl-carousel");
  owlCarousel.owlCarousel({
    center: true,
    items: 4,
    margin: 30,
    loop: true,
    autoWidth: true,
    autoplay: true,
    autoplayTimeout: 2400,
  });
});

function readTextFile(file, callback) {
  var rawFile = new XMLHttpRequest();
  rawFile.overrideMimeType("application/json");
  rawFile.open("GET", file, true);
  rawFile.onreadystatechange = function () {
    if (rawFile.readyState === 4 && rawFile.status == "200") {
      callback(rawFile.responseText);
    }
  };
  rawFile.send(null);
}

//usage:

function getTPCTable() {
  readTextFile("resources/tpcNew.json", function (text) {
    var data = JSON.parse(text);
    var tableContainer = document.getElementById("tpcData");
    var table = document.createElement("table");
    table.setAttribute("class", "table table-compact table-zebra text-center");
    var tbody = document.createElement("tbody");

    var heads = ["name"];
    for (var i = 0; i < data.length; i++) {
      var tr = document.createElement("tr");
      var td = document.createElement("td");

      td.innerHTML = data[i][heads[0]];

      tr.appendChild(td);
      tbody.appendChild(tr);
    }
    table.appendChild(tbody);
    tableContainer.appendChild(table);
  });
}

function getOrganizingCommitteeTable() {
  readTextFile("resources/organizing.json", function (text) {
    var data = JSON.parse(text);
    var tableContainer = document.getElementById("organizingTable");
    var table = document.createElement("table");
    table.setAttribute(
      "class",
      "table table-compact table-zebra text-center mx-auto"
    );
    var tbody = document.createElement("tbody");
    var heads = ["name"];
    for (var i = 0; i < data.length - 3; i += 3) {
      var tr = document.createElement("tr");
      var td = document.createElement("td");
      td.innerHTML = data[i][heads[0]];
      tr.appendChild(td);

      var td = document.createElement("td");
      td.innerHTML = data[i + 1][heads[0]];
      tr.appendChild(td);

      var td = document.createElement("td");
      td.innerHTML = data[i + 2][heads[0]];
      tr.appendChild(td);

      tbody.appendChild(tr);
    }

    table.appendChild(tbody);
    tableContainer.appendChild(table);
  });
}

function getSpeakerTable() {
  const speakerContainer = document.getElementById("speakerList");
  for (let i = 1; i <= 6; i+=2) {
    let filename1 = `s${i}.jpg`;
    let filename2 = `s${i+1}.jpg`;
    const elem1 = document.createElement("img");
    elem1.src = `img/keynote/${filename1}`;
    elem1.onclick = (e) => {
      console.log(e.target.src);
    };
    const elem2 = document.createElement("img");
    elem2.src = `img/keynote/${filename2}`;
    elem2.onclick = (e) => {
      console.log(e.target.src);
    };
    speakerContainer.appendChild(elem1);
    speakerContainer.appendChild(elem2);
  }
}

function getAdvisoryCommitteeTable() {
  readTextFile("resources/advisory.json", function (text) {
    var data = JSON.parse(text);
    var tableContainer = document.getElementById("advisoryData");
    var table = document.createElement("table");
    table.setAttribute("class", "table table-compact table-zebra text-center");
    var tbody = document.createElement("tbody");
    // var thead = document.createElement('thead');
    // var headr = document.createElement('tr');
    // var th = document.createElement('th');
    // th.innerHTML = "Name";
    // th.setAttribute('class', 'text-2xl capitalize');
    // headr.appendChild(th);
    // thead.appendChild(headr);
    // table.appendChild(thead);
    var heads = ["name"];
    for (var i = 0; i < data.length; i++) {
      var tr = document.createElement("tr");
      for (var j = 0; j < 1; j++) {
        var td = document.createElement("td");
        td.innerHTML = data[i][heads[j]];
        tr.appendChild(td);
      }
      tbody.appendChild(tr);
    }
    table.appendChild(tbody);
    tableContainer.appendChild(table);
  });
}

// function beer() {
//   return {
//     seconds: "00",
//     minutes: "00",
//     hours: "00",
//     days: "00",
//     distance: 0,
//     countdown: null,
//     beerTime: new Date("July 31, 2022 00:00:00").getTime(),
//     now: new Date().getTime(),
//     start: function () {
//       this.countdown = setInterval(() => {
//         // Calculate time
//         this.now = new Date().getTime();
//         this.distance = this.beerTime - this.now;
//         // Set Times
//         this.days = this.padNum(
//           Math.floor(this.distance / (1000 * 60 * 60 * 24))
//         );
//         this.hours = this.padNum(
//           Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
//         );
//         this.minutes = this.padNum(
//           Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60))
//         );
//         this.seconds = this.padNum(
//           Math.floor((this.distance % (1000 * 60)) / 1000)
//         );
//         // Stop
//         if (this.distance < 0) {
//           clearInterval(this.countdown);
//           this.days = "00";
//           this.hours = "00";
//           this.minutes = "00";
//           this.seconds = "00";
//         }
//       }, 100);
//     },
//     padNum: function (num) {
//       var zero = "";
//       for (var i = 0; i < 2; i++) {
//         zero += "0";
//       }
//       return (zero + num).slice(-2);
//     },
//   };
// }
