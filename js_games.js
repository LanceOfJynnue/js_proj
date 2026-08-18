// Replace these with your actual Supabase project values
const SUPABASE_URL = 'https://orryghximzoceldnymhu.supabase.co/rest/v1/';
const SUPABASE_ANON_KEY = 'sb_publishable_USyHeotY9Fn1jAaRDx3nuQ_Ik5nRE28';

// The CDN automatically exposes 'supabase' globally
const supabase = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

// Example: Fetch data from a table named 'todos'
async function getData() {
  const { data, error } = await supabase
    .from('todos')
    .select('*');

  if (error) {
    console.error('Error fetching data:', error.message);
    return;
  }
  console.log('Your data:', data);
}

// Call the function when the page loads
document.addEventListener('DOMContentLoaded', getTodos);

const heading = document.getElementById('main-heading');
const button = document.getElementById('action-btn');

button.addEventListener('click', () => {
    heading.textContent = "JavaScript is Working!";
    
    heading.style.color = "#28a745";
    
    alert("You successfully manipulated the HTML with JavaScript!");
});