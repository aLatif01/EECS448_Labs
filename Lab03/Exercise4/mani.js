function change()
{
var myTag = document.getElementById("dummyText");

myTag.style.backgroundColor = `rgb(${document.getElementById("blueBackground").value},
${document.getElementById("greenBackground").value},
${document.getElementById("redBackground").value})`;

myTag.style.borderColor = `rgb(${document.getElementById("blueBorder").value},
${document.getElementById("greenBorder").value},
${document.getElementById("redBorder").value})`;

myTag.style.borderWidth = document.getElementById("borderWidth").value;
}
