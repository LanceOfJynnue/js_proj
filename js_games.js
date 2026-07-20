import { supabase } from './supabaseClient.js'

/*
async function getData() {
  const { data, error } = await supabase
    .from('card_deck')
    .select('*')
    
  if (error) console.error(error)

  // Clear the "Loading..." text
  container.innerHTML = '';

  // Loop through your data array and create HTML elements
  data.forEach(item => {
    const listItem = document.createElement('li');
    
    // Replace 'title' with an actual column name from your table
    listItem.textContent = item.title || JSON.stringify(item); 
    
    container.appendChild(listItem);
  });
  
  return data
}
*/

async function fetchAndDisplayData() {
  const container = document.getElementById('data-container');

  try {
    // Pull data from your table
    const { data, error } = await supabase
      .from('card_deck') // Replace with your table name
      .select('*');

    if (error) throw error;

    // Clear the "Loading..." text
    container.innerHTML = '';

    // Loop through your data array and create HTML elements
    data.forEach(item => {
      const listItem = document.createElement('li');
      
      // Replace 'title' with an actual column name from your table
      listItem.textContent = item.suit || JSON.stringify(item);
      listItem.textContent = item.card_value || JSON.stringify(item);  
      
      container.appendChild(listItem);
    });

  } catch (err) {
    console.error(err);
    container.innerHTML = `<li style="color: red;">Error: ${err.message}</li>`;
  }
}

// Run the function when the page loads
window.addEventListener('DOMContentLoaded', fetchAndDisplayData);