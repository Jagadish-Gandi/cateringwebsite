
  function validateForm() {
    // Get the form inputs
    var name = document.getElementById("name").value;
    var people = document.getElementById("people").value;
    var dateAndTime = document.getElementById("date_and_time").value;
    var mobile = document.getElementById("mobile").value;

    // Simple validation checks
    if (name.trim() === "") {
      alert("Please enter your name.");
      return false;
    }

    if (isNaN(people) || people < 1) {
      alert("Please enter a valid number of people.");
      return false;
    }

    if (dateAndTime.trim() === "") {
      alert("Please select a date and time.");
      return false;
    }

    if (isNaN(mobile) || mobile.length !== 10) {
      alert("Please enter a valid 10-digit mobile number.");
      return false;
    }

    // All validations passed, allow form submission
    return true;
  }
