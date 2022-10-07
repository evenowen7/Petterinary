/*----------------------------------------------------MAP LINE OF CODE START----------------------------*/

mapboxgl.accessToken = 'pk.eyJ1IjoiaWhhbm5hYmlsIiwiYSI6ImNsMzl2NmlrbjBkazgzaW4zNzZhcTU4dTEifQ.hb5zKbyN7da5VS97sqSZPQ';
        
navigator.geolocation.getCurrentPosition(successLocation, errorLocation, {
    enableHighAccuracy: true
})

function successLocation(position){
    setupMap([position.coords.longitude, position.coords.latitude])
}

function errorLocation() {
    setupMap([-6.2239, 106.6490])
}

function setupMap(center){
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: center,
        zoom: 16
    });
}

/*----------------------------------------------------MAP LINE OF CODE END----------------------------*/

window.onload = function() {
    const tab_switchers = document.querySelectorAll('[data-switcher]');

    for (let i = 0; i < tab_switchers.length; i++) {
        const tab_switcher = tab_switchers[i];
        const page_id = tab_switcher.dataset.tab;

        tab_switcher.addEventListener('click', function() {
            document.querySelector('.tabs .tab.is-active').classList.remove('is-active');
            tab_switcher.parentNode.classList.add('is-active');
            
            SwitchPage(page_id);
        });

    }
}

function SwitchPage(page_id) {
    const current_page = document.querySelector('.pages .page.is-active');
    current_page.classList.remove('is-active');

    const next_page = document.querySelector(`.pages .page[data-page="${page_id}"]`);
    next_page.classList.add('is-active');
}

        