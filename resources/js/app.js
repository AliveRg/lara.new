import $ from "jquery";
import {vModelCheckbox} from "vue";


$(function () {
    $(".header__burger, .katalog__text").on("click", function (event) {
        event.preventDefault();
        $(".open__menu").toggleClass("active");
        $("#header__burger").toggleClass("active");
    });
})

document.addEventListener('DOMContentLoaded', function (){

$(function () {
    $("#arrow-1").on("click", function (event) {
        event.preventDefault();
        $("#arrow-1").toggleClass("active");
        $(".filter__variable-0").toggleClass("active");
    });
    $("#arrow-2").on("click", function (event) {
        event.preventDefault();
        $("#arrow-2").toggleClass("active");
        $(".filter__variable-2").toggleClass("active");
    });
    $("#arrow-3").on("click", function (event) {
        event.preventDefault();
        $("#arrow-3").toggleClass("active");
        $(".filter__variable-3").toggleClass("active");
    });
    $("#arrow-4").on("click", function (event) {
        event.preventDefault();
        $("#arrow-4").toggleClass("active");
        $(".filter__variable-4").toggleClass("active");
    });
    $("#arrow-5").on("click", function (event) {
        event.preventDefault();
        $("#arrow-5").toggleClass("active");
        $(".filter__variable-5").toggleClass("active");
    });
    $("#arrow-6").on("click", function (event) {
        event.preventDefault();
        $("#arrow-6").toggleClass("active");
        $(".filter__variable-6").toggleClass("active");
    });
    $("#arrow-7").on("click", function (event) {
        event.preventDefault();
        $("#arrow-7").toggleClass("active");
        $(".filter__variable-7").toggleClass("active");
    });
    $("#arrow-8").on("click", function (event) {
        event.preventDefault();
        $("#arrow-8").toggleClass("active");
        $(".filter__variable-8").toggleClass("active");
    });
    $("#arrow-9").on("click", function (event) {
        event.preventDefault();
        $("#arrow-9").toggleClass("active");
        $(".filter__variable-9").toggleClass("active");
    });

    $(".show__more, .show__less").on("click", function (event) {
        event.preventDefault();
        $(".filter-show__item").toggleClass("active");
        $(".show__more").toggleClass("active");
        $(".show__less").toggleClass("active");
    });

})



const elements = document.querySelectorAll('.label_elements')
const elementPosition = document.querySelector('#checkBtn')
const child = document.querySelectorAll('.check__span')



const heightBtn = 45;
const heightBtnFloat = parseFloat(heightBtn)

let formFilter = document.querySelector('#form__filters');

const LocalStorage = localStorage;
let formData = {}
let timerId


formFilter.addEventListener('click', event => {
    const target = event.target;
    if (target.classList.contains('label_elements' )) {

        const posY = event.pageY;
        elementPosition.style.top = -(heightBtnFloat / 2) + posY + "px";
        elementPosition.style.opacity = 1

        clearTimeout(timerId)
        timerId = setTimeout(() => {
            elementPosition.style.opacity = 0
        }, 3000)
    }

    if (target.classList.contains('check__span')) {
        const posY = event.pageY;
        elementPosition.style.top = -(heightBtnFloat / 2)  + posY + "px";
        elementPosition.style.opacity = 1

        clearTimeout (timerId);

        timerId = setTimeout(() => {
            elementPosition.style.opacity = 0
        }, 3000)
    }

    // formData[target.name] = target.value;
    // LocalStorage.setItem('formData', JSON.stringify(formData))
    // if (LocalStorage.getItem('formData')) {
    //     formData = JSON.parse(LocalStorage.getItem('formData'))
    //     for (let key in formData) {
    //         if (formFilter.elements[key].type === 'checkbox' && formFilter.element[key].value === 'on') {
    //             formFilter.element[key].cheked = true;
    //         }
    //         else {
    //             formFilter.elements[key].value = formData[key]
    //         }
    //     }
    // }
    });

    formFilter.addEventListener('hover', event => {
        const target = event.target;
        const visiblePanel = document.querySelectorAll('.filter_info-panel-wrapper')

        if (target.classList.contains('for_info')) {
            visiblePanel.style.opacity = 1
            visiblePanel.style.visibility = 'visible'
        }

    });
});

document.addEventListener('DOMContentLoaded', function (){


    const selectSorting = document.querySelector('.select')
    const selectOpenOption = document.querySelector('.select__body')
    const selectCurrent = document.querySelector('.select__current')


    selectSorting.addEventListener('click', (event) => {
        const target = event.target;
        function bodySelectActive () {
            $(".select__body").toggleClass("active");
        }



        if (target.classList.contains('select__current', 'select__icon')) {
            bodySelectActive()
        }
        if (target.classList.contains('select__item')) {
            let text = target.innerText;
            selectCurrent.innerText = text;
            $(".select__body").removeClass("active");

        }
    })

});















