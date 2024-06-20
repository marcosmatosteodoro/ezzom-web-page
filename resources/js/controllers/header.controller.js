function toogleMenuExpand() {
  let newAtribute;
  const button = document.getElementById("button-expand")

  if(!button){
    console.error('Button not found')
    return false;
  }

  if(button?.getAttribute('aria-expanded') === 'false') {
    newAtribute = 'true';
  } else {
    newAtribute = 'false'
  }
  
  button.setAttribute('aria-expanded', newAtribute)
}

document.getElementById('button-expand').addEventListener('click', toogleMenuExpand)
