let temperatuur = 19;
const temperatuurUitvoer = document.getElementById('temperatuur');
const cirkelBoog = document.getElementById('cirkelBoog');
const thermostaat = document.getElementById('thermostaat');

// temperatuur = thermostaat.value;

const uitvoeren = (temp) => {
    temperatuurUitvoer.innerHTML = temp;
    let boog = temp * 100/31;
    cirkelBoog.style.strokeDasharray = `${boog} ${100 - boog}`;
}

const animeerUitvoer = (temp) => {
    let t = 0;
    const timer = setInterval( () => {
        if (t <= temp) {
            uitvoeren(t);
            t++;
        }
        else {
            clearInterval(timer);
        }
    }, 40)
}

animeerUitvoer(thermostaat.value);

thermostaat.addEventListener('change', () => {
    animeerUitvoer(thermostaat.value);
})