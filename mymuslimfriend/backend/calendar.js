const ramadhan = document.getElementById('ramadhan')
const hijri = document.getElementById('hijri')
const hijriEvent = document.getElementById('hijriEvent')
const masihi = document.getElementById('masihi')
const time = document.getElementById('time')
const eventName = document.getElementById('event')
const detail = document.getElementById('detail')
var date =  new Date()
var currentTIme = date.getHours()
var currentMinute = date.getMinutes()
var month = 0
var day = 0
let gregorianDay = date.getDate();
let gregorianMonth = date.getMonth() + 1;  // Months are zero-based, so add 1
let gregorianYear = date.getFullYear();
var ramadanCountdown = 183

// islamic month

const muharam = "Muharram";
const safar = "Safar";
const rabiAlAwwal = "Rabi' al-Awwal";
const rabiAlThani = "Rabi' al-Thani";
const jumadaAlAwwal = "Jumada al-Awwal";
const jumadaAlThani = "Jumada al-Thani";
const rajab = "Rajab";
const shaBan = "Sha'ban";
const Ramadan = "Ramadan";
const shawwal = "Shawwal";
const dhulQiDah = "Dhu al-Qi'dah";
const dhulHijjah = "Dhu al-Hijjah";

// hijri calendar event

const ashura = "Ashura";
const ashuraDesc = "10th Muharram: Commemorates the martyrdom of Husayn ibn Ali at the Battle of Karbala.";

const mawlid = "Mawlid al-Nabi";
const mawlidDesc = "12th Rabi' al-Awwal: Celebrates the birth of the Prophet Muhammad.";

const miraj = "Lailat al-Miraj";
const mirajDesc = "27th Rajab: Commemorates the night journey and ascension of the Prophet Muhammad to the heavens.";

const baraah = "Lailat al-Bara'ah";
const baraahDesc = "15th Sha'ban: Known as the Night of Forgiveness, observed with prayers and fasting.";

const ramadan = "Ramadan";
const ramadanDesc = "9th month of the Hijri calendar: A month of fasting from dawn to sunset.";

const qadr = "Lailat al-Qadr";
const qadrDesc = "27th Ramadan: The Night of Decree, believed to be when the Quran was first revealed.";

const eidFitr = "Eid al-Fitr";
const eidFitrDesc = "1st Shawwal: Marks the end of Ramadan with a festive celebration.";

const hajj = "Hajj";
const hajjDesc = "8th-12th Dhu al-Hijjah: The annual pilgrimage to Mecca, one of the Five Pillars of Islam.";

const arafah = "Day of Arafah";
const arafahDesc = "9th Dhu al-Hijjah: The holiest day in Islam, observed during Hajj.";

const eidAdha = "Eid al-Adha";
const eidAdhaDesc = "10th Dhu al-Hijjah: Festival of Sacrifice, commemorates Ibrahim's willingness to sacrifice his son.";

const hijriNewYear = "Hijri New Year";
const hijriNewYearDesc = "1st Muharram: Marks the migration of the Prophet Muhammad from Mecca to Medina.";


function innitTime(){
    setInterval(() => {
        time.textContent = currentTIme + ":" + currentMinute
        ramadhan.textContent = ramadanCountdown
        if (currentTIme === 0 && currentMinute === 0) {
            day++;
            ramadanCountdown = 0
            innitCalendar(); 
        }

    }, 1000);
}

function innitCalendar(){

    masihi.textContent = gregorianDay + "/" + gregorianMonth + "/" + gregorianYear; 
    if(1 == 1){

        if(month == 1){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ muharam + " 1446"
                hijriEvent.textContent =day +" "+ muharam + " 1446"
                if(day == 1){
                    eventName.textContent = hijriNewYear
                    detail.textContent = hijriNewYearDesc
                }
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 2){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ safar + " 1446"
                hijriEvent.textContent =day +" "+ safar + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 3){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ rabiAlAwwal + " 1446"
                hijriEvent.textContent =day +" "+ rabiAlAwwal + " 1446"
                if(day == 12){
                    eventName.textContent = mawlid
                    detail.textContent = mawlidDesc
                }
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 4){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ rabiAlThani + " 1446"
                hijriEvent.textContent =day +" "+ rabiAlThani + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 5){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ jumadaAlAwwal + " 1446"
                hijriEvent.textContent =day +" "+ jumadaAlAwwal + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 6){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ jumadaAlThani + " 1446"
                hijriEvent.textContent =day +" "+ jumadaAlThani+ " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 7){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ rajab + " 1446"
                hijriEvent.textContent =day +" "+ rajab+ " 1446"
                if(day == 27){
                    eventName.textContent = miraj
                    detail.textContent = mirajDesc
                }
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 8){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ shaBan  + " 1446"
                hijriEvent.textContent =day +" "+ shaBan + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 9){
            if(day < 30){ 
                hijri.textContent ="| "+ day +" "+ Ramadan  + " 1446"
                hijriEvent.textContent =day +" "+ Ramadan + " 1446"
                if(day == 2){
                    eventName.textContent = ramadan
                    detail.textContent =  ramadanDesc
                }
                
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 10){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ shawwal  + " 1446"
                hijriEvent.textContent =day +" "+ shawwal + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 11){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ dhulQiDah + " 1446"
                hijriEvent.textContent =day +" "+ dhulQiDah + " 1446"
            }
            else{
                month++
                day = 1
            }
        }

        if(month == 12){
            if(day < 29){ 
                hijri.textContent ="| "+ day +" "+ dhulHijjah + " 1446"
                hijriEvent.textContent =day +" "+ dhulHijjah + " 1446"
                if(day == 11){
                    eventName.textContent = eidAdha
                    detail.textContent =  eidAdhaDesc
                }
            }
            else{
                month = 1
            }
        }

    }

}

innitTime()
innitCalendar()
