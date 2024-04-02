
    const navLinks = document.querySelectorAll('nav a'); // Select all anchor tags within the navigation

    navLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            // Prevent default form submission behavior (if applicable)
            event.preventDefault();

            // Get the target URL from the clicked link's href attribute
            const targetURL = event.target.href;

            // Optionally: Highlight the clicked link (add a CSS class)
            // link.classList.add('active'); // Assuming you have a CSS class for active links

            // Update the page content based on the clicked link (replace with your logic)
            // ... (code to fetch content or redirect based on targetURL)
            window.location.href = targetURL;
        });
    });
