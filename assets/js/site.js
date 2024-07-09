var toggle = document.querySelector('#btn-burger');
var menu = document.querySelector('#menu');
var menuItems = document.querySelectorAll('#menu li a');
var showdropdown = document.querySelector('#showdropdown');
var dropdown = document.querySelector('#dropdown');
var showaccordionDetail = document.getElementsByClassName('accordion-title');
var accordionIndex;

toggle.addEventListener('click', function(){
  if (menu.classList.contains('is-active')) {
    this.setAttribute('aria-expanded', 'false');
    this.classList.remove('is-active');
    menu.classList.remove('is-active');
  } else {
    this.setAttribute('aria-expanded', 'true');
    this.classList.add('is-active');
    menu.classList.add('is-active'); 
    //menuItems[0].focus();
  }
});

showdropdown.addEventListener('click', function(){
  if(dropdown.classList.contains('show')){
    dropdown.classList.remove('show');
    this.nextElementSibling.classList.remove("rotate-180");
  } else {
    dropdown.classList.add('show');
    this.nextElementSibling.classList.add("rotate-180");
  }
});

const onClickOutside = (element, callback) => {
  document.addEventListener('click', e => {
    if (!element.contains(e.target)) callback();
  });
};

onClickOutside(showdropdown, function(){
  if(dropdown.classList.contains('show')){
    dropdown.classList.remove('show');
    showdropdown.nextElementSibling.classList.remove("rotate-180");
  }
});

for (accordionIndex = 0; accordionIndex < showaccordionDetail.length; accordionIndex++) {
  showaccordionDetail[accordionIndex].addEventListener("click", function() {
    this.classList.toggle("active");
    var ariaExpanded = this.getAttribute("aria-expanded");
    if( ariaExpanded == "false"){
      ariaExpanded = "true";
    } else {
      ariaExpanded = "false";
    }
    this.setAttribute("aria-expanded", ariaExpanded);
    var accordionDetails = this.nextElementSibling;
    var accordionChevron = this.lastElementChild;
    if (accordionDetails.classList.contains("accordion-details-hidden")){
      accordionDetails.classList.remove("accordion-details-hidden");
      accordionChevron.classList.add("rotate-180");
    } else {
      accordionDetails.classList.add("accordion-details-hidden");
      accordionChevron.classList.remove("rotate-180");
    }
  });
} 