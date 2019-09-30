main = function()
{
  let pass1 = document.getElementById("password1").value
  let pass2 = document.getElementById("password2").value

  if(pass1 == pass2)
  {
    if(pass1.length >= 8 && pass2.length >= 8)
    {
      alert("Passwords match")
    }
    else
    {
      alert("Password is not of length 8")
    }
  }
  else {
    alert("Passwords do not match")
  }

}
