<?php
require_once("./header.php")
?>
<!-- left-menu -->
<div id="left-menu" class="fixed z-50 bg-[#2E9ECB] sm:rounded-br-2xl w-full sm:w-72 h-full sm:h-[90%] sm:drop-shadow-lg hidden sm:block">
    <!-- logo -->
    <div class="h-20 sm:h-36 px-7 sm:px-0 flex justify-between sm:justify-center items-center sm:border-b border-white ">
        <div class="flex flex-row items-center justify-evenly">
            <img class="h-10 sm:h-14" src="/assets/logo.svg" />
            <div class="ml-3 flex flex-col text-white font-bold leading-4 sm:leading-5 text-sm sm:text-base ">
                <div>Вятский</div>
                <div>Государственный</div>
                <div>Университет</div>
            </div>
        </div>
        <div class="cursor-pointer left-menu-close sm:hidden w-10 h-10 flex justify-center items-center">
            <img src="assets/close.svg" />
        </div>
    </div>

    <!-- arrow menu -->
    <div class="w-full h-16 border-b border-white justify-evenly items-center text-white flex">
        <div id="left-menu-left-arrow" class="cursor-pointer w-6 flex justify-center">
            <img src="assets/arrow_left.svg" />
        </div>
        <div class="flex">
            <span id="left-menu-number-top" class="mr-1"></span>
            <div class="left-menu-name">Текст</div>
        </div>
        <div id="left-menu-right-arrow" class="cursor-pointer w-6 flex justify-center">
            <img class="rotate-180" src="assets/arrow_left.svg" />
        </div>
    </div>

    <!-- menu item list -->
    <div id="left-menu-items" class="overflow-auto left-menu-cont-items scrollbar-thin scrollbar-color-main"></div>

    <div class="h-72  w-full absolute bottom-20 sm:bottom-0 p-7 flex flex-col justify-between">
        <!-- number-menu -->
        <div class="flex flex-col justify-between items-start">
            <div id="number-menu" class="text-white flex items-center">
            </div>
            <div class="left-menu-name font-bold text-white">
                Текст
            </div>
        </div>
        <!-- centr-info -->
        <div class="text-white flex flex-col justify-between h-32">
            <div>
                Центр организации корпоративного обучения сотрудников и студентов
            </div>
            <div class="text-xl">
                742-752
            </div>
            <div class="underline">
                ko@vyatsu.ru
            </div>
        </div>
    </div>

    <!-- feedback mobile -->
    <div class="flex sm:hidden fixed h-20 w-full bottom-0 justify-center items-center">
        <button class="border-2 border-white rounded-xl h-[50px] w-[240px] flex justify-center items-center">
            <div class="text-[14px] text-white">
                Оставить отзыв о странице
            </div>
        </button>
    </div>
</div>

<!-- feedback desktop -->
<div class="hidden sm:flex fixed h-[10%] w-72 bottom-0 justify-center items-center">
    <button class="border-2 border-[#2E9ECB] rounded-xl h-[50px] w-[240px] flex justify-center items-center">
        <div class="text-[14px] text-[#2E9ECB]">
            Оставить отзыв о странице
        </div>
    </button>
</div>

<!-- top-menu -->
<div class="top-menu sm:h-36 top-24 sm:top-0 sm:left-72 relative sm:fixed bg-white sm:drop-shadow-lg sm:z-30 sm:flex justify-between">
    <!-- search and tags -->
    <div class="px-4 sm:px-10 flex flex-col justify-center w-full sm:w-3/4 md:w-3/4 xl:w-2/3 2xl:w-3/4">
        <div class=" w-full flex border-b px-3">
            <input class="w-full border-0 outline-0 leading-10" placeholder="Поиск услуг, информации и т.п." />
            <div class="cursor-pointer flex items-center justify-center w-6">
                <img src="./assets/search.svg" />
            </div>
        </div>
        <div class="relative flex items-center mt-3">
            <div class="left-arrow hidden justify-start absolute h-full w-10 bg-gradient-to-l from-transparent to-white">
                <img src="./assets/arrow_down.svg" style="transform:rotate(90deg); width: 20px;" />
            </div>
            <div class="right-arrow hidden justify-end absolute right-0 h-full w-10 bg-gradient-to-r from-transparent to-white">
                <img src="./assets/arrow_down.svg" style="transform:rotate(-90deg); width: 20px;" />
            </div>
            <div id="favorite-pages" class="flex overflow-auto scrollbar-hide whitespace-nowrap"></div>
        </div>
    </div>
    <!-- user -->
    <div class="hidden sm:flex items-center justify-evenly px-6  w-full sm:w-1/4 md:w-1/4 xl:w-1/3 2xl:w-1/4">
        <!-- avatar -->
        <div class="flex items-center justify-center w-16 relative">
            <img class="rounded-full" src="./assets/2021-12-06 10.53.01.jpg" />
            <div class="bg-red-600 rounded-full px-2 absolute right-0 top-0 text-white text-sm flex items-center justify-center">
                <div>1</div>
            </div>
        </div>
        <!-- info -->
        <div class="hidden items-center px-6 xl:flex">
            <div class="flex flex-col">
                <div class="text-[#2E9ECB] text-lg whitespace-nowrap">Д. А. Кардаков</div>
                <div>usr22451</div>
                <div>Сотрудник</div>
            </div>
            <div class="cursor-pointer flex justify-center items-center">
                <div class="w-10 h-10 flex justify-center items-center">
                    <img src="assets/arrow_down.svg" />
                </div>
            </div>
        </div>
    </div>
</div>

<!-- top-bar for mobile -->
<div id="top-bar" class="fixed top-0 h-20 w-full bg-[#2E9ECB] rounded-b-2xl z-50 flex sm:hidden justify-between items-center px-7">
    <div class="cursor-pointer burger w-10 h-10 flex justify-center items-center">
        <img class="w-6" src="./assets/burger.svg" />
    </div>
    <div class="flex items-center justify-center w-10 relative">
        <img class="rounded-full" src="./assets/2021-12-06 10.53.01.jpg" />
        <div class="bg-red-600 rounded-full px-1 absolute right-0 top-0 text-white text-xs flex items-center justify-center">
            <div>1</div>
        </div>
    </div>
</div>

<!-- body page -->
<div class="absolute text-justify top-48 sm:top-36 sm:left-72 p-4 sm:p-10">
    <div class="">
        Начало
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros.
        <br>
        Конец
    </div>
</div>

<!-- скрипт для прокрутки часто открываемых страниц -->
<script>
    const leftArrow = $(".left-arrow")
    const rightArrow = $(".right-arrow")
    const scrollCont = $("#favorite-pages")

    let scrollPos = 0;


    const checkScroll = () => {
        const maxLeft = scrollCont[0].scrollWidth - scrollCont[0].clientWidth
        let st = $(scrollCont).scrollLeft();

        st < maxLeft ?
            $(rightArrow).css("display", "flex") :
            $(rightArrow).css("display", "none")
        st > 0 ?
            $(leftArrow).css("display", "flex") :
            $(leftArrow).css("display", "none")
        scrollPos = st;
    }

    $(document).ready(checkScroll)
    $(window).resize(checkScroll)
    $(scrollCont).scroll(checkScroll)

    $(leftArrow).on("click", () => $(scrollCont).animate({
        scrollLeft: scrollPos - 250
    }, 500, 'swing'))
    $(rightArrow).on("click", () => $(scrollCont).animate({
        scrollLeft: scrollPos + 250
    }, 500, 'swing'))
</script>

<!-- открытие left-menu в мобильной версии -->
<script>
    const burger = $(".burger");
    const leftMenu = $("#left-menu")
    const topBar = $("#top-bar")
    const close = $(".left-menu-close")

    const onClickBurger = () => {
        $(leftMenu).css("display", "block")
        $(topBar).css("display", "none")
        $("body").css("overflow", "hidden")
    }

    const onClickClose = () => {
        $(leftMenu).css("display", "none")
        $(topBar).css("display", "flex")
        $("body").css("overflow", "auto")
    }

    $(burger).click(() => onClickBurger())
    $(close).click(() => onClickClose())
</script>

<!-- динамическое заполнение и работа left-menu -->
<script>  
    const numberMenu = $('#number-menu')
    const leftMenuName = $('.left-menu-name')
    const leftMenuItems = $('#left-menu-items')
    const leftMenuNumberTop = $('#left-menu-number-top')
    const leftMenuLeftArrow = $('#left-menu-left-arrow')
    const leftMenuRightArrow = $('#left-menu-right-arrow')

    let currentLeftMenu = 0;
    //! для отладки
    const leftMenuInfo = [{
            name: "Наш университет",
            links: [{
                name: "Сведения об ОО",
                url: "https://new.vyatsu.ru/sveden/"
            }, ],
        },
        {
            name: "Поступление",
            links: [{
                    name: "Специальности и направления подготовки",
                    url: "https://new.vyatsu.ru/admission/admission_special/"
                },
                {
                    name: "Подготовка к поступлению",
                    url: "https://new.vyatsu.ru/admission/prep_admission/"
                },
                {
                    name: "Информация о приёме",
                    url: "https://new.vyatsu.ru/admission/admission_info/"
                },
                {
                    name: "Календарь абитуриента",
                    url: "https://new.vyatsu.ru/admission/admission_terms/"
                },
                {
                    name: "Специальности и направления",
                    url: "https://new.vyatsu.ru/admission/admission_special/"
                },
                {
                    name: "Специальности и направления",
                    url: "https://new.vyatsu.ru/admission/admission_special/"
                },
            ],
        },
        {
            name: "Cотруднику",
            links: [{
                name: "Ссылка на страницу сотрудников",
                url: "https://www.vyatsu.ru/sotrudniku.html"
            }, ],
        },
    ];

    const changeLeftMenu = (number) => {
        if (number === leftMenuInfo.length) {
            currentLeftMenu = 0
        } else if (number < 0) {
            currentLeftMenu = leftMenuInfo.length - 1;
        } else currentLeftMenu = number

        leftMenuNumberTop.text(`${currentLeftMenu+1}.`);
        leftMenuName.text(leftMenuInfo[currentLeftMenu].name)

        leftMenuItems.children().remove()
        leftMenuItems.append(leftMenuInfo[currentLeftMenu].links.map((link)=>`
            <a href=${link.url} draggable=false class="w-full h-16 px-5 border-t first:border-t-0 border-white flex justify-start items-center text-white text-[14px] sm:text-base cursor-pointer ">
                ${link.name}
            </a>
        `))

        numberMenu.children().removeClass('font-bold text-lg')
        $(`#number-menu-${currentLeftMenu}`).addClass('font-bold text-lg')
    }

    $(document).ready(() => {
        numberMenu.append(leftMenuInfo.map((leftMenusItem, index) => {
            return `
            <div id="number-menu-${index}" class="number-menu-item cursor-pointer mr-4 last:mr-0">
                ${index+1}
            </div>
            `
        }))

        $(".number-menu-item").click((number) =>
            changeLeftMenu(parseInt($(number.target).attr('id').split('-')[2])))

        leftMenuLeftArrow.click(() => changeLeftMenu(--currentLeftMenu))
        leftMenuRightArrow.click(() => changeLeftMenu(++currentLeftMenu))

        changeLeftMenu(currentLeftMenu);
    });
</script>

<script>
    /*
        <a draggable=false href="#" class="cursor-pointer mr-4 last:mr-0 text-sm sm:text-base border hover:bg-[#2E9ECB] hover:text-white py-1 px-4 rounded-xl flex justify-center items-center">
            <div>Расписание</div>
        </a>
     */
    const favoritePagesInfo = [
        {
            name:"Расписание",
            url:"#"
        },
        {
            name:"Зачетная книжка",
            url:"#"
        },
        {
            name:"Опросы",
            url:"#"
        },
        {
            name:"Календарь абитуриента",
            url:"#"
        },
        {
            name:"Специальности",
            url:"#"
        },
        {
            name:"День открытых дверей",
            url:"#"
        },
    ]
    $('#favorite-pages').append(favoritePagesInfo.map((page)=>`
        <a draggable=false href="${page.url}" class="cursor-pointer mr-4 last:mr-0 text-sm sm:text-base border hover:bg-[#2E9ECB] hover:text-white py-1 px-4 rounded-xl flex justify-center items-center">
            <div>${page.name}</div>
        </a>
    `))

</script>