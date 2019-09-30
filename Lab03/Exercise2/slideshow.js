let myPics = ["red1.jpg", "red2.jpg", "red3.jpg", "red4.jpg", "red5.jpg"];

let myCounter = 0;

function previousPic()
{
  if(myCounter == 0)
  {
    myCounter = 5;
    document.getElementById("pic").src = myPics[myCounter-1];

  }
    myCounter--;
    document.getElementById("pic").src = myPics[myCounter];

}

function nextPic()
{
  document.getElementById("pic").src = myPics[myCounter];

  if(myCounter == 5)
  {
    myCounter = 0;
    document.getElementById("pic").src = myPics[count];
  }
  else
  {
    myCounter++;
  }
}
