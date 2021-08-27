document.addEventListener("DOMContentLoaded", function(event) {
  loading_observer();
});

function loading_observer() {
  const sections = [
    document.querySelectorAll('.column.grid > div.active'),
  ];

  var rootMargin = setMargin();

  window.addEventListener('resize', function(event) {
    rootMargin = setMargin();
  });


  const options = {
    root: null, // is viewport
    threshold: 0, // % of in viewport ie...1 means 100% must be in viewport
    rootMargin: rootMargin,
  };

  const observer = new IntersectionObserver(function(entries, observer) {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        let gridContainer = document.querySelector('.column.grid');
        let elem = document.querySelector(".column.grid > div.active");
        elem.classList.remove('active');
        let index = elem.getAttribute("data-index");
        const xhttp = new XMLHttpRequest();
        xhttp.open("GET", "lazyLoad.php?lazyLoad&index=" + index, false);
        xhttp.send();
        let data = xhttp.responseText;
        elem.insertAdjacentHTML('afterend', data);
        observer.unobserve(entry.target);
        loading_observer();
      }
    });
  }, options);

  sections.forEach(function(section, index) {
    if (section) {
      section.forEach(item => {
        observer.observe(item)
      });
    }
  });
};

function setMargin() {
  var rootMargin;
  if (window.innerWidth > 1025) {
    rootMargin = '0px 0px 0px 0px';
  } else {
    rootMargin = '0px 0px 0px 0px';
  }
  return rootMargin;
}
