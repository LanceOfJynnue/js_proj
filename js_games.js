const heading = document.getElementById('main-heading');
const button = document.getElementById('action-btn');

// Call the function when the page loads
document.addEventListener('DOMContentLoaded', getData);

const SUPABASE_URL = 'https://orryghximzoceldnymhu.supabase.co';
const SUPABASE_ANON_KEY = 'sb_publishable_USyHeotY9Fn1jAaRDx3nuQ_Ik5nRE28';

const supabase = supabase.createClient(SUPABASE_URL, SUPABASE_ANON_KEY);

async function getData() {
  const { data, error } = await supabase
    .from('test')
    .select('*');

  if (error) {
    console.error('Error fetching data:', error.message);
    return;
  }
  console.log('Your data:', data);
  alert('Your data:', data);
}

button.addEventListener('click', () => {
    heading.textContent = "JavaScript is Working!";
    
    heading.style.color = "#28a745";
    
    alert("You successfully manipulated the HTML with JavaScript!");
});
