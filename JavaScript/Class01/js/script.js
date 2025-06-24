//Variable
var one; //Undefined কারন কিছু ডিফাইন করা নাই। 
var two = 3;
var add = one + two;

document.write("First No: =" +one+"<br>Second No: ="+two+"<br>");
document.write(one+"+"+two+"="+add+"<br>");



function showName()
{
	let num1 = prompt("Enter your first name:");
	let num2 = prompt("Enter Your last name:");

	var fullname = num1 + num2;

	document.getElementById("showname").innerHTML = fullname; 
}