import './bootstrap';

let filter = document.getElementById('filter');
let filterBtn = document.getElementById('filter-btn');
let filterClose = document.getElementById('filter-btn-close');
let mainContainer = document.querySelector('main.container')


filterBtn.addEventListener('click', function() {
    if (filter.classList.contains('hidden')) {
        mainContainer.classList.add('backdrop-blur-xl');
        filter.classList.remove('hidden');
        filterBtn.classList.add('hidden');
        filterClose.classList.remove('hidden');
    }else
    {
        mainContainer.classList.remove('backdrop-blur-xl');
        filter.classList.add('hidden');
        filterBtn.classList.add('hidden');
        filterClose.classList.add('hidden');

    }
});

filterClose.addEventListener('click', function() {
    if (filter.classList.contains('hidden')) {
        mainContainer.classList.add('backdrop-blur-xl');
        filter.classList.remove('hidden');
        filterBtn.classList.remove('hidden');
        filterClose.classList.add('hidden');
    }else
    {
        mainContainer.classList.remove('backdrop-blur-xl');
        filter.classList.add('hidden');
        filterBtn.classList.remove('hidden');
        filterClose.classList.add('hidden');

    }
});

