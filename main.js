// function handleInfoIntersection(entries, observer) {
//     entries.forEach((entry) => {
//       if (entry.isIntersecting) {
//         entry.target.classList.add('animate-slide-in');
//         observer.unobserve(entry.target);
//       }
//     });
//   }
  
  // Function to handle the intersection observer callback for .about-us-image
  function handleImageIntersection(entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate-zoom-out');
        observer.unobserve(entry.target);
      }
    });
  }
  
  // Create an Intersection Observer for .about-us-info
  const infoObserver = new IntersectionObserver(handleInfoIntersection, {
    threshold: 0.5, // Adjust the threshold as needed
  });
  
  // Create an Intersection Observer for .about-us-image
  const imageObserver = new IntersectionObserver(handleImageIntersection, {
    threshold: 0.5, // Adjust the threshold as needed
  });
  
  // Target the elements you want to observe
//   const aboutUsInfoElement = document.querySelector('.main-content-description');
  const mainContentImage = document.querySelector('.main-content-image');
  
  // Start observing the elements
//   if (aboutUsInfoElement) {
//     infoObserver.observe(aboutUsInfoElement);
//   }
  
  if (mainContentImage) {
    imageObserver.observe(mainContentImage);
  }
  
