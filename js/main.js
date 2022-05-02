function changeTheme() {
    const el = document.querySelector('html');
    if(el.dataset.theme == 'night')
        el.dataset.theme = 'lemonade';
    else
        el.dataset.theme = 'night';

    localStorage.setItem('theme', el.dataset.theme);
}

window.addEventListener('load', () => {
    const el = document.querySelector('html');
    if(localStorage.getItem('theme'))
    el.dataset.theme = localStorage.getItem('theme');
    else
    el.dataset.theme = 'lemonade';
  });

function readTextFile(file, callback) {
    var rawFile = new XMLHttpRequest();
    rawFile.overrideMimeType("application/json");
    rawFile.open("GET", file, true);
    rawFile.onreadystatechange = function() {
        if (rawFile.readyState === 4 && rawFile.status == "200") {
            callback(rawFile.responseText);
        }
    }
    rawFile.send(null);
}

//usage:


readTextFile("resources/tpcNew.json", function(text){
    var data = JSON.parse(text);
    var tableContainer = document.getElementById('tpcData');
    var table = document.createElement('table');
    table.setAttribute('class', 'table table-zebra text-center');
    var tbody = document.createElement('tbody');
    var thead = document.createElement('thead');
    var headr = document.createElement('tr');
    var th = document.createElement('th');
    th.innerHTML = "Name";
    th.setAttribute('class', 'text-2xl capitalize');
    headr.appendChild(th);
    thead.appendChild(headr);
    table.appendChild(thead);
    var heads = ['name', 'email'];
    for(var i=0; i<data.length;i++)
    {
        var tr = document.createElement('tr');
        for(var j=0;j<1;j++)
        {
            var td = document.createElement('td');
            td.innerHTML = data[i][heads[j]];
            tr.appendChild(td);
        }
        tbody.appendChild(tr);
    }
    table.appendChild(tbody);
    tableContainer.appendChild(table);
});

readTextFile("resources/organizing.json", function(text){
    var data = JSON.parse(text);
    var tableContainer = document.getElementById('organizingTable');
    var table = document.createElement('table');
    table.setAttribute('class', 'table table-normal table-zebra text-center mx-auto')
    var tbody = document.createElement('tbody');
    var heads = ['name1', 'name2', 'name3'];
    for(var i=0;i<data.length;i++)
    {
        var tr = document.createElement('tr');
        for(var j=0;j<3;j++)
        {
            var td = document.createElement('td');
            td.innerHTML = data[i][heads[j]];
            tr.appendChild(td);
        }
        tbody.appendChild(tr);
    }

    table.appendChild(tbody);
    tableContainer.appendChild(table);
});