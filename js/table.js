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
  //remove empty objects at the end of the array
  parsedData.data.splice(parsedData.data.length-1, 1);
  //make each Accession value a link
  parsedData.data.forEach((obj)=>)
  //send table to be tabulated
  buildTable(parsedData.data);
}
//builds the table with the JSON object
let buildTable = tableObj => {
  table = new Tabulator("#data-table", {
    layout: 'fitColumns',
    data: tableObj,
    autoColumns: true,
  });
}
