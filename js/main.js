import lozad from 'lozad'
const observer = lozad('.lozad', {
    rootMargin: '100px 0px', 
    threshold: 0.1 
});
observer.observe();