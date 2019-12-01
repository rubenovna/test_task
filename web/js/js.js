"use strict";

ymaps.ready(init);
var myMap,
    myPlacemark1,
    myPlacemark2,
    myPlacemark3;


function init() {


    myMap = new ymaps.Map("map", {

        center:
            [53.9041915504904,27.56166230229994],
        zoom: 11
    });

    var cityList = new ymaps.control.ListBox({
        data: {
            content: 'Административные районы'
        },
        items: [
            new ymaps.control.ListBoxItem('Заводской'),
            new ymaps.control.ListBoxItem('Ленинский'),
            new ymaps.control.ListBoxItem('Октябрьский'),
            new ymaps.control.ListBoxItem('Московский'),
            new ymaps.control.ListBoxItem('Партизанский'),
            new ymaps.control.ListBoxItem('Первомайский'),
            new ymaps.control.ListBoxItem('Советский'),
            new ymaps.control.ListBoxItem('Фрунзенский'),
            new ymaps.control.ListBoxItem({
                options: {
                  type: 'separator'
                }
            }),
            new ymaps.control.ListBoxItem('Центральный'), ]
    });
    cityList.get(0)
        .events.add('click', function () {
        myMap.setCenter([53.87809242361801,27.644139354646416]);
        myMap.setZoom(13);



    });
    cityList.get(1)
        .events.add('click', function () {
        myMap.setCenter([53.868782000975386,27.493693421854186]);
        myMap.setZoom(13);
    });
    cityList.get(2)
        .events.add('click', function () {
        myMap.setCenter([53.859174374092646,27.53526766158502]);
        myMap.setZoom(13);
    });

    cityList.get(3)
        .events.add('click', function () {
        myMap.setCenter([53.87357497978396,27.492194420604864]);
        myMap.setZoom(13);

    });

    cityList.get(4)
        .events.add('click', function () {
        myMap.setCenter([53.904098215861296,27.63690496137635]);
    });

    cityList.get(5)
        .events.add('click', function () {
        myMap.setCenter([53.936888049035424,27.64938909236309]);
        myMap.setZoom(13);
    });

    cityList.get(6)
        .events.add('click', function () {
        myMap.setCenter([53.94423348200522,27.583399839462135]);
        myMap.setZoom(13);
    });

    cityList.get(7)
        .events.add('click', function () {
        myMap.setCenter([53.91565252860143,27.46168319419997]);
        myMap.setZoom(13);
    });
    cityList.get(8)
        .events.add('click', function () {
        myMap.setCenter([53.93392784392248,27.51820270256179]);
        myMap.setZoom(13);
    });

    myMap.controls.add(cityList, {
        floatIndex: 0
    });
    myMap.controls.add(cityList);


    myPlacemark1 = new ymaps.Placemark([53.87690721178656, 27.594871000000012], {
        balloonContentHeader: 'ГИППО',
        balloonContentBody: '......',
        balloonContentFooter: '.......',
        hintContent: '............'
    });
    myMap.geoObjects.add(myPlacemark1);


    myPlacemark2 = new ymaps.Placemark([53.869698827027975,27.65837182256251], {
        balloonContentHeader: 'Торпедо',
        balloonContentBody: 'Стадион',
        balloonContentFooter: 'Торпедо',
        hintContent: 'Торпедо'
    });
    myMap.geoObjects.add(myPlacemark2);

    myPlacemark3 = new ymaps.Placemark([53.84863263096088,27.518424966330063], {
        balloonContentHeader: 'вдхр.Лошица',
        balloonContentBody: '.....',
        balloonContentFooter: 'Лощица',
        hintContent: 'Лошица'
    });
    myMap.geoObjects.add(myPlacemark3);

}