// Call the function when the page loads
document.addEventListener('DOMContentLoaded', getTodos);

const heading = document.getElementById('main-heading');
const button = document.getElementById('action-btn');

// Replace these with your actual Supabase project values
const SUPABASE_URL = 'https://wphnnfrjvmczpggrknay.supabase.co/rest/v1/';
const SUPABASE_ANON_KEY = 'sb_publishable_zwSiHqLvzwa3ssztWbsJ9Q_gK-IYCkZ';

// The CDN automatically exposes 'supabase' globally
const supabase = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

button.addEventListener('click', () => {
    heading.textContent = "JavaScript is Working!";
    
    heading.style.color = "#28a745";
    
    alert("You successfully manipulated the HTML with JavaScript!");
});

/*
async function getData() {
  const { data, error } = await supabase
    .from('user_table')
    .select('*');

  if (error) {
    console.error('Error fetching data:', error.message);
    return;
  }
  console.log('Your data:', data);
  alert('Your data:', data);
}
*/