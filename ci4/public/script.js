// Pop-up
if (!sessionStorage.getItem('alertShown')) {
  // If not, show the alert
  alert("Welcome to Matt's Personal profile Website!");
  // Mark the alert as shown in sessionStorage
  sessionStorage.setItem('alertShown', 'true');
}

// Console
console.log("Introduction, Variables, Let, Const & Data Types, Strings, Booleans, Events, Precedence & Conditionals, Dates")
console.log("Introduction: Mashu's Shack version 3.0");
let sfname = "Matt";
let fname = "Matthew";
let lname = "Paren";
let age = 22;
let fjob = "Web Dev";
console.log("Variables, Let, Const & Data Types: I am " + lname + ", " + fname + ". You can call me " + sfname + ", I am a future " + fjob + ".");
console.log("I'm " + age);
let isStudent = true;
if (isStudent) {
    console.log("Booleans: I am still a Student");
}else {
    console.log("Booleans: I am Not a Student anymore");
}
if (age >= 18) {
  console.log("You are eligible to vote.");
} else {
  console.log("You are not eligible to vote.");
}
let currentDate = new Date();
console.log(currentDate);

let specificDate = new Date("2024-03-04");
console.log(specificDate);

let year = currentDate.getFullYear();
console.log("Current year:", year);

let matt = {
  firstname: "Matthew",
  lastname: "Paren",
  fullname: function() {
    return this.firstname + " " + this.lastname;
  }
}
console.log("Objects: " + matt.firstname);

console.log("Objects: " + matt.fullname());

console.log("Functions: ")
function greet(hname) {
  return "Hello, " + hname + "!";
}
console.log(greet("World"));

console.log("Classes: ")
class Person {
  constructor(name) {
      this.name = name;
  }

  greet() {
      return `Hello, ${this.name}!`;
  }
}
let person = new Person("User");
console.log(person.greet());

console.log("Async: ");
async function fetchData() {
  let response = await fetch("https://jsonplaceholder.typicode.com/posts/1");
  let data = await response.json();
  return data;
}
fetchData().then(data => console.log(data));

document.addEventListener('DOMContentLoaded', function() {
  console.log("HTML DOM : Click (Mashu?)");

  let element = document.getElementById('socmed');
  
  if (element) {
      element.innerHTML = "Mashu?";
      
      element.addEventListener('click', function() {
          alert('It is my Nickname from games!');
      });
  } else {
      console.error("Element with ID 'socmed' not found.");
  }
});

// Content
document.addEventListener('DOMContentLoaded', function () {
  const logo = document.getElementById('logo');
  const content = document.querySelector('.content');

  function rotateLogo() {
      logo.style.transition = 'transform 1s ease';
      logo.style.transform = 'rotate(360deg)';

      setTimeout(() => {
          logo.style.transform = 'rotate(0deg)';
      }, 1000);
  }
  function fadeInContent() {
      content.style.transition = 'opacity 1s ease';
      content.style.opacity = 0;

      setTimeout(() => {
          content.style.opacity = 1;
      }, 1000);
  }
  rotateLogo();
  fadeInContent();
});
