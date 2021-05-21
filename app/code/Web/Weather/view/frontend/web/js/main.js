const APP_ID = 'da7a74b92ff38d2204912301e24a606b';
const DEFAULT_VALUE = '--';
const searchInput = document.querySelector('#search-input');
const cityName = document.querySelector('.city-name');
const weatherState = document.querySelector('.weather-state');
const weatherIcon = document.querySelector('.weather-icon');
const temperature = document.querySelector('.temperature');


const sunrise = document.querySelector('.sunrise');
const sunset = document.querySelector('.sunset');
const humidity = document.querySelector('.humidity');
const windSpeed = document.querySelector('.wind-speed');


runFetch('hanoi');
searchInput.addEventListener('change', (e) => {
    runFetch(e.target.value);
 
});
function runFetch(value){
    fetch(`https://api.openweathermap.org/data/2.5/weather?q=${value}&appid=${APP_ID}&units=metric&lang=vi`)
    .then(async res => {
        const data = await res.json();
        console.log('[Search Input]', data);
        console.log(weatherIcon );

        if(data.cod == 200){
            cityName.innerHTML = data.name || DEFAULT_VALUE;
            weatherState.innerHTML = data.weather[0].description || DEFAULT_VALUE;
            weatherIcon.setAttribute('src', `http://openweathermap.org/img/wn/${data.weather[0].icon}@2x.png`);
    
            temperature.innerHTML = Math.round(data.main.temp) || DEFAULT_VALUE;
    
            sunrise.innerHTML = convertUnixtoDatetime(data.sys.sunrise)|| DEFAULT_VALUE;
            sunset.innerHTML = convertUnixtoDatetime(data.sys.sunset)|| DEFAULT_VALUE;
            humidity.innerHTML = data.main.humidity || DEFAULT_VALUE;
            windSpeed.innerHTML = (data.wind.speed * 3.6).toFixed(2) || DEFAULT_VALUE;
        }
        else{
            alert("khong co thanh pho nay");
        }
    });
}
function convertUnixtoDatetime( unixTime){
    var milliseconds=unixTime*1000;
    var dateObject = new Date(milliseconds);
    let option={hour:"numeric",minute:"numeric",second:"numeric"}
    var humanDateFormat=dateObject.toLocaleDateString("en-Us",option);
    return humanDateFormat.slice(-10);
}
