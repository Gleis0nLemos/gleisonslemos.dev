window.addEventListener('load', function() {
    const headings = document.querySelectorAll('#heading'); // Seleciona todos os elementos <h1>
  
    headings.forEach(function(heading) {
      heading.classList.add('transform', 'translate-x-full');
  
      let startTime;
      const duration = 130; // Defina a duração da transição em milissegundos
      function animate(timestamp) {
        if (!startTime) {
          startTime = timestamp;
        }
        const elapsed = timestamp - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const translation = 100 * (1 - progress); // Altere o sinal para positivo
        heading.style.transform = `translateX(${translation}%)`;
  
        if (progress < 1) {
          requestAnimationFrame(animate);
        } else {
          heading.classList.remove('transform', 'translate-x-full');
        }
      }
  
      requestAnimationFrame(animate);
    });
  });