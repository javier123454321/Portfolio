var scroll = window.requestAnimationFrame || function(callback){ window.setTimeout(callback, 1000/60)};

var elementsToShow = document.querySelectorAll('.resume-item');
console.log(elementsToShow);

function loop() {
    elementsToShow.forEach(function (element, index) {
      if (isElementInViewport(element)) {
          if(index+2 % 1 == 0){
            element.classList.add('animateRight');
          }else{
            element.classList.add('animateLeft');
          }
      }
    });
    scroll(loop);
  }
  loop();


  function isElementInViewport(el) {
    // special bonus for those using jQuery
    if (typeof jQuery === "function" && el instanceof jQuery) {
      el = el[0];
    }
    var rect = el.getBoundingClientRect();
    return (
      (rect.top <= 0
        && rect.bottom >= 0)
      ||
      (rect.bottom >= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.top <= (window.innerHeight || document.documentElement.clientHeight))
      ||
      (rect.top >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight))
    );
  }