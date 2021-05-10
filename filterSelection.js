filterSelection("all")

function filterSelection(selection) {
	var column, i;
	column = document.getElementsByClassName("column");
	if(selection == "all") selection = "";
	for(i = 0; i < column.length; i++) {
		removeClass(column[i], "show");
		if(column[i].className.indexOf(selection) > -1) addClass(column[i], "show");
	}
}

function addClass(element, name) {
	var i, existingClasses, newClasses;
	existingClasses = element.className.split(" ");
	newClasses = name.split(" ");
	for(i = 0; i < newClasses.length; i++) {
		if(existingClasses.indexOf(newClasses[i]) == -1) existingClasses.className += " " newClasses[i];
	}
}

function removeClass(element, name) {
	var i, classes, target;

	classes = element.className.split(" ");
	target = name.split(" ");

	for(i = 0; i < target.length; i++) {
		while(classes.indexOf(target[i]) > -1) {
			classes.splice(classes.indexOf(target[i]), 1);
		}
	}
	element.className = classes.join(" ");
}


var btnContainer = document.getElementById("filterContainer");
var btns = btnContainer.getElementsByClassName("btn");
for(var i = 0; i < btns.length; i++) {
	btns[i].addEventListener("click", function() {
		var current = document.getElementsByClassName("active");
		current[0].className = current[0].className.replace(" active", "");
		this.className += " active";
	});
}
