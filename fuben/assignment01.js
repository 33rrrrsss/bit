document.addEventListener('DOMContentLoaded', function() {
    const prevButton = document.querySelector('button.prev');
    const nextButton = document.querySelector('button.next');
    const moviesContainer = document.querySelector('.movies');
    const movies = document.querySelectorAll('.movie');
    const totalMovies = movies.length;
    const visibleMovies = 5; // 调整为五部电影
    let currentIndex = 0;
    let autoSlideInterval;

    function updateMoviePositions() {
        const offset = -(currentIndex * (200 + 20)); 
        moviesContainer.style.transform = `translateX(${offset}px)`;
    }

    function slideNext() {
        if (currentIndex < totalMovies - visibleMovies) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateMoviePositions();
    }

    function slidePrev() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalMovies - visibleMovies;
        }
        updateMoviePositions();
    }

    function startAutoSlide() {
        autoSlideInterval = setInterval(slideNext, 3000); // 每3秒自动滚动
    }

    function resetAutoSlide() {
        clearInterval(autoSlideInterval);
        startAutoSlide();
    }

    prevButton.addEventListener('click', function() {
        slidePrev();
        resetAutoSlide();
    });

    nextButton.addEventListener('click', function() {
        slideNext();
        resetAutoSlide();
    });

    startAutoSlide();
});
