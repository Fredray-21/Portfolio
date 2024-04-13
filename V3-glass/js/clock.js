export const updateHour = () => {
    const dateNow = new Date();
    const hour = { s: dateNow.getSeconds(), m: dateNow.getMinutes(), h: dateNow.getHours() };
    Object.keys(hour).forEach(key => {
        const elem = document.getElementById(`clock-${key}`);
        if(elem)
        {
            elem.textContent = hour[key] < 10 ? `0${hour[key]}` : hour[key];
        }
    });
}

const location = Intl.DateTimeFormat().resolvedOptions().timeZone;
const locationElem = document.getElementById('clock-location');
if(locationElem)
{
    locationElem.textContent = location;
}