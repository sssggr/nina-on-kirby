var toggle = document.querySelector('#btn-burger');
var menu = document.querySelector('#menu');
var menuItems = document.querySelectorAll('#menu li a');
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

// Dropdown logic for all menu dropdowns
var dropdownToggles = document.querySelectorAll('.dropdown-toggle');
dropdownToggles.forEach(function(toggle) {
  var dropdownId = toggle.id.replace('-toggle', '-list');
  var dropdownList = document.getElementById(dropdownId);
  if (!dropdownList) return;
  toggle.addEventListener('click', function(e) {
    e.preventDefault();
    var expanded = this.getAttribute('aria-expanded') === 'true';
    this.setAttribute('aria-expanded', expanded ? 'false' : 'true');
    dropdownList.classList.toggle('show');
    // Optional: Close other open dropdowns
    dropdownToggles.forEach(function(otherToggle) {
      if (otherToggle !== toggle) {
        var otherDropdownId = otherToggle.id.replace('-toggle', '-list');
        var otherDropdownList = document.getElementById(otherDropdownId);
        if (otherDropdownList) {
          otherDropdownList.classList.remove('show');
          otherToggle.setAttribute('aria-expanded', 'false');
        }
      }
    });
  });
  // Click outside to close
  document.addEventListener('click', function(e) {
    if (!toggle.contains(e.target) && !dropdownList.contains(e.target)) {
      dropdownList.classList.remove('show');
      toggle.setAttribute('aria-expanded', 'false');
    }
  });
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

// Open external links in new tab
document.addEventListener('DOMContentLoaded', function() {
  var links = document.querySelectorAll('a');
  var currentHost = window.location.hostname;
  
  links.forEach(function(link) {
    // Skip if target is already set
    if (link.getAttribute('target')) {
      return;
    }
    
    var href = link.getAttribute('href');
    
    // Skip if no href or it's an anchor/relative link
    if (!href || href.startsWith('#') || href.startsWith('mailto:') || href.startsWith('tel:')) {
      return;
    }
    
    // Check if link is external
    try {
      var linkUrl = new URL(href, window.location.href);
      
      if (linkUrl.hostname && linkUrl.hostname !== currentHost) {
        link.setAttribute('target', '_blank');
        link.setAttribute('rel', 'noopener noreferrer');
      }
    } catch (e) {
      // If URL parsing fails, it's likely a relative link, so ignore it
    }
  });
});