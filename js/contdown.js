(function() {
    const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

    // ---------------- Validation date Prove--------------------------------
    let dia = new Date();
    //let dia = new Date(2022, 09 - 1, 1, 08, 00, 00);
    let data1 = new Date(2022, 05 - 1, 29, 00, 00, 00);
    let data2 = new Date(2022, 07 - 1, 4, 00, 00, 00);
    let data3 = new Date(2022, 07 - 1, 3, 00, 00, 00);
    let data4 = new Date(2022, 08 - 1, 1, 00, 00, 00);
    let data5 = new Date(2022, 07 - 1, 31, 00, 00, 00);
    let data6 = new Date(2022, 08 - 1, 22, 00, 00, 00);
    let data7 = new Date(2022, 08 - 1, 21, 00, 00, 00);
    let data8 = new Date(2022, 09 - 1, 12, 00, 00, 00);

    let dataProva = new Date(2022, 05 - 1, 29, 10, 00, 00);

    if (dia.getTime() > data1.getTime() & dia.getTime() < data2.getTime()) {
        dataProva = new Date(2022, 07 - 1, 3, 00, 00, 00);
    } else if (dia.getTime() > data3.getTime() & dia.getTime() < data4.getTime()) {
        dataProva = new Date(2022, 07 - 1, 31, 00, 00, 00);
    } else if (dia.getTime() > data5.getTime() & dia.getTime() < data6.getTime()) {
        dataProva = new Date(2022, 08 - 1, 21, 00, 00, 00);
    } else if (dia.getTime() > data7.getTime() & dia.getTime() < data8.getTime()) {
        dataProva = new Date(2022, 09 - 1, 11, 00, 00, 00);
    }

    // ----------------------------------------------------------------

    let dd = String(dataProva.getDate()).padStart(2, "0");
    let mm = String(dataProva.getMonth() + 1).padStart(2, "0");

    let exam = mm + "/" + dd + "/2022";

    const countDown = new Date(2022, mm - 1, dd, 10, 00, 00).getTime(),
        x = setInterval(function() {

            const now = new Date().getTime(),
                distance = countDown - now;

            document.getElementById("days").innerText = Math.floor(distance / (day)),
                document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

            if (Math.floor(distance / (day)) == 1) {
                document.getElementById("daysText").innerText = "DIA";
            }
            if (Math.floor((distance % (day)) / (hour) == 1)) {
                document.getElementById("hoursText").innerText = "HORA";
            } else {
                document.getElementById("secondsText").innerText = "HORAS";
            }
            if (Math.floor((distance % (hour)) / (minute)) == 1) {
                document.getElementById("minutesText").innerText = "MINUTO";
            } else {
                document.getElementById("secondsText").innerText = "MINUTOS";
            }
            if (Math.floor((distance % (minute)) / second) == 1) {
                document.getElementById("secondsText").innerText = "SEGUNDO";
            } else {
                document.getElementById("secondsText").innerText = "SEGUNDOS";
            }
            //do something later when date is reached
            if (distance < 0) {
                document.getElementById("headline").innerText = "Prova Liberada!";
                document.getElementById("countdown").style.display = "none";
                document.getElementById("content").style.display = "block";
                clearInterval(x);
            }

            //seconds
        }, 0)
}());