import { supabase } from './supabaseClient.js'

async function getData() {
  const { data, error } = await supabase
    .from('card_deck')
    .select('*')
    
  if (error) console.error(error)
  console.log('Retrieved data:', data)
  return data
}