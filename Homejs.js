function startSlideshow() {
  const slides = document.querySelectorAll('.slide');
  let currentSlide = 0;

  setInterval(() => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % slides.length;
    slides[currentSlide].classList.add('active');
  }, 3000);
}

startSlideshow();



const calendarHeader = document.getElementById('calendar-header');
const calendarDays = document.getElementById('calendar-days');

const currentDate = new Date();

calendarHeader.textContent = currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });

const daysInMonth = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

for (let i = 1; i <= daysInMonth; i++) {
  const dayDiv = document.createElement('div');
  dayDiv.textContent = i;

  if (i === currentDate.getDate()) {
    dayDiv.classList.add('current-date');
  }

  calendarDays.appendChild(dayDiv);
}


