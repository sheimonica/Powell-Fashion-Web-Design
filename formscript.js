function validateForm() {
    let a = document.forms["newsletter"]["name"].value;
    if (a == "") {
      alert("Name must be filled out");
      return false;
    }
    let b = document.forms["newsletter"]["email"].value;
    if (b == "") {
      alert("Email must be filled out");
      return false;
    }
    let c = document.forms["newsletter"]["product"].value;
    if (c == "") {
      alert("Product of interest must be filled out");
      return false;
    }
    let d = document.forms["newsletter"]["birthday"].value;
    if (d == "") {
      alert("Birthday must be filled out");
      return false;
    }
  }