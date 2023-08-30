var checkBoxes = document.querySelectorAll(".check");
var inputNumbers = document.querySelectorAll('input[type="number"]');
var filter = document.querySelector("#filter");
var rows = document.querySelectorAll("tbody tr");
var total = document.querySelector("#total");

for (var i = 0; i < checkBoxes.length; i++) {
  checkBoxes[i].onchange = function () {
    for (var i = 0; i < inputNumbers.length; i++) {
      inputNumbers[i].disabled = !checkBoxes[i].checked ? true : false;
    }
  };
}

filter.onchange = function () {
  rows.forEach((row) => {
    var cell = row.children[2].innerHTML;

    if (filter.value == 0) {
      row.style.display = Number(cell) ? "table-row" : "none";
    } else if (filter.value == 1) {
      row.style.display = Number(cell) < 100 ? "table-row" : "none";
    } else if (filter.value == 2) {
      row.style.display =
        Number(cell) >= 100 && Number(cell) <= 500 ? "table-row" : "none";
    } else {
      row.style.display = Number(cell) > 500 ? "table-row" : "none";
    }
  });
};

rows.forEach((row) => {
  var quantity = row.children[3];
  var price = row.children[2].innerHTML;

  var showMoney = row.lastElementChild;

  quantity.onchange = function (e) {
    var quantity = e.target.value;
    showMoney.innerHTML = price * quantity;

    var sum = 0;
    for (var i = 0; i < rows.length; i++) {
      var showTotal = rows[i].lastElementChild.innerHTML;
      sum = sum + Number(showTotal);
      total.innerHTML = sum;
    }
  };
});
