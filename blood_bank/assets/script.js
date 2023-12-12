
function registration() {
  let role = document.getElementById("role").value;
  let name = document.getElementById("name").value;
  let number = document.getElementById("number").value;
  let email = document.getElementById("email").value;
  let blood = document.getElementById("blood").value;
  let password = document.getElementById("password").value;
  let city = document.getElementById("city").value;
  let availability = document.getElementById("availability").value;

  if (role === "" || name === "" || number === "" || email === "" || blood === "" || password === "" || city === "" || availability === "") {
    alert("Please fill up all the inputs!");
    return;
  }

}

function login() {
  let password_login = document.getElementById("password_login").value;
  let email_login = document.getElementById("email_login").value
  if (password_login === "" || email_login === "") {
    alert("Please fill up all the inputs!");
    return;
  }


}


// function login() {
//   let password_login = document.getElementById("password_login").value.trim();
//   let email_login = document.getElementById("email_login").value.trim();

//   if (!password_login || !email_login) {
//     alert("Please fill up all the inputs!");
//     return;
//   }

//   // Your login logic or further validation goes here
//   // For example, you can make an AJAX request for authentication
// }



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
  else (password == password2)
  {

    let xhttp = new XMLHttpRequest();
    xhttp.open(
      "GET",
      "../controls/editProfileCK.php?$oldPassword=" +
      oldPassword +
      "&" +
      "password=" +
      password,
      true
    );
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("newpass").innerHTML = this.responseText;
        // alert(this.responseText);
        // alert("your updated password is : ".$result);
      }
    };
    xhttp.send("oldPassword=" + oldPassword + "&" + "password=" + password);

  }


  // let xhttp = new XMLHttpRequest();
  // xhttp.open(
  //   "GET",
  //   "../controls/editProfileCK.php?$oldPassword=" +
  //   oldPassword +
  //   "&" +
  //   "password=" +
  //   password,
  //   true
  // );
  // xhttp.onreadystatechange = function () {
  //   if (this.readyState == 4 && this.status == 200) {
  //     document.getElementById("newpass").innerHTML = this.responseText;
  //     // alert(this.responseText);
  //     // alert("your updated password is : ".$result);
  //   }
  // };
  // xhttp.send("oldPassword=" + oldPassword + "&" + "password=" + password);




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
