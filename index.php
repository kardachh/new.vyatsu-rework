<?php
require_once("./header.php")
?>
<!-- left-menu -->
<div class="fixed bg-blue-800 rounded-br-2xl  w-72 h-[90%] drop-shadow-lg hidden sm:block">
    <!-- logo -->
    <div class="h-36 flex justify-center border-b border-blue-900">
        <div class="flex flex-row items-center justify-evenly">
            <img class="h-14" src="/assets/logo.svg" />
            <div class="ml-3 flex flex-col text-white font-bold leading-5">
                <div>Вятский</div>
                <div>Государственный</div>
                <div>Университет</div>
            </div>
        </div>
    </div>

    <!-- arrow menu -->
    <div class="w-full h-16 border-b border-blue-900 justify-evenly items-center text-white flex">
        <div class="cursor-pointer w-6 flex justify-center">
            <img src="assets/arrow_left.svg" />
        </div>
        <div>1. Текст</div>
        <div class="cursor-pointer w-6 flex justify-center">
            <img class = "rotate-180" src="assets/arrow_left.svg" />
        </div>
    </div>

    <!-- menu item list -->
    <div class = "overflow-auto left-menu-cont-items">
        <div class="w-full h-16 px-5 border-t first:border-t-0 border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
        <div class="w-full h-16 px-5 border-t border-blue-900 flex justify-start items-center text-white cursor-pointer">
            Расписание
        </div>
    </div>

    <div class = "h-72  w-full absolute bottom-0 p-7 flex flex-col justify-between">
        <!-- number-menu -->
        <div class = "flex flex-col justify-between items-start">
            <div class="text-white flex items-center">
                <div class = "mr-4 last:mr-0 font-bold text-lg">
                    01
                </div>
                <div class = "mr-4 last:mr-0">
                    02
                </div>
                <div class = "mr-4 last:mr-0">
                    03
                </div>
                <div class = "mr-4 last:mr-0">
                    04
                </div>
                <div class = "mr-4 last:mr-0">
                    05
                </div>
            </div>
            <div class = "font-bold text-white">
                Текст
            </div>
        </div>
        <!-- centr-info -->
        <div class = "text-white flex flex-col justify-between h-32">
            <div>
                Центр организации корпоративного обучения сотрудников и студентов
            </div>
            <div class = "text-xl">
                742-752
            </div>
            <div class = "underline">
            ko@vyatsu.ru
            </div>
        </div>
    </div>
</div>

<div class = "fixed h-[10%] w-72 bottom-0 flex justify-center items-center">
    <div class = "border-4 rounded-xl h-[50px] w-[240px] flex justify-center items-center">
        <div class = "text-[14px]">
            Оставить отзыв о странице
        </div>
    </div>
</div>

<!-- top-menu -->
<div class="top-menu h-36 top-0 left-72 fixed bg-white drop-shadow-lg z-30 hidden sm:flex">
    <!-- search and tags -->
    <div class="px-10 flex flex-col justify-center w-3/4 md:w-3/4">
        <div class=" w-full flex border-b">
            <input class="w-full border-0 outline-0 leading-10" placeholder="Поиск услуг, информации и т.п." />
            <div class="cursor-pointer flex items-center justify-center w-6">
                <img src="./assets/search.svg" />
            </div>
        </div>
        <div class="flex mt-3 overflow-auto scrollbar-hide">
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>
            <div class="cursor-pointer mr-4 last:mr-0 border hover:bg-blue-600 hover:text-white py-1 px-4 rounded-xl">
                Новостти
            </div>

        </div>
    </div>
    <!-- user -->
    <div class="flex items-center justify-evenly px-6">
        <!-- avatar -->
        <div class="flex items-center justify-center w-16 relative">
            <img class="rounded-full" src="./assets/2021-12-06 10.53.01.jpg" />
            <div class="bg-red-600 rounded-full px-2 absolute right-0 top-0 text-white flex items-center justify-center">
                <div>111</div>
            </div>
        </div>
        <!-- info -->
        <div class="hidden items-center px-6 lg:flex">
            <div class="flex flex-col">
                <div class="text-blue-500 text-lg">Д. А. Кардаков</div>
                <div>usr22451</div>
                <div>Сотрудник</div>
            </div>
            <div class="cursor-pointer">
                <img src="assets/не актив.svg" />
            </div>
        </div>
    </div>
</div>

<!-- body page -->
<div class="absolute top-36 left-72 p-10">
    <div class="">
        Начало
        <br>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus vel blandit risus. Morbi tristique sapien augue. Praesent sem felis, placerat vel quam ac, hendrerit molestie purus. Vivamus iaculis sagittis ante sed gravida. Vivamus ornare enim erat, eleifend pellentesque libero tincidunt vel. Donec vel condimentum sem. Maecenas eget imperdiet dui. Sed placerat, lectus id tempus scelerisque, ipsum nulla vestibulum libero, vel lobortis dolor nisi quis quam. Etiam in euismod felis, et vestibulum lectus. Integer viverra mi quis ligula cursus, quis placerat mauris imperdiet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vivamus convallis, sapien vel lacinia bibendum, ipsum dolor sodales magna, in pulvinar purus odio non magna. Duis facilisis erat suscipit ex finibus, et feugiat odio varius. Maecenas suscipit venenatis tellus efficitur euismod. Pellentesque id lorem mattis, mollis augue in, convallis tellus. Phasellus fermentum, sapien id bibendum blandit, enim mi congue nunc, non blandit dolor sem ac velit. Nam tincidunt metus justo, sit amet finibus dui pulvinar at. Curabitur ipsum velit, iaculis sit amet interdum ut, luctus sed velit. Maecenas sollicitudin, arcu tristique semper pretium, elit risus posuere lorem, eu pellentesque nisl nisl sit amet risus. Nullam fringilla ut risus tempor convallis. Donec sodales nulla sapien, vel mollis lectus sollicitudin et. Duis nec tellus in ante malesuada condimentum non pharetra risus. Curabitur molestie, dui vitae molestie dictum, felis eros tempor felis, vel fringilla quam tellus ut quam. Aenean ac leo ullamcorper, consectetur lacus at, ornare urna. Aliquam erat volutpat. Vestibulum sollicitudin efficitur risus, nec aliquet enim aliquet et. Suspendisse vel dictum magna, quis malesuada nisl. Nam ut consectetur lectus, varius euismod sapien. Praesent eu sodales ipsum. Ut aliquet nisi et dictum semper. Fusce turpis tortor, gravida non finibus iaculis, pellentesque a ipsum. Ut pellentesque augue id tincidunt congue. Fusce sed dolor eget risus egestas vulputate id eu mauris. Integer lobortis, erat in tempor tincidunt, felis mauris aliquam lectus, nec imperdiet tellus lacus quis sapien. Vivamus tincidunt vestibulum urna, nec dignissim erat pharetra vel. Maecenas libero orci, maximus et tellus quis, auctor posuere lectus. Vestibulum arcu sem, luctus ut orci eu, dictum scelerisque lacus. Sed auctor interdum molestie. Vivamus in vehicula magna, sed vulputate mauris. Sed molestie accumsan accumsan. Nullam id purus vel leo viverra facilisis sed ac massa. Cras faucibus nisi eget lorem facilisis, et gravida lorem vestibulum. Quisque vehicula sed est non ultrices. Morbi tempor varius scelerisque. Duis consequat lacus eros.
        <br>
        Конец
    </div>
</div>