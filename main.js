let count1 = 0;
let count2 = 0;

const child = document.getElementById('child');
let countChild = document.getElementById('child-count');


parent.addEventListener('click', function(){
       count1++;
       countParent.innerHTML = count1;                 
  });
child.addEventListener('click', function(event){
        count2++;
  countChild.innerHTML = count2; 
  let result = document.getElementById('resultat');
  result.textContent = count2;
  event.preventDefault();   
  event.stopPropagation();
 });