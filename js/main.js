
const privacybeleid = document.getElementById("js--privacybeleid");
let privacybeleiddata  = fetch("../data.json").then(
    function(binnenGekomenData){
        return binnenGekomenData.json();
    }).then(
        function(echteData){
            privacybeleid.innerHTML = echteData.privacybeleid;
        }
);

const algemenevoorwaarden = document.getElementById("js--algemenevoorwaarden");
let algemenevoorwaardendata  = fetch("../data.json").then(
    function(binnenGekomenData){
        return binnenGekomenData.json();
    }).then(
        function(echteData){
            algemenevoorwaarden.innerHTML = echteData.algemenevoorwaarden;
        }
);

const cookiebeleid = document.getElementById("js--cookiebeleid");
let cookiebeleiddata  = fetch("../data.json").then(
    function(binnenGekomenData){
        return binnenGekomenData.json();
    }).then(
        function(echteData){
            cookiebeleid.innerHTML = echteData.cookiebeleid;
        }
);

const retourbeleid = document.getElementById("js--retourbeleid");
let retourbeleiddata  = fetch("../data.json").then(
    function(binnenGekomenData){
        return binnenGekomenData.json();
    }).then(
        function(echteData){
            retourbeleid.innerHTML = echteData.retourbeleid;
        }
);