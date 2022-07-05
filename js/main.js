function changeTheme() {
  const el = document.querySelector("html");
  if (el.dataset.theme == "night") el.dataset.theme = "cmyk";
  else el.dataset.theme = "night";

  localStorage.setItem("theme", el.dataset.theme);
}

window.addEventListener("load", () => {
  const flexSlider = $('.flexslider')
  flexSlider.flexslider({
    animation: "slide",
    animationLoop: true,
    itemWidth: 460,
    itemMargin: 5
  })
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

readTextFile("resources/tpcNew.json", function (text) {
  var data = JSON.parse(text);
  var tableContainer = document.getElementById("tpcData");
  var table = document.createElement("table");
  table.setAttribute("class", "table table-zebra text-center");
  var tbody = document.createElement("tbody");
  var thead = document.createElement("thead");
  var headr = document.createElement("tr");
  var th = document.createElement("th");
  th.innerHTML = "Name";
  th.setAttribute("class", "text-2xl capitalize");
  headr.appendChild(th);
  thead.appendChild(headr);
  table.appendChild(thead);
  var heads = ["name", "email"];
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

readTextFile("resources/organizing.json", function (text) {
  var data = JSON.parse(text);
  var tableContainer = document.getElementById("organizingTable");
  var table = document.createElement("table");
  table.setAttribute(
    "class",
    "table table-normal table-zebra text-center mx-auto"
  );
  var tbody = document.createElement("tbody");
  var heads = ["name1", "name2", "name3"];
  for (var i = 0; i < data.length; i++) {
    var tr = document.createElement("tr");
    for (var j = 0; j < 3; j++) {
      var td = document.createElement("td");
      td.innerHTML = data[i][heads[j]];
      tr.appendChild(td);
    }
    tbody.appendChild(tr);
  }

  table.appendChild(tbody);
  tableContainer.appendChild(table);
});

readTextFile("resources/advisory.json", function (text) {
  var data = JSON.parse(text);
  var tableContainer = document.getElementById("advisoryData");
  var table = document.createElement("table");
  table.setAttribute("class", "table table-zebra text-center");
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

function beer() {
  return {
    seconds: "00",
    minutes: "00",
    hours: "00",
    days: "00",
    distance: 0,
    countdown: null,
    beerTime: new Date("July 31, 2022 00:00:00").getTime(),
    now: new Date().getTime(),
    start: function () {
      this.countdown = setInterval(() => {
        // Calculate time
        this.now = new Date().getTime();
        this.distance = this.beerTime - this.now;
        // Set Times
        this.days = this.padNum(
          Math.floor(this.distance / (1000 * 60 * 60 * 24))
        );
        this.hours = this.padNum(
          Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))
        );
        this.minutes = this.padNum(
          Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60))
        );
        this.seconds = this.padNum(
          Math.floor((this.distance % (1000 * 60)) / 1000)
        );
        // Stop
        if (this.distance < 0) {
          clearInterval(this.countdown);
          this.days = "00";
          this.hours = "00";
          this.minutes = "00";
          this.seconds = "00";
        }
      }, 100);
    },
    padNum: function (num) {
      var zero = "";
      for (var i = 0; i < 2; i++) {
        zero += "0";
      }
      return (zero + num).slice(-2);
    },
  };
}
