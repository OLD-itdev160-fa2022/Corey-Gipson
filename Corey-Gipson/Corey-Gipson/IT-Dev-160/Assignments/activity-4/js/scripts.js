// welcome message
var user = 'Corey';
var salutation = 'Hello, ';
var greeting = salutation + user + '! Here is the review on the Last Dance';
var greetingEl = document.getElementById('greeting');

greetingEl.textContent = greeting;

// product price
var price = 20,
    studentDiscount = .10,
    studentPrice = price - (price * studentDiscount),
    priceEl = document.getElementById('price'),
    studentPriceEl = document.getElementById('Student-Price');

priceEl.textContent = price.toFixed(2);
studentPriceEl.textContent = studentPrice.toFixed(2);