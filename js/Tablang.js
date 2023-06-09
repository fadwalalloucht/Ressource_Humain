function addValues() {
   // Récupérer les valeurs sélectionnées
   var select1Value = document.querySelector("#select1").value;
   var select2Value = document.querySelector("#select2").value;
 
   // Ajouter une nouvelle ligne au tableau
   var table = document.querySelector("#myTable2");
   var row = table.insertRow();
 
   // Ajouter les valeurs sélectionnées dans les cellules
   var cell1 = row.insertCell(0);
   var cell2 = row.insertCell(1);
   cell1.innerHTML = select1Value;
   cell2.innerHTML = select2Value;
 }