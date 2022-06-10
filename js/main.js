const paragraph = document.getElementById("js--text");
//data ophalen
let data  = fetch("../data.json").then(
    function(binnenGekomenData){
        return binnenGekomenData.json();
    }).then(
        function(echteData){
            paragraph.innerHTML = echteData.text;
        }
    );
