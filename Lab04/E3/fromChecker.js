
document.getElementById('form').addEventListener('submit', action =>
{
  if (invalidUsername(document.querySelector('input[type=text]').value))
  {
    alert("Please input a valid username");
    action.preventDefault();
  }
  else if (document.querySelector('input[type=password]').value === "")
  {
    alert("Please input a valid password");
    action.preventDefault();
  }
});

document.querySelector('input[type=button]').addEventListener('click', reset =>
{
  location.reload();
});
