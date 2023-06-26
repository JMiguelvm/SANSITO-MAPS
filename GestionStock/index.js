function searchStock() {
  var input = document.getElementById('searchInput');
  var filter = input.value.toLowerCase();
  var table = document.getElementById('stockTable');
  var rows = table.getElementsByTagName('tr');

  for (var i = 0; i < rows.length; i++) {
      var columns = rows[i].getElementsByTagName('td');
      var found = false;

      for (var j = 0; j < columns.length; j++) {
          var cellValue = columns[j].textContent || columns[j].innerText;

          if (cellValue.toLowerCase().indexOf(filter) > -1) {
              found = true;
              break;
          }
      }

      if (found) {
          rows[i].style.display = '';
      } else {
          rows[i].style.display = 'none';
      }
  }
}