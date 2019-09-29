function toggleDropdown() {
    var dropdownButton = document.querySelector('.dropdown_button');
    dropdownButton.addEventListener('click', function() {
        let expanded = this.getAttribute('aria-expanded') === 'true' || false;
        this.setAttribute('aria-expanded', !expanded);
        let menu = this.nextElementSibling;
        menu.classList.toggle('is_open');
    });

}

export {toggleDropdown}
