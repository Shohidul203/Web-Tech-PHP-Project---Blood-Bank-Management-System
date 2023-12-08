function findDonor() {
  let blood = document.getElementById("blood").value;
  let city = document.getElementById("city").value;

  if (blood === "-" || city === "") {
    alert("Please fill up all the inputs!");
    return;
  }

  let xhttp = new XMLHttpRequest();
  xhttp.open(
    "GET",
    "../controls/findDonorCK.php?blood=" +
    blood +
    "&" +
    "city=" +
    city,
    true
  );
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("result").innerHTML = this.responseText;
    }
  };
  xhttp.send("blood=" + blood + "&" + "city=" + city);

}


function editProfile() {
  let name = document.getElementById("name").value;
  let city = document.getElementById("number").value;
  let email = document.getElementById("email").value;
  let number = document.getElementById("city").value;
  let availability = document.getElementById("availability").value;

  if (name === "-" || number === "" || email === "" || city === "" || availability === "") {
    alert("Please fill up all the inputs!");
    return;
  }

}

function changePassword() {
  let oldPassword = document.getElementById("oldPassword").value;
  let password = document.getElementById("password").value;
  let password2 = document.getElementById("password2").value;

  if (oldPassword === "" || password === "" || password2 === "") {
    alert("Please fill up all the inputs!");
    return;
  } else if (password != password2) {
    alert("Password didn't match! Try again");
  }
}
