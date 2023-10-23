// Function to initialize and load the Tableau visualization
function initTableauViz() {
  var containerDiv = document.getElementById("tableauViz");
  var url = "https://public.tableau.com/views/HistoricalEnrollment-Sandbox/LineGraph";
  var options = {
    width: "800px",
    height: "600px",
    hideTabs: true,
    hideToolbar: true,
  };

  var viz = new tableau.Viz(containerDiv, url, options);
}
