document.addEventListener('DOMContentLoaded', function() {
    // Casket slider data
    const caskets = [
        { image: 'images/coffin1.jpg', name: 'Laser', price: '₱15,000' },
        { image: 'images/coffin2.jpg', name: 'Premium', price: '₱25,000' },
        { image: 'images/coffin3.jpg', name: 'Deluxe', price: '₱35,000' },
        { image: 'images/coffin4.jpg', name: 'Royal', price: '₱40,000' },
        { image: 'images/coffin5.jpg', name: 'Imperial', price: '₱45,000' }
    ];

    // Flower slider data
    const flowers = [
        { image: 'images/flower1.jpg', name: 'Amery', price: '₱2,000' },
        { image: 'images/flower2.jpg', name: 'Royal', price: '₱3,500' },
        { image: 'images/flower3.png', name: 'Premium', price: '₱5,000' },
        { image: 'images/flower4.png', name: 'Deluxe', price: '₱6,500' },
        { image: 'images/flower5.png', name: 'Imperial', price: '₱8,000' }
    ];

    // Initialize sliders
    initializeSlider('casket', caskets, 0);
    initializeSlider('flower', flowers, 1);

    function initializeSlider(type, items, index) {
        const productSliders = document.querySelectorAll('.product-slider');
        const slider = productSliders[index];
        const image = slider.querySelector('.product-image');
        const price = slider.querySelector('.price');
        let currentIndex = 0;

        // Previous button click handler
        slider.querySelector('.nav-arrow.prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateSlider();
        });

        // Next button click handler
        slider.querySelector('.nav-arrow.next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateSlider();
        });

        function updateSlider() {
            // Add transition class
            slider.classList.add('transitioning');

            // Update content after a short delay
            setTimeout(() => {
                image.src = items[currentIndex].image;
                image.alt = `${items[currentIndex].name} ${type === 'casket' ? 'Casket' : 'Flowers'}`;
                price.textContent = `${items[currentIndex].name} ${items[currentIndex].price}`;

                // Remove transition class
                slider.classList.remove('transitioning');
            }, 200);
        }

        // Add hover effect
        slider.addEventListener('mouseenter', () => {
            slider.classList.add('hover');
        });

        slider.addEventListener('mouseleave', () => {
            slider.classList.remove('hover');
        });

        // Initialize first image
        image.src = items[0].image;
        image.alt = `${items[0].name} ${type === 'casket' ? 'Casket' : 'Flowers'}`;
        price.textContent = `${items[0].name} ${items[0].price}`;
    }
}); 