<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" defer src="assets/js/lib.js"></script>
<script type="text/javascript" defer src="assets/js/functions.js"></script>
<script>
    function handlenav() {
        const menuLeft = document.querySelector('.menu-left.enable');

        // Check if the element exists before removing the class
        if (menuLeft) {
            menuLeft.classList.remove('enable');
        }
    }

    // Select the menu element
    // Select the menu element and all its child links
    const menuLinn = document.querySelector('.menu-linn');
    const menuLinks = menuLinn.querySelectorAll('a'); // Select all anchor tags inside menu-linn

    // Add a scroll event listener to the window
    window.addEventListener('scroll', () => {
        // Check if the user has scrolled more than 2px
        if (window.scrollY > 2) {
            menuLinn.style.background = '#ffffff'; // Set background to white
            menuLinn.style.backdropFilter = 'none'; // Remove the blur effect
            menuLinn.style.color = 'black'; // Change general text color

            // Change link colors to black
            menuLinks.forEach(link => {
                link.style.color = 'black';
            });
        } else {
            menuLinn.style.background = 'transparent'; // Set background to transparent
            menuLinn.style.backdropFilter = 'blur(25px)'; // Apply the blur effect
            menuLinn.style.color = 'white'; // Change general text color

            // Change link colors to white
            menuLinks.forEach(link => {
                link.style.color = 'white';
            });
        }
    });


</script>