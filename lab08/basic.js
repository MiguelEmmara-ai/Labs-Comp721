function questionA() {
    let sum = 0;
    for (x = 1; x < 11; x++) {
        sum = sum + x;
        document.write(x);
        document.write('<br>');
    }

    document.write('<br>');
    document.write(sum);
}

function questionB(bgcolor) {
    document.body.style.backgroundColor = bgcolor;
}

function questionD() {
    let userInput = prompt("Enter a string consisting of several words separated by single spaces");
    if (userInput != null) {
        let usingSplit = userInput.split('');
        for (let x = 0; x < userInput.length; x++) {
            if (usingSplit[x] === " ") {
                document.write(" <br> ");
            }
            document.write(usingSplit[x]);
        }
    }
}

// Constructor function for Person objects
function Data(fName, lName, email) {
    this.firstName = fName;
    this.lastName = lName;
    this.email = email;

}

// Create 2 Data objects
const dataExample1 = new Data("John", "Doe", "john@gmail.com");
const dataExample2 = new Data("Sally", "Rally", "sally@gmail.com");

// Add a name method to first object
dataExample1.printInfo = function() {
    return this.firstName + " | " + this.lastName + " | " + this.email;
};

// Add a name method to second object
dataExample2.printInfo = function() {
    return this.firstName + " | " + this.lastName + " | " + this.email;
};

// Display Data
document.getElementById("e1").innerHTML = dataExample1.printInfo();
document.getElementById("e2").innerHTML = dataExample2.printInfo();

// Property which is an array of records
Data.prototype.name = function() {
    var row0 = { name: "John", email: "doe@gmail.com" };

    var row1 = { name: "mary", email: "mary@gmail.com" };

    var row2 = { name: "ian", email: "ian@gmail.com" };

    document.write(row0.name + " | " + row0.email + "<br>");
    document.write(row1.name + " | " + row1.email + "<br>");
    document.write(row2.name + " | " + row2.email + "<br>");
};