let table; //holds the table data
let parsedData; //holds the parsed csv file
let csvFile; //holds the csv file

$(document).ready(function () {
  $.ajax({
        type: "GET",
        url: "../data/blast_table.csv",
        dataType: "text",
        success: (data)=>{parseData(data);}
     });
});
//convert the csv file into a JSON object
let parseData = data => {
  parsedData = Papa.parse(data, {
    header: true
  });
  buildTable(parsedData.data);
  console.log(parsedData.data[0]);
}
//builds the table with the JSON object
let buildTable = tableObj => {
  table = new Tabulator("#data-table", {
    data: tableObj,
    autoColumns: true,
  });
}
