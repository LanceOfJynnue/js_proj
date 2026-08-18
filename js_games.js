// Select the HTML elements by their IDs
const heading = document.getElementById('main-heading');
const button = document.getElementById('action-btn');

// Add a click event listener to the button
button.addEventListener('click', () => {
    // Change the text content of the heading
    heading.textContent = "JavaScript is Working!";
    
    // Dynamically change the styling
    heading.style.color = "#28a745";
    
    // Alert the user
    alert("You successfully manipulated the HTML with JavaScript!");
});