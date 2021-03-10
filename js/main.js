/*initialisation compteur de click*/
let count = 0;

/*récupération des element du dom par leur id dans une variable*/
const click = document.getElementById('linkclick');
let counter = document.getElementById('countclick');


/*ecoute des evenements 'click sur l'élèment récupere*/
click.addEventListener('click', function(event) {
   count++; /* incrmeentation a chaque click */
   counter.innerHTML = count; /* modif de counter dans le dom*/
   let result = document.getElementById('resultat');
   result.textContent = count;
   event.preventDefault();
   event.stopPropagation();
});