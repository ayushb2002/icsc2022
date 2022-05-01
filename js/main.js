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


readTextFile("resources/tpc.json", function(text){
    var data = JSON.parse(text);
    console.log(data[0]);
    var table = document.getElementById('tpcData');
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
        table.appendChild(tr);
    }
});

