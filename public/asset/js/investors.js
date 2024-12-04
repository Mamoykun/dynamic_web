document.querySelectorAll('.wartsila-nav-item.has-submenu').forEach(item => {
    item.addEventListener('click', function() {
        this.classList.toggle('active');
        const submenu = this.querySelector('.wartsila-submenu');
        submenu.classList.toggle('active');
    });
});