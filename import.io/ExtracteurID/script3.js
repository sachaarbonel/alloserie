
var obj = JSON.parse(extraction);

for (var key1 in obj) { for (var key2 in obj[key1].extractorData.data[0].group){
   if (obj.hasOwnProperty(key1)) {
    if(obj[key1].extractorData.data[0].group.hasOwnProperty(key2)){
       document.write(Number(obj[key1].extractorData.data[0].group[key2].SerieID[0].text)+",")};
    }
}}
